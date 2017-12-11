<?php

namespace App\Http\Controllers;
use DB;
use App\Models\ProductModel;
use Illuminate\Http\Request;
class ChildController extends Controller
{
    public function show($id)
    {      
        $pro = new ProductModel();
           
    	return view('child',['pro' => $pro->getProduct($id),'cate'=>$pro->getCategory()]);
    }
} 
