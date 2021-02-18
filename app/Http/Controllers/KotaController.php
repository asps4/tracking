<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kecamatan;
class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title = "Tambah Data";
      $kota = Kota::all();
      $provinsi = Provinsi::all();
      return view("admin.kota.index", compact("kota","provinsi"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $kota = Kota::all();
      $provinsi = Provinsi::all();
      return view("admin.kota.create", compact("kota","provinsi"));
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
            $kota = new Kota();
            $provinsi = new Provinsi();
            $kota->kode_kota = $request->kode_kota;
            $kota->id_provinsi = $request->id_provinsi;
            $kota->nama_kota = $request->nama_kota;
            $kota->id_provinsi = $request->id_provinsi;
            $kota->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('kota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Detail kota';
        $kota = Kota::findOrFail($id);
        return view('admin.kota.show',compact('kota','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
      return view("admin.kota.edit", compact("kota","provinsi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        try{
            $kota = Kota::findOrFail($id);
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->save();
            \Session::flash('sukses','Data Berhasil Di Tambah');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route('kota.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $kota = kota::findOrFail($id)->delete();
            \Session::flash('sukses','Data Berhasil Di Hapus');
        }catch(\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->route("kota.index");
    }
}
