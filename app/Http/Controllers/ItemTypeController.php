<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use App\Http\Requests\StoreItemTypeRequest;
use App\Http\Requests\UpdateItemTypeRequest;

class ItemTypeController extends Controller
{
    
    public function index()
    {
        $types = ItemType::latest()->simplePaginate(50);
        return view('types.index', [
            'types' => $types
        ]);
    }

    
    public function create()
    {
        return view('types.create');
    }

   
    public function store(StoreItemTypeRequest $request)
    {
        $validated = $request->validate();
        $i = ItemType::create($validated);
        if($i){
            return back();
        }

        return to_route('types.index');
    }

    public function show(ItemType $itemType)
    {
        //
    }

  
    public function edit(ItemType $type)
    {
        return view('items.edit', $type);
    }

    public function update(UpdateItemTypeRequest $request, ItemType $itemType)
    {
        $validated = $request->validate();
        $u = $itemType->update($validated);
        if($u){
            return back();
        }
        return to_route('types.index');
    }

   
    public function destroy(ItemType $type)
    {
        $d = $type->delete();

        if($d){
            return back();
        }
        return to_route('types.index');
    }
}
