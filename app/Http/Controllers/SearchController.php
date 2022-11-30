<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request){
 
        if(isset($_GET['query']))
        {
            $search_text = $_GET['query'];
            $foods = DB::table('food')->where('food_name','LIKE','%'.$search_text.'%')->paginate(12);
            $foods->appends($request->all());
            return view('search',['foods'=>$foods]);
            
        }else
        
        {
         return view('search');    
        }

        
    }

        
    }
    