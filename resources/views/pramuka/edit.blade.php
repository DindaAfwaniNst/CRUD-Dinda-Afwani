@extends('layout/app')

@section('title','Edit Data anak pramuka')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data anak pramuka</h1>
            
    <form method="post" action="/pramuka/{{ $pramuka->id }}">
    @method('patch')
    @csrf
    <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="{{ $pramuka->nik}}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="{{ $pramuka->nama}}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{ $pramuka->alamat}}">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone" value="{{ $pramuka->handphone}}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
@endsection
   