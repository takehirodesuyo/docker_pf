<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class DogController extends Controller
{
    //
    public function index()
    {
        //テーブルの情報を変数に代入
        // ペジネーション
        //文字数の指定
        // $dogs = Dog::select('*', DB::raw('LEFT(remarks, 20) as remarks'))->paginate(15);
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
        $skill->remarks = $request->input('remarks');
        $skill->experience_year = $request->input('experience_year');
        $skill->save();

        return redirect('dog')->with('status', 'スキルを作成しました');
        // ここの第一引数はindex.blade.phpのセッションにはいる
    }

    public function edit($id)
    {
        $dog = Dog::find($id);
        return view('dog.edit', ['dog' => $dog]);
    }

    public function update(Request $request)
    {
        $skill = Dog::find($request->input('id'));
        $skill->dog_name = $request->input('dog_name');
        $skill->dog_status = $request->input('dog_status');
        $skill->remarks = $request->input('remarks');
        $skill->experience_year = $request->input('experience_year');
        $skill->save();

        return redirect('dog')->with('status', 'スキルを更新しました');
        // ここの第一引数はindex.blade.phpのセッションにはいる
    }

    public function remove($id)
    {
        Dog::find($id)->delete();
        return redirect('dog')->with('status', 'スキルを削除しました');
    }

   


}
