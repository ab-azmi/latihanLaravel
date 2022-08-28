<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
  
    public function index()
    {
        // $items = Item::with('type')->latest()->simplePaginate(10);
        $items = Item::join('item_types', 'items.item_type_id', '=', 'item_types.id')->simplePaginate(10);

        return view('items.index', [
            'items' => $items
        ]);
    }

    public function create(){
        return view('items.create');
    }

    public function store(Request $request){
        $it = Item::create($request->all());
        return back();
    }

    public function edit(Item $item){
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item){
        $item->update($request->all());
        return to_route('items.index');
    }

    public function delete(Item $item){
        $item->delete();
        return back();
    }
   
}
