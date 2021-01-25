<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bonafide;
class weblessonController extends Controller
{
    //
    function index(Request $request)
    {
     if(request()->ajax()){
       
       $data = DB::table('bonafide')
         ->select('name')
         ->get();
    
          return datatables()->of($data)->make(true);
     

    }
}
