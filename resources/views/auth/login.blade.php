@extends('layouts.front')

@section('content')

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border">
                        <div class="card-body">
                            <h4 class="text-center font-weight-bold mb-5">Sign in</h4>
                            <div class="row">
                                <div class="col-md-6"><a href="#" class="btn btn-light mb-1"><span><i
                                                class="fa fa-youtube-square"></i></span> Connect with facebook</a></div>
                                <div class="col-md-6"><a href="#" class="btn btn-light mb-1"><span><img
                                                src="{{ asset('assets/icons/google-brands.svg') }}" style="height:16px; width:auto;"></span>
                                        Connect with Google</a></div>
                            </div>
                            <p class="text-center py-3">Or</p>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="" aria-describedby="helpId"
                                           placeholder="Enter email address">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                                           placeholder="Password">
                                    <small class="form-text text-muted float-right mb-3"><a href="{{ route('password.request') }}">Forgot
                                            password</a></small>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Sign in</button>
                            </form>


                        </div>
                    </div>
                    <p class="text-center mt-3" style="font-size:10pt;">You dont have an account? <a href="{{ route('register') }}"
                                                                                                     class="">signup
                            instead</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
