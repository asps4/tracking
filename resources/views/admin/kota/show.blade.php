@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kota</div>
                <div class="card-body">
                    <form action="{{route('kota.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kode Kota</label>
                            <input type="number" name="kode_kota" value="{{ $kota->kode_kota }}" class="form-control"  readonly>
                            <label>Nama Kota</label>
                            <input type="text" name="nama_kota" value="{{ $kota->nama_kota }}" class="form-control"  readonly>

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
