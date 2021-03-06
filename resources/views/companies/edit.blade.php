
@extends('layouts.app')

@section('content')


<body data-gr-c-s-loaded="true">



  <div class="col-sm-9 col-md-9 col-lg-9 " style="float: left;padding-top: 2%">
    
<form method="post" action="{{ route('companies.update',[$company->id]) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="company-name">Name<span class="required">*</span></label>
                                <input   placeholder="Enter name"  
                                          id="company-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $company->name }}"
                                           />
                            </div>


                            <div class="form-group">
                                <label for="company-content">Description</label>
                                <textarea placeholder="Enter description" 
                                          style="resize: vertical" 
                                          id="company-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $company->description }}</textarea>
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
              <li><a href="/companies/{{ $company->id }}">Companies List</a></li>
              <li><a href="/companies">Add Project</a></li>
              
            
            <br/>
          </ol>
        </div>
      </div>
    </div>

   
  

</body>


@endsection