@extends('layouts.main')
@section('title','Data Prodi')

@section('container')

<h1>Daftar Jurusan {{ $data[0] }} prodi {{ $data[1] }}</h1>
<div class="row">
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="/images/hersummon.jpg" class="card-img-top" alt="Logo TI">
        <div class="card-body">
            <h5 class="card-title">Prodi Manajemen Informatika</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Officia natus at aut modi excepturi perspiciatis </p>
                <a href="#" class="btn btn-primary">more</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="/images/hersummon.jpg" class="card-img-top" alt="Logo TI">
        <div class="card-body">
            <h5 class="card-title">Teknik Komputer</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Officia natus at aut modi excepturi perspiciatis </p>
                <a href="#" class="btn btn-primary">more</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="/images/hersummon.jpg" class="card-img-top" alt="Logo TI">
        <div class="card-body">
            <h5 class="card-title">Teknologi Rekayasa Perangkat Lunak</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Officia natus at aut modi excepturi perspiciatis </p>
                <a href="#" class="btn btn-primary">more</a>
        </div>
        </div>
    </div>
</div>
@endsection