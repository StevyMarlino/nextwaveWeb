<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{

    public const baseUrl = 'http://127.0.0.1:8000/api' ;

    public static function requestCurl(array $data, string $endpoint, $request = 'POST')
    {

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => self::baseUrl."/".$endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $request,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
          'Accept: application/json',
          'Authorization: Bearer '. Session::get('token') ? Session::get('token') : ''
        ],
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return  json_decode($response,true);

    }
}
