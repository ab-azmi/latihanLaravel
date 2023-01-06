<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    
    public function index()
    {
        $types = ItemType::all();
        return view('types.index', compact('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    
    public function store(Request $request)
    {
        ItemType::create($request->all());

        return to_route('types.index');    
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $type = ItemType::findOrFail($id);
        return view('types.edit', compact('type'));
    }

    
    public function update(Request $request, $id)
    {
        $type = ItemType::findOrFail($id);
        $type->update($request->all());

        return to_route('types.index');
    }

    
    public function destroy($id)
    {
        $type = ItemType::findOrFail($id);
        $type->delete();

        return to_route('types.index');
    }
}
