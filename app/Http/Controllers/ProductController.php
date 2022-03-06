<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('Product.index');
    }

    public function show($id, $name){
        return '$id: ' . $id . PHP_EOL . 'name: ' . $name;


    }
}
