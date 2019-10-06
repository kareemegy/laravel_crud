@extends('layout')
@section('title','Show All Tasks')

@section('content')
<h1>Projects</h1>
<div class="card" style="width: 18rem;">
     <ul class="list-group list-group-flush">
        @foreach ($projects as $project)
        <li class="list-group-item">
            <a href="/projects/{{$project->id}}">
                {{$project->name}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
