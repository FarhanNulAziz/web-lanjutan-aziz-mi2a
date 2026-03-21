@extends('layouts.main')
@section('title','Data Dosen')

@section('container')
<h1>Daftar Dosen</h1>
<ol>
    @forelse ($dosen as $namaDosen)
    <li>{{ $namaDosen }}</li>
    @empty
    <div class="alert alert-warning d-inline-block">
        Data tidak ada.. silahkan isi array data dosen</div>
    @endforelse
</ol>
@endsection