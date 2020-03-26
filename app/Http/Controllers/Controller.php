<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Controllers\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        //$this->Chklogin();
        //dd('construct');
         if(Auth::check())
          {
                view()->share('userlg',Auth::user());
         }
       //   view()->share('role','this is text');
    }
//    function Chklogin()
//    {
//       // if(Auth::check())
//      //  {
//            view()->share('userlg',Auth::user());
//       // }
//    }

}
