<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MahasiswaRequest;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswas = Mahasiswa::groupBy('gender')->paginate();
        // dd($mahasiswas);
        return view('mahasiswa.index', [
            'mahasiswas' => $mahasiswas
        ]);
    }

    
    public function create()
    {
        return view('mahasiswa.create');
    }

    
    public function store(MahasiswaRequest $request)
    {
        $validated = $request->validated();
        $m = Mahasiswa::create($validated);
        
        return back();
    }

    
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validated();
        $mahasiswa->update($validated);
        return back();
    }

    
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return to_route('mahasiswas.index');
    }
}
