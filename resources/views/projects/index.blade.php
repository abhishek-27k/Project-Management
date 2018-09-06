
@extends('layouts.app')

@section('content')

<div class="container" style="">

  <li class="list-group-item active" > Projects  </li>    
    <ul class="list-group">

      @foreach($projects as $project)
      <li class="list-group-item"><a href= "/projects/{{$project->id}}"> {{$project->name }} </li>
      @endforeach
    </ul>
    <br>
    <div style="padding-left: 22%">
    	<button class="btn btn-primary btn-lg " style="width: 550px; text-align: center; padd" ><a href="/projects/create" style="color: white;">Create new Project</a> </button>    
</div>  







@endsection