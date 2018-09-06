
@extends('layouts.app')

@section('content')


<body data-gr-c-s-loaded="true">



  <div class="col-sm-9 col-md-9 col-lg-9 " style="float: left;padding-top: 2%">
    
<form method="post" action="{{ route('projects.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="project-name">Project Name<span class="required">*</span></label>
                                <input   placeholder="Enter name"  
                                          id="project-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control" />
                            </div>


                            <input        type="hidden" 
                                          name="company_id"
                                          value="{{$company_id}}" />

                            <div class="form-group">
                                <label for="project-content">Description</label>
                                <textarea placeholder="Enter description" 
                                          style="resize: vertical" 
                                          id="project-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          </textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>
  



   
      </div>

      <div class="col-sm-3 col-md-3 col-lg-3" style="float: right; padding-top: 4%">
          
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/">Projects Lists</a></li>
              <!--  <li><a href="/projects">Add Project</a></li>
              -->
            
            <br/>
          </ol>
        </div> 
      </div>
    </div>

   
  

</body>


@endsection