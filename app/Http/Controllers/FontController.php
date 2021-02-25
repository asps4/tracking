<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class FontController extends Controller
{
    public function index()
    {
        $positif = DB::table('rws')
        ->select('prakerins.jumlah_positif',
        'prakerins.jumlah_sembuh', 'prakerins.jumlah_meninggal')
        ->join('prakerins','rws.id','=','prakerins.id_rw')
        ->sum('prakerins.jumlah_positif');
    $sembuh = DB::table('rws')
        ->select('prakerins.jumlah_positif',
        'prakerins.jumlah_sembuh','prakerins.jumlah_meninggal')
        ->join('prakerins','rws.id','=','prakerins.id_rw')
        ->sum('prakerins.jumlah_sembuh');
    $meninggal = DB::table('rws')
        ->select('prakerins.jumlah_positif',
        'prakerins.jumlah_sembuh','prakerins.jumlah_meninggal')
        ->join('prakerins','rws.id','=','prakerins.id_rw')
        ->sum('prakerins.jumlah_meninggal');
    $globalpositif = file_get_contents('https://api.kawalcorona.com/positif');
    $posglobal = json_decode($globalpositif, TRUE);
    $globalsembuh= file_get_contents('https://api.kawalcorona.com/sembuh');
    $semglobal = json_decode($globalsembuh, TRUE);
    $globalmeninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
    $menglobal = json_decode($globalmeninggal, TRUE);
    // Date
    $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
    $id = json_decode($dataid, TRUE);
    $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
    $idprovinsi = json_decode($dataidprovinsi, TRUE);
    $datadunia= file_get_contents("https://api.kawalcorona.com/");
    $dunia = json_decode($datadunia, TRUE);
    $tanggal = Carbon::now()->format('D d-M-Y h:i:s');

    // Table Provinsi
    $tampil = DB::table('provinsis')
    ->select('provinsis.kode_nama','provinsis.nama_provinsi',
    DB::raw('SUM(prakerins.jumlah_positif) as Positif'),
    DB::raw('SUM(prakerins.jumlah_sembuh) as Sembuh'),
    DB::raw('SUM(prakerins.jumlah_meninggal) as Meninggal'))
    ->join('kotas','provinsis.id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
    ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
    ->join('rws','kelurahans.id','=','rws.id_kelurahan')
    ->join('prakerins','rws.id','=','prakerins.id_rw')
    ->groupBy('provinsis.id')->orderBy('nama_provinsi','ASC')
    ->get();

    return view('font.index',compact('positif','sembuh','meninggal','posglobal','semglobal','menglobal', 'tanggal','tampil','dunia'));
    }

}
