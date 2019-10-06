@extends('layout')
@section('title','Create Projecr')

@section('content')
<form action="/projects" method="POST">
  <div class="form-group m-5">
    @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control"  name = "name" placeholder="Enter name" value="{{old('name')}}">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control"  name = "color" placeholder="Enter Color">
    <button type="submit" class="btn btn-primary mt-5">Submit</button>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
  @endif

</form>
@endsection
