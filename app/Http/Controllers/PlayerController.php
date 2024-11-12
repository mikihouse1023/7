<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
class PlayerController extends Controller
{
    //
    public function index()
{
    echo "Hello World";
}

   
}
/*
class PlayerController extends Controller {
    public function index() {
        $params = [
            'test' => 'これはテストです。',
            'sample' => 'これはサンプルです。'
        ];
        return view('players.index', compact('params'));
    }
}
*/
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller {
    public function index() {
        $players = DB::table('players')->get();
        return view('players.index', ['players' => $players]);
    }
}
