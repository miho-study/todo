<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
// モデルを使用する処理
use App\http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        // todosテーブルの全レコードを取得するメソッド
        return view('index', compact('todos'));
        // return view('index', ['todos' => $todos])の省略版

    }

    public function store(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        // $requestの中から欲しいキーを取り出すメソッド
        Todo::create($todo);
        // createメソッドは$todoをDBに保存する
        return redirect('/')->with('message', 'Todoを作成しました');
        // リダイレクトとメッセージを送るときはreturn redirect('ルート')->with('キー','値');を使う
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);

        return redirect('/')->with('message', 'Todoを更新しました');
    }

    public function destroy(Request $request)
    {

        Todo::find($request->id)->delete();
        return redirect('/')->with('message','Todoを削除しました');
    }
}
