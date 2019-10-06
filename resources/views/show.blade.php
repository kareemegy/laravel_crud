@extends('layout')

@section('content')
<div class="container">
<h1>{{$project->name}}</h1>
<p>{{$project->color}}</p>
<a href="/projects">Back To Projects</a>
<hr>
<a href="/projects/{{$project->id}}/edit">Go To Edit Project</a>
</div>

@endsection
