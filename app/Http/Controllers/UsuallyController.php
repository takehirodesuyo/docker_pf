<?php

namespace App\Http\Controllers;
use App\Models\Dog;

use Illuminate\Http\Request;


class UsuallyController extends Controller
{
    public function index()
    {
        return view('usually.index');
    } 

    public function template()
    {
        $str = 1;
        // Dogはテーブル名
        $skills = Dog::all();
        return view('usually.template', ['str' => $str, 'skills' => $skills]);
        // ここの'str'ってなんなんだ->bladeに渡したときの$strとなる
    }
}