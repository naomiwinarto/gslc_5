@extends('template')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container m-5">
        <h2 class="container m-2">Daftar Mahasiswa</h2>
        <h4 class="container m-2">Class {{ $class }}</h4>

        <ol>
            @foreach($mahasiswa as $mhs => $nilai)
                <li class="container m-2 fs-5">{{ $mhs }}
                @if($nilai>=60)
                    <span class="badge text-bg-success"> LULUS</span>
                @else
                    <span class="badge text-bg-danger"> TIDAK LULUS</span>
                @endif
                    <span>  dengan nilai {{ $nilai}}</span>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
