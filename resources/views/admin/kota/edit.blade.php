@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kota</div>
                <div class="card-body">
                        <div class="form-group">
                            <form action="{{route('kota.update',$kota->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <label>Kode Kota</label>
                                <input type="number" name="kode_kota" class="form-control" value="{{ $kota->kode_kota }}" placeholder="Kode Kota" required autofocus>
                                <label>Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control" value="{{ $kota->nama_kota }}" placeholder="Nama Kota" required>

                                <label>Nama Provinsi</label>
                               <select name="id_provinsi" class="form-control" required>
                                @foreach ($provinsi as $data)
                                <option value="{{$data->id}}" {{$data->id == $kota->id_provinsi ? 'selected' : ''}} >{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
