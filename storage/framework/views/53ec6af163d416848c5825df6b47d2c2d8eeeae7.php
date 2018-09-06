
		<div class="col-md-12 col-sm-12  col-xs-12 col-lg-12">
        
            <!-- Fluid width widget -->        
    	    <div class="container"><br>
                <li class="list-group-item active" > Recent Comments  </li>  <br>
                
                    
                </div>
               
                   <li class="list-group"> 
                        
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <small> 
                                    
                                    <a href="users/<?php echo e($comment->user->id); ?> " > <?php echo e($comment->user->first_name); ?> <?php echo e($comment->user->last_name); ?>

                               -  <?php echo e($comment->user->email); ?> </a> 
                               <br>
                                        commented on <?php echo e($comment->created_at); ?>

                                    </small>
                                </h4>
                                <p>
                                <?php echo e($comment->body); ?>

                                </p>
                               <b> Proof: </b>
                                <p>
                                <?php echo e($comment->url); ?>

                                </p>
                            </div>
                        </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </div>
        
            <!-- End fluid width widget --> 
            
		
	