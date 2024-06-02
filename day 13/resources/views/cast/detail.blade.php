@extends('layout.master')

@section('title')
Halaman Detail 
@endsection

@section('content')
    <h1>{{$cast->no}}</h1>
    <h1>{{$cast->nama}}</h1>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-secondary btn-sm">Back</a>
@endsection