<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return RedirectResponse
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $response = ApiController::requestCurl($request->all(), 'register');

        if (isset($response['status']) && !$response['status']) {
            return back()->withErrors($response['message']);
        }

        $request->session()->regenerate();

        Session::put('token', $response['token']);
        Session::put('user', $response['user']);


        return redirect(RouteServiceProvider::HOME);
    }
}
