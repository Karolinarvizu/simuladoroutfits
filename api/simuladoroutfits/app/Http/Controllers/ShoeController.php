<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index(){
        return view("admin.shoes.index");
    }
}
