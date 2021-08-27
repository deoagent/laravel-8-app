<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample(){
        //echo "<h1>Welcome to test Controller</h1>";
        return view("sample-view", [
            'name' => 'Deo',
            'email' => 'deo@gmail.com'
        ]);
    }
}