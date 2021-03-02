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
    // $globalpositif = file_get_contents('https://api.kawalcorona.com/positif');
    // $posglobal = json_decode($globalpositif, TRUE);
    // $globalsembuh= file_get_contents('https://api.kawalcorona.com/sembuh');
    // $semglobal = json_decode($globalsembuh, TRUE);
    // $globalmeninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
    // $menglobal = json_decode($globalmeninggal, TRUE);
    // // Date
    // $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
    // $id = json_decode($dataid, TRUE);
    // $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
    // $idprovinsi = json_decode($dataidprovinsi, TRUE);
    // $datadunia= file_get_contents("https://api.kawalcorona.com/");
    // $dunia = json_decode($datadunia, TRUE);
    // $tanggal = Carbon::now()->format('D d-M-Y h:i:s');

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

     // chart
//      $casesSembuh = DB::table('prakerins')
//      ->select(
//          DB::raw('sum(prakerins.sembuh) as sembuh'), )
//      ->orderBy('prakerins.tanggal')
//      ->groupBy('prakerins.tanggal')->pluck('sembuh');
//  $casesPositif = DB::table('prakerins')
//      ->select(
//          DB::raw('sum(prakerins.positif) as positif'), )
//      ->orderBy('prakerins.tanggal')
//      ->groupBy('prakerins.tanggal')->pluck('positif');

//  $casesMeninggal = DB::table('prakerins')
//      ->select(
//          DB::raw('sum(prakerins.meninggal) as meninggal'), )
//      ->orderBy('prakerins.tanggal')
//      ->groupBy('prakerins.tanggal')->pluck('meninggal');
//  $casesTanggal = DB::table('prakerins')
//      ->select(
//          DB::raw('prakerins.tanggal'), )
//      ->orderBy('prakerins.tanggal')
//      ->groupBy('prakerins.tanggal')->pluck('tanggal');

    return view('font.index',compact('tampil','positif','sembuh','meninggal'));


    }
    // public function about()
    // {

    // }

    // public function getKotaProvinsi($id)
    // {

    //     $positif = DB::table('kotas')
    //         ->select('kotas.nama_kota', 'kotas.kode_kota',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('provinsis.id', $id)
    //         ->groupBy('kotas.id')
    //         ->sum('prakerins.positif');

    //     $sembuh = DB::table('kotas')
    //         ->select('kotas.nama_kota', 'kotas.kode_kota',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('provinsis.id', $id)
    //         ->groupBy('kotas.id')
    //         ->sum('prakerins.sembuh');

    //     $meninggal = DB::table('kotas')
    //         ->select('kotas.nama_kota', 'kotas.kode_kota',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('provinsis.id', $id)
    //         ->groupBy('kotas.id')
    //         ->sum('prakerins.meninggal');

    //     $datas = DB::table('kotas')
    //         ->select('kotas.id', 'kotas.nama_kota', 'kotas.kode_kota',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('provinsis.id', $id)
    //         ->groupBy('kotas.id')
    //         ->get();
    //     // dd($positif);
    //     $provinsi = Provinsi::findOrFail($id);
    //     return view('singleProvinsi', compact('datas', 'sembuh', 'meninggal', 'positif', 'provinsi'));
    // }

    // public function getKecamatanKota($id)
    // {

    //     $positif = DB::table('kecamatans')
    //         ->select('kecamatans.nama_kecamatan',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('kotas.id', $id)
    //         ->groupBy('kecamatans.id')
    //         ->sum('prakerins.positif');

    //     $sembuh = DB::table('kotas')
    //         ->select('kecamatans.nama_kecamatan',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //     // ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('kotas.id', $id)
    //         ->groupBy('kecamatans.id')
    //         ->sum('prakerins.sembuh');

    //     $meninggal = DB::table('kotas')
    //         ->select('kecamatans.nama_kecamatan',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //     // ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
    //         ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('kotas.id', $id)
    //         ->groupBy('kecamatans.id')
    //         ->sum('prakerins.meninggal');

    //     $datas = DB::table('kecamatans')
    //         ->select('kecamatans.nama_kecamatan',
    //             DB::raw('sum(prakerins.positif) as positif'),
    //             DB::raw('sum(prakerins.sembuh) as sembuh'),
    //             DB::raw('sum(prakerins.meninggal) as meninggal'))
    //         ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
    //         ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    //         ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
    //         ->join('prakerins', 'rws.id', '=', 'prakerins.id_rw')
    //         ->where('kotas.id', $id)
    //         ->groupBy('kecamatans.id')
    //         ->get();
    //     // dd($positif);
    //     $kota = Kota::findOrFail($id);
    //     return view('singleKota', compact('datas', 'sembuh', 'meninggal', 'positif', 'kota'));
    // }

}
