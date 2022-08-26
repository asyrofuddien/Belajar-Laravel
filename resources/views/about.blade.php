@extends('layout.main')
    @section('container')
        <div class="container-fluid" >
            <h1>{{ $name }}</h1>
            <h2>{{ $email }}</h2>
            <img src="{{ $image }}" alt="gambar asyrof" width="200">
        </div>
    @endsection

