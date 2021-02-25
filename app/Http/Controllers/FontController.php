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

    $provinsi = DB::table('provinsis')
    ->select('provinsis.id', 'provinsis.nama_provinsi', 'provinsis.kode_provinsi',
        DB::raw('sum(prakerins.positif) as positif'),
        DB::raw('sum(prakerins.sembuh) as sembuh'),
        DB::raw('sum(prakerins.meninggal) as meninggal'))
    ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
    ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    ->groupBy('provinsis.id')
    ->get();

    return view('font.index',compact('positif','sembuh','meninggal','posglobal','semglobal','menglobal', 'tanggal','tampil','dunia'));
    }

}
