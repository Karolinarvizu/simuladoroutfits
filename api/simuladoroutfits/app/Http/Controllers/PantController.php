<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantController extends Controller
{
    public function index(){
        return view("admin.pants.index");
    }
}
