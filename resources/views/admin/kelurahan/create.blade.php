@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelurahan</div>
                <div class="card-body">
                    <form action="{{route('kelurahan.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kode Kelurahan</label>
                            <input type="number" name="kode_nama" class="form-control" placeholder="Kode Kelurahan" required autofocus>
                            <label>Nama Kelurahan</label>
                            <input type="text" name="nama_provinsi" class="form-control" placeholder="Nama Kelurahan" required>
                            <label>Nama kecamatan</label>
                            <select name="id_kecamatan" class="form-control">
                                @foreach ($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
