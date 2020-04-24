@extends('ujian.layout')

@section('title')
 Laravel - index
@endsection

@section('container')
<div class="container mt-5">
<h1 class="text-center">Detail Ujian Tengah Smester Universitas Bumigora (VI)</h1>
    <div class="card-body">
        <div class="action">
            <div class="row">
                <div class="col-sm">
                    <a href="/create" class="btn btn-primary">Tambah Data</a>
                </div>     
            @if(session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
        @endif
        </div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
              <tr align="center">
                <th scope="col">No</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">Dosen</th>
                <th scope="col">Jumlah Soal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="thead-light">
                @foreach ($ujian as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $u->nama_mk }}</td>
                        <td>{{ $u->dosen }}</td>
                        <td>{{ $u->jumlah_soal }}</td>
                        <td>{{ $u->keterangan }}</td>
                        <td align="center">
                            <a href="" class="btn btn-sm btn-success">Edit</a>
                            <a href="" class="btn btn-sm btn-warning">Update</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
