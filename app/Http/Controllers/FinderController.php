<?php

namespace App\Http\Controllers;




class FinderController extends Controller
{
   public function index()
   {
        // echo $_GET('seach');
       // hoac truyen ra v
        return view('finder.index');
   }
}
