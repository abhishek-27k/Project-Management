
@extends('layouts.app')

@section('content')


<body data-gr-c-s-loaded="true">



  <div class="col-md-9 col-lg-9" style="float:left;">
     <div class="jumbotron text-center">
      <h1 class="display-4">{{ $company->name}}</h1>
     </div>

    
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{$company->description}}</h4>
          </div>
         </div>





    @foreach($company->projects as $project)
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h3 class="my-0 font-weight-normal">{{$project->name}} </h3>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>{{$project->description}}</li>
              
            </ul>

            <p><a  href="/projects/{{$project->id}}" class="btn btn-block btn-outline-primary" type="button" style=" "> View Porjects</a></p>
       <!--     <button type="button" class="btn btn-lg btn-block btn-outline-primary" > View Projects</button>
          --></div>
        </div>
        
        </div>
      </div>

      @endforeach

      </div>

      <div class="col-sm-3 col-md-3 col-lg-3" style="float: right; padding-top: 4%">
          
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
              <li><a href="/companies" onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          ">Delete</a>

              <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
              


              </li>



              <li><a href="/projects/create/{{$company->id}}">Add Project</a></li>
              <li><a href="/companies">My Companies</a></li>

              <li><a href="/companies/create">Create new Company</a></li>
            
            <br/>
          </ol>
        </div>
      </div>
    </div>

   
  

</body>


@endsection