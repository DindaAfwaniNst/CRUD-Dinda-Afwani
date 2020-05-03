@extends('layout/app')

@section('title','Form Data anak pramuka')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Data anak pramuka</h1>
            
    <form method="post" action="/pramuka">
    @csrf
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
@endsection
   