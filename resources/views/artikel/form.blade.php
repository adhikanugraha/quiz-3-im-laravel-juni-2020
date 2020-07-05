@extends('layouts.master')
@section('content')
<form action="/artikel" method="POST" class="ml-3  mr-3">
    @csrf
  <div class="form-group">
    <label for="judul">judul artikel:</label>
    <input type="text" class="form-control" name="judul" placeholder="masukan pertanyaan" id="judul">
    <label for="isi"> artikel:</label>
    <input type="text" class="form-control" name="isi" placeholder="masukan artikel" id="isi">
    <label for="slug"> slug:</label>
    <input type="text" class="form-control" name="slug" placeholder="masukan slug" id="slug">
    <label for="tag"> tag:</label>
    <input type="text" class="form-control" name="tag" placeholder="masukan tag" id="tag">
    <label for="user_id"> user_id:</label>
    <input type="text" class="form-control" name="user_id" placeholder="masukan user_id" id="user_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection