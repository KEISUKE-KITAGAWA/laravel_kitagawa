<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class Itemcontroller extends Controller
{
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
}

}