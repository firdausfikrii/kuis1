<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataBuku'] = Buku::all();
		return view('admin.buku.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
		return view('admin.buku.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data['judul'] = $request->judul;
		$data['penulis'] = $request->penulis;
		$data['penerbit'] = $request->penerbit;
		$data['tahun_terbit'] = $request->tahun_terbit;
		$data['jumlah'] = $request->jumlah;

		Buku::create($data);

		return redirect()->route('buku.index')->with('success','Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
