@extends('layouts.master')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>judul</th>
        <th>isi</th>
        <th>slug</th>
        <th>tag</th>
      </tr>
    </thead>
    <tbody>
    @foreach($artikels as $key=>$artikel)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$artikels->judul}}</td>
        <td>{{$artikels->isi}}</td>
        <td>{{$artikels->slug}}</td>
        <td>{{$artikels->tag}}</td>
    </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection