@extends('layouts.app')


@section('content')

<h1 class="py-3">Sono l'indice</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Members</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project )
        <tr>
            <th>{{$project->id}}</th>
            <td>
            <a href="{{route('admin.projects.show', $project)}}">
                {{$project->name}}
            </a>
            </td>
            <td>{{$project->members}}</td>
            <td>{{$project->description}}</td>
            <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-warning">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
