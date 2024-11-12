<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $todos = [
            ['id' => 1, 'task' => '買い物をする', 'completed' => false],
            ['id' => 2, 'task' => 'メールをチェックする', 'completed' => true],
            ['id' => 3, 'task' => '学習する', 'completed' => false],
        ];
        //views内に直接[index.blade.php]を作成する場合。
        return view('index', ['todos' => $todos]);
        /* views内に[todo]フォルダを作成し、内部に[index.blade.php]を作成する場合
        return view('todos.index', ['todos' => $todos]);*/
    }
}
