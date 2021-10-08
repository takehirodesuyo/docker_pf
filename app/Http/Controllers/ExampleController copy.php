<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function index()
    {
        //テーブルの情報を変数に代入
        $examples = Example::all();
        return view('example', ['examples' => $examples]);
    }
}
