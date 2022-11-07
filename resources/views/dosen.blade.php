@extends('template')

@section('title', 'Dosen')

@section('content')
    <div class="container m-5">
        <h2 class="container m-2">Daftar Dosen</h2>

        <ol>
            @foreach($dosen as $dsn)
                <li class="container m-2 fs-5">{{ $dsn }}</li>
            @endforeach
        </ol>
    </div>
@endsection
