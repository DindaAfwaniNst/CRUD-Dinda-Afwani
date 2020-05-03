@extends('layout/app')

@section('title','Data anak pramuka')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Data anak pramuka</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @foreach( $pramuka as $pramuka )
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <tr>
                    <td>{{ $pramuka->nama }}</td>
                    <td>{{ $pramuka->handphone }}</td>
                    <td>
                    <a href="/pramuka/{{ $pramuka->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
    @endforeach
            <a href="/pramuka/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection