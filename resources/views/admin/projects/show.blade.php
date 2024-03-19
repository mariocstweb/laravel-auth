@extends('layouts.app')

@section('content')
 <h1 class="text-center p-3">{{$project->title}}</h1>
 <div class="container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{$project->title}}</h5>
      <p class="card-text">{{$project->content}}</p>
      <p class="card-text">
        <strong>Linguaggio usato: </strong>{{$project->programming_language}}
      </p>
      <div>
        <p><strong>Creato: </strong>{{$project->created_at}}</p>
        <p><strong>Modificato: </strong>{{$project->updated_at}}</p>
      </div>
      <div class="d-flex gap-2">
      <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna indietro</a>
      <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
      </form>
    </div>
    </div>
  </div>
 </div>
@endsection