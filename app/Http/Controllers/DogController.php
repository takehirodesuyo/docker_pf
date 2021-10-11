<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class DogController extends Controller
{
    //
    public function index()
    {
        //テーブルの情報を変数に代入
        // ペジネーション
        $dogs = Dog::paginate(15);
        return view('dog.index', ['dogs' => $dogs]);
        //ここわからん
    }

    public function detail($id)
    {
        $dog = Dog::find($id);
        return view('dog.detail', ['dog' => $dog]);
    }

}
