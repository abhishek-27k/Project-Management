
@extends('layouts.app')

@section('content')

<div class="container" style="">

  <li class="list-group-item active" > Companies  </li>    
    <ul class="list-group">

      @foreach($companies as $company)
      <li class="list-group-item"><a href= "/companies/{{$company->id}}"> {{$company->name }} </li>
      @endforeach
    </ul>
    <br>
    <div style="padding-left: 22%">
    	<button class="btn btn-primary btn-lg " style="width: 550px; text-align: center; padd" ><a href="/companies/create" style="color: white;">Create new Company</a> </button>    
</div>  







@endsection