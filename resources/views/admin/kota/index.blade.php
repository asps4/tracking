@extends("layouts.master")
@section('content')
<div class="row">
	<div class="col-md-12 col-md-offset-2">
        <a href="{{route('kota.create')}}" class="btn btn-primary float-right btn-sm"><i class="fas fa-plus-circle"></i> Tambah Data</a>
        <div class="box">
			<div class="box-body">

				@if(Session::has('sukses'))
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					{{ Session::get('sukses') }}
				</div>
				@endif

				@if(Session::has('gagal'))
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
					{{ Session::get('gagal') }}
				</div>
				@endif

				<table class="table table-provinsi table-stripped">


                    <thead>
                        <tr>
                            <th>No</th>
                            <th style='text-align:center;vertical-align:middle'>Kode Kota</th>
                            <th style='text-align:center;vertical-align:middle'>Nama Kota</th>
                            <th style='text-align:center;vertical-align:middle'>Provinsi</th>
                            <center>
                                <th style='text-align:center;vertical-align:middle' colspan="3">Action</th>
                            </center>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($kota as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td style='text-align:center;vertical-align:middle'>{{$data->kode_kota}}</td>
                            <td style='text-align:center;vertical-align:middle'>{{$data->nama_kota}}</td>
                            <td style='text-align:center;vertical-align:middle'>{{$data->provinsi->nama_provinsi}}</td>
                            <td style='text-align:center;vertical-align:middle'><a href="{{route('kota.show',$data->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a></td>
                            <td><a href="{{route('kota.edit',$data->id)}}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                            <td>
                                <form action="{{route('kota.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            </tr>
                        </form>
                            @endforeach
                        </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection



