@extends('layout.app')
@section('title', 'Buat Postingan !')

@section('content')
<h1>Buat Postingan Baru</h1>
<form method="POST" action="{{url('posts')}}" class="form-control">
    @method('POST')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title   " name="title">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary"> Simpan !</button>
</form>
@endsection