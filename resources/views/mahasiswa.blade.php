@extends('template')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container m-5">
        <h2 class="container m-2">Daftar Mahasiswa</h2>
        <h4 class="container m-2">Class {{ $class }}</h4>

        <ol>
            @foreach($mahasiswa as $mhs)
                <li class="container m-2">{{ $mhs }}</li>
            @endforeach
        </ol>

        <span class="container m-2 fs-5">Nilai rata-rata kelas:</span>
        @if($nilai>=60)
            <span class="badge text-bg-primary fs-6"> LULUS</span>
        @else
            <span class="badge text-bg-danger fs-6"> TIDAK LULUS</span>
        @endif
    </div>
@endsection
