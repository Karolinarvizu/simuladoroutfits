<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessorieController extends Controller
{
    public function index(){
        return view("admin.accessories.index");
    }
}
