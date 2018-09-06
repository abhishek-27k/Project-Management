<?php $__env->startSection('content'); ?>

<div class="container" style="">

  <li class="list-group-item active" > Companies  </li>    
    <ul class="list-group">

      <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="list-group-item"><a href= "/companies/<?php echo e($company->id); ?>"> <?php echo e($company->name); ?> </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <br>
    <div style="padding-left: 22%">
    	<button class="btn btn-primary btn-lg " style="width: 550px; text-align: center; padd" ><a href="/companies/create" style="color: white;">Create new Company</a> </button>    
</div>  







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>