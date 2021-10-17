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

    public function new()
    {
        //テーブルの情報を変数に代入
        // ペジネーション
        return view('dog.new');
    }

    public function create(Request $request)
    {
        $skill = new DOG();
        $skill->dog_name = $request->input('dog_name');
        $skill->dog_status = $request->input('dog_status');
        $skill->save();

        return redirect('dog')->with('status', 'スキルを作成しました');
        // ここの第一引数はindex.blade.phpのセッションにはいる
    }

}
