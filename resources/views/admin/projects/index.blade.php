@extends('layouts.app')

@section('title', 'Projects')


@section('content')


<table class="table">
  <h1 class="text-center p-3">Projects</h1>
  <div class="d-flex justify-content-end gap-2">
    <a href="{{route('admin.projects.trash')}}" class="btn btn-primary">Vedi Cestino</a>
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>
    Aggiungi progetto
    </a>
  </div>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Contenuto</th>
      <th scope="col">Creato:</th>
      <th scope="col">Aggiornato:</th>
      <th scope="col">Linguaggio</th>
      <th scope="col"></th>
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
        <div class="d-flex gap-2">
            <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary">
              <i class="fa-solid fa-eye"></i>
            </a>

        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
        </form>
      </div>
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
