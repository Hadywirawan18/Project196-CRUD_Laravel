@extends('ujian.layout')
@section('container')
<div class="container mt-5">
<h1 class="text-center">Tambah Detail Ujian</h1>
<div class="card radius">
    <div class="card-body">

        <form action="{{route('store')}}" method="POST">
            @csrf
                <div class="form-group row">
                  <label for="matkul" class="col-sm-2 col-form-label">Matakuliah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="matkul" name="nama_mk" placeholder="Masukkan Nama Matakuliah">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Masukkan Nama Dosen">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlahsoal" class="col-sm-2 col-form-label">Jumlah Soal</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="jumlahsoal" name="jumlah_soal" placeholder="Masukkan Jumlah Soal">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      {{-- <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Nama Matakuliah"> --}}
                      <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="form-action text-center">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <a href="/" class="btn btn-danger">Batalkan</a>
                  </div>
              </form>
    </div>
</div>
</div>
@endsection