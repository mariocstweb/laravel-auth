@extends('layouts.app')

@section('title', 'Modifica un progetto')


@section('content')
<form action="{{route('admin.projects.edit')}}" method="POST">
  @csrf
  @method('PUT')
  <div class="row text-white">
    <div class="col-6">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert title" name="title" value="{{old('title', $project->title)}}">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HTTP/..." name="thumb"
        value="{{old('thumb', $comic->thumb)}}">
      </div>
    </div>
</form>
@endsection