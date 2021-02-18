<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'List Rw/Rt';
        $rw = Rw::all();
        $kelurahan = Kelurahan::all();
        return view("admin.rw.index", compact("rw",'title','kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rw = Rw::all();
        $kelurahan = Kelurahan::all();
        return view("admin.rw.create", compact("rw","kelurahan"));
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
            $rw = new Rw();
            $kelurahan = new kelurahan();
            $rw->kode_rw = $request->kode_rw;
            $rw->nama_rw = $request->nama_rw;
            $rw->id_kelurahan = $request->id_kelurahan;
            $rw->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('rw.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Detail Kecamatan';
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('admin.rw.show',compact('rw','title','kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = 'Edit Data';
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('admin.rw.edit',compact('rw','title','kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $rw = new Rw();
            $kelurahan = new Kelurahan();
            $rw->kode_rw = $request->kode_rw;
            $rw->nama_rw = $request->nama_rw;
            $rw->id_kelurahan = $request->id_kelurahan;
            $rw->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('rw.index');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $rw = Rw::findOrFail($id)->delete();
            \Session::flash('sukses','Data Berhasil Di Hapus');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route("rw.index");
        // $kecamatan = kecamatan::findOrFail($id)->delete();
        // return redirect()->route('kecamatan.index')->with('sukses','Data Berhasil Di Hapus');

    }
}
