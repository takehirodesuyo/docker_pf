<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    //
    public function index()
    {
        //テーブルの情報を変数に代入
        $dogs = Dog::all();
        return view('dog.index', ['dogs' => $dogs]);
    }
}
