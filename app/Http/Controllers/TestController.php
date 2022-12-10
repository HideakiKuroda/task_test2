<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\DB; //クエリビルダを使うときには必須

class TestController extends Controller
{
    public function index(){

        //Eloquen(エロクアント)
        $values = Test::all(); // 全件取得 

        $count = Test::count();//データの件数を返す

        $first = Test::findOrFail(1); //idを指定して呼び出す

        $whereBB = Test::where('text','=','aaa')->get();//コレクション型で取得する

        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text','=','aaa')
        ->select('id','text')
        ->get();//コレクション型で取得するために必須
        
        dd($values,$count,$first,$whereBB,$queryBuilder); // die + var_dump 処理を止めて内容を確認できる 
        //compact関数でView側に変数を渡すと楽 
        // 変数が複数あってもコンマでつなげば複数渡せる 
        return view('tests.test', compact('values')); 
    }
}
