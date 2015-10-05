<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perpus;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $perpus = Perpus::all();
        return view('perpus.index',compact('perpus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $perpus = new Perpus();
        $perpus->judul = $request->input('judul');
        $perpus->pengarang = $request->input('pengarang');
        $perpus->penerbit = $request->input('penerbit');
        $perpus->tahun = $request->input('tahun');
        $perpus->kota = $request->input('kota');
        $perpus->deskripsi = $request->input('deskripsi');
        if($perpus->save()){
            return redirect()->route('perpus.index')->with('alert','Berhasil menambah :)');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $perpus = Perpus::find($id);
        return view('perpus.show',compact('perpus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $perpus = Perpus::find($id);
        return view('perpus.edit', compact('perpus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $perpus = Perpus::find($id);
        $perpus->judul = $request->input('judul');
        $perpus->pengarang = $request->input('pengarang');
        $perpus->penerbit = $request->input('penerbit');
        $perpus->tahun = $request->input('tahun');
        $perpus->kota = $request->input('kota');
        $perpus->deskripsi = $request->input('deskripsi');
        if($perpus->save()){
            return redirect()->route('perpus.index')->with('alert','Berhasil mengubah :)');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        if(Perpus::destroy($id)){
            return redirect()->route('perpus.index')->with('alert','Berhasil menghapus :(');
        }else{
            return redirect()->route('perpus.index')->with('alert','Gagal menghapus :(');
        }
    }
}
