<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class Itemcontroller extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $items = Item::all();
        // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('Items.index', ['items' => $items]);
    }
    
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
    }

}