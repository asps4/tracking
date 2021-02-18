<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'List Kelurahan';
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        return view("admin.Kelurahan.index", compact("kelurahan","title","kecamatan"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        return view("admin.kelurahan.create", compact("kelurahan","kecamatan"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $kelurahan = new Kelurahan();
            $kecamatan = new kecamatan();
            $kelurahan->kode_nama = $request->kode_nama;
            $kelurahan->nama_provinsi = $request->nama_provinsi;
            $kelurahan->id_kecamatan = $request->id_kecamatan;
            $kelurahan->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('kelurahan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Detail Kecamatan';
        $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('admin.kelurahan.show',compact('kelurahan','title','kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data';
        $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('admin.kelurahan.edit',compact('kelurahan','title','kecamatan'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $id)
    {
        try{
         $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        $kelurahan->kode_nama = $request->kode_nama;
        $kelurahan->nama_nama = $request->nama_provinsi;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('kelurahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelurahan $kelurahan)
    {
        //
        try{
            $kelurahan = kelurahan::findOrFail($id)->delete();
            \Session::flash('sukses','Data Berhasil Di Hapus');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route("kelurahan.index");

    }
}
