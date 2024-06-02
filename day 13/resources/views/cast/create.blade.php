@extends('layout.master')

@section('title')
halaman tambah cast
@endsection

@section('content')

<form action="/cast" method="POST">
    {{--form infut --}}
    @csrf
    <div class="form-group">
      <label >cast nama</label>
      <input type="text" class="form-control" name="nama" placeholder="masukkan nama anda">
    </div>
    @error('nama')
        <div class="btn btn-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
      <label >cast umur</label>
      <input type="text" class="form-control" name="umur" placeholder="masukkan umur anda">
    </div>
    @error('umur')
    <div class="btn btn-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
      <label >cast bio</label>
      <textarea type="text" class="form-control" name="bio" placeholder="masukkan bio anda"></textarea>
    </div>
    @error('bio')
    <div class="btn btn-danger">{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
