@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Daftar Kecamatan</div>
                <div class="card-body">
                    <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Kode kelurahan</label>
                            <input type="number" name="kode_nama" class="form-control" value="{{ $kelurahan->kode_nama }}" placeholder="Kode Kelurahan" required autofocus>
                            <label>Nama kelurahan</label>
                            <input type="text" name="nama_provinsi" class="form-control" value="{{ $kelurahan->nama_provinsi }}" placeholder="Nama Kelurahan" required>
                            <label>Nama Kota</label>
                            <select name="id_kecamatan" class="form-control" required>
                                @foreach ($kecamatan as $data)
                                <option value="{{$data->id}}" {{$data->id == $kelurahan->id_kecamatan ? 'selected' : ''}} >{{$data->nama_provinsi}}</option>
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
