@extends('layout/app')

@section('title','Detail Dosen')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail anak pramuka</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">{{ $pramuka->nama }}</h4>
              <p class="card-text"><b>{{ $pramuka->nik }}</b></p>
              <p class="card-text">{{ $pramuka->alamat }}</p>
              <p class="card-text">{{ $pramuka->handphone }}</p>
              
              <a href="{{ $pramuka->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $pramuka->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/pramuka" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   