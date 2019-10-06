@extends('layout')
@section('title','Edit Project')

@section('content')

<form action="/projects/{{$project->id}}" method="POST">
  <div class="form-group m-5">
    @method('PATCH')
    @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control"  name = "name" placeholder="Enter name" value="{{$project->name}}">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control"  name = "color" placeholder="Enter Color" value="{{$project->color}}">
    <button type="submit" class="btn btn-primary mt-2">UpDate</button>
  </div>
</form>

<form action="/projects/{{$project->id}}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" class="btn btn-primary m-5 ">Delete</button>
</form>
@endsection






