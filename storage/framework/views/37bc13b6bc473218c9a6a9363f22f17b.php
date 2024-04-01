
<?php $__env->startSection('title'); ?> show <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Title:<?php echo e($post['title']); ?></h5>
    <p class="card-text">Description:<?php echo e($post['description']); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>