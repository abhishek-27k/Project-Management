
		<div class="col-md-12 col-sm-12  col-xs-12 col-lg-12">
        
            <!-- Fluid width widget -->        
    	    <div class="container"><br>
                <li class="list-group-item active" > Recent Comments  </li>  <br>
                
                    
                </div>
               
                   <li class="list-group"> 
                        
                    @foreach($comments as $comment)
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <small> 
                                    
                                    <a href="users/{{$comment->user->id}} " > {{ $comment->user->first_name}} {{ $comment->user->last_name}}
                               -  {{ $comment->user->email}} </a> 
                               <br>
                                        commented on {{ $comment->created_at}}
                                    </small>
                                </h4>
                                <p>
                                {{ $comment->body }}
                                </p>
                               <b> Proof: </b>
                                <p>
                                {{ $comment->url }}
                                </p>
                            </div>
                        </li>

                        @endforeach
                    </li>
                </div>
        
            <!-- End fluid width widget --> 
            
		
	