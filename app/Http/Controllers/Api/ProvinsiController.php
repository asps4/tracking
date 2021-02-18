<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use Validator;
class provinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua nama',
            'data' => $provinsi
        ], 200);
    }

    public function store(Request $request)
    {
        //  Validate Data
        $validator = Validator::make($request->all(),[
            'kode_nama' =>  'required|unique:namas',
            'nama_provinsi' =>  'required',
        ],
            [
                'kode_nama.required' => 'Masukkan Kode nama !',
                'nama_provinsi.required' => 'Masukkan Nama nama !',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Data Yang Kosong',
                'data'  => $validator->errors()
            ], 400);
        } else{
            $provinsi = Provinsi::create([
                'kode_nama'     => $request->input('kode_nama'),
                'nama_provinsi'   => $request->input('nama_provinsi'),
            ]);

            if ($provinsi) {
                return response()->json([
                    'success' => true,
                    'message' => 'nama Berhasil Disimpan!',
                ], 200);
            } else{
                return response()->json([
                    'success' => false,
                    'message' => 'nama Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Detail nama!',
                'data' => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'nama Tidak Ditemukan!',
                'data' => ''
            ], 404);
        }
    }

    public function update(Request $request,$id)
    {
        //Validate Data
        $validator = Validator::make($request->all(),[
            'kode_nama' => 'required|unique:provinsi',
            'nama_provinsi' => 'required',
        ],
            [
                'kode_nama.required' => 'Masukkan Kode provinsi!',
                'nama_provinsi.required' => 'Masukkan Nama provinsi!',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Data Yang Kosong!',
                'data' => $validator->errors()
            ], 400);
        } else {

            $provinsi = Provinsi::findOrFail($id);
            $provinsi->kode_nama = $request->kode_nama;
            $provinsi->nama_provinsi = $request->nama_provinsi;
            $provinsi->save();

            if ($provinsi) {
                return response()->json([
                    'success' => true,
                    'message' => 'nama Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'succes' => false,
                    'message' => 'nama Gagal Diupdate',
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'nama Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'nama Gagal Dihapus!',
            ], 500);
        }
    }
}