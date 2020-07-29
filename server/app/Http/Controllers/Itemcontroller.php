<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

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

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        // インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        
        //ファイルにimageをパスして画像ファイルを生成し、sorage/public/imageのに格納、$filenameに渡す
        $filename = $request->file('image')->store('public/image');
        // imageカラムの中に上で作成されたデータをbasenameメソッドで名前だけ保存
        $item->image = basename($filename);

        $item->timestamps = false;

        $item->save();

        // 登録したらindexに戻る
        return redirect('/items');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('Items.edit', ['item' => $item]);
    }

    public function update(Request $request, $id )
    {
        $item = Item::find($id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        
        if($request->file('image')){
            $filename = $request->file('image')->store('public/image');
            $item->image = basename($filename);
        }

        $item->timestamps = false;

        $item->save();

        return redirect('/items');
    }

    public function delete($id) 
    {
        $item = Item::find($id);
        return view('Items.delete', ['item' => $item]);
    }

    public function destroy($id) 
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }   

}