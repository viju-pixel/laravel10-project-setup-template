<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('backend.products.index');
    }

    public function addProduct(){
        return view('backend.products.create');
    }
    
}
