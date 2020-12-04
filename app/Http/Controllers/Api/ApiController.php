<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    use AuthenticatesUsers;
    public  function  __construct()
    {
      auth()->setDefaultDriver('api');
    }// end of construct

}// end of controller
