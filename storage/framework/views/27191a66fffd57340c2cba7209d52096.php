
<?php $__env->startSection('title'); ?> index <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mt-4">
  <div class="text-center">
  <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">create post</a>
</div>
 

<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($post['id']); ?></th>
      <td><?php echo e($post['title']); ?></td>
      <td><?php echo e($post['posted-by']); ?></td>
      <td><?php echo e($post['created-at']); ?></td>
      <td>
      <a class="btn btn-info" href="<?php echo e(route('posts.show',$post['id'])); ?>">View</a>
      <a class="btn btn-primary" href="<?php echo e(route('posts.edit',$post['id'])); ?>">Edit</a>
      <form style="display:inline"  method="POST" action="<?php echo e(route('posts.destroy',$post['id'])); ?>">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      
      <button type="submit" class="btn btn-danger" >Delete</button>

    </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>