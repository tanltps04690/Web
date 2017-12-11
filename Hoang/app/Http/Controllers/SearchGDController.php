<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use DB;

class SearchGDController extends Controller
{
    public function Search(Request $request)
    {
        $key = $request->input('key');
        $search  = new ProductModel();
        // $search= $check->Search($key);
        
        return view('searchGD',['result'=> $search->Search($key)]);
        
        
          
    }
}
