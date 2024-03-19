@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Contenuto</th>
      <th scope="col">Linguaggio</th>
      <th scope="col">Creato:</th>
      <th scope="col">Aggiornato:</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($projects as $project)
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->slug}}</td>
      <td>{{$project->content}}</td>
      <td>{{$project->created_at}}</td>
      <td>{{$project->updated_at}}</td>
      <td>{{$project->programming_language}}</td>
      <td>
        <a href="{{route('admin.projects.show', $project)}}">
          <i class="fa-solid fa-eye"></i>
        </a>
      </td>
    </tr>
  @empty
  <tr>
      <td colspan="5">
          <h3>Non ci sono progetti</h3>
      </td>
  </tr>
  @endforelse
  </tbody>
</table>
@endsection
