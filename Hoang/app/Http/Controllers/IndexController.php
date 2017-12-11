<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class IndexController extends Controller
{   
    public function index()
    {   
        $Product = new ProductModel();
        return view('home', ['women' => $Product->WoMen(),'men' => $Product->Man(),'kid' =>$Product->Kid()]);

    }
    
}
