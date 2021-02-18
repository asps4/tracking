<?php

namespace App\Http\Controllers;

use App\Models\Prakerin;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prakerin = Prakerin::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('admin.prakerin.index',compact('prakerin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data';
        return view('admin.prakerin.create', compact('title'));
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
            $prakerin = new Prakerin;
        $prakerin->jumlah_positif = $request->jumlah_positif;
        $prakerin->jumlah_sembuh = $request->jumlah_sembuh;
        $prakerin->jumlah_meninggal = $request->jumlah_meninggal;
        $prakerin->tanggal = $request->tanggal;
        $prakerin->id_rw = $request->id_rw;
        $prakerin ->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('prakerin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prakerin  $prakerin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail Kasus';
        $prakerin = Prakerin::findOrFail($id);
        $rw = Rw::all();
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        return view('admin.prakerin.show',compact('rw','title','rw','provinsi','kelurahan','kecamatan','kota','prakerin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prakerin  $prakerin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data';
        $prakerin = Prakerin::findOrFail($id);
        $rw = Rw::all();
        return view('admin.prakerin.edit',compact('rw','title','prakerin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prakerin  $prakerin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $prakerin = Prakerin::findOrFail($id);
            $prakerin->jumlah_positif = $request->jumlah_positif;
            $prakerin->jumlah_sembuh = $request->jumlah_sembuh;
            $prakerin->jumlah_meninggal = $request->jumlah_meninggal;
            $prakerin->tanggal = $request->tanggal;
            $prakerin->id_rw = $request->id_rw;
            $prakerin ->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal','Data Yang Anda Masukkan Sudah Ada');
        }
        return redirect()->route('prakerin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prakerin  $prakerin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $prakerin = Prakerin::findOrFail($id)->delete();
            \Session::flash('sukses','Data Berhasil Di Hapus');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route("prakerin.index");
    }
}
