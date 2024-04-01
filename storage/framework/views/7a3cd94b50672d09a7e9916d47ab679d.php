
<?php $__env->startSection('title'); ?> edit <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('posts.update',1)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input name="tiitle" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name ="description" class="form-control" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Post Creator</label>
    <select name="post creator" class="form-control" >
        <option value="1">arwa</option>
        <option value="2">mohamed</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Update</button>
  
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/edit.blade.php ENDPATH**/ ?>