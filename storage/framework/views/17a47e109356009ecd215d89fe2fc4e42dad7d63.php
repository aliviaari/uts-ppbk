
<?php $__env->startSection('content'); ?>
<div class="container">
<h1>User</h1>
<form method="post"
 action="<?php echo e(url('resto/user/store')); ?>"
 style="display:inline">
 <?php echo csrf_field(); ?>
 <label for="email" class="col-form-label">Email</label>
 <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>"/>
 <label for="name" class="col-form-label">Nama Lengkap</label>
 <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"/>
 <label for="role" class="col-form-label">Role</label>
 <select class="form-control" name="role">
 <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($k); ?>"
 <?php if($k==old('role')): ?> selected <?php endif; ?>><?php echo e($v); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </select>
 <label for="password" class="col-form-label">Password</label>
 <input type="password" class="form-control" name="password"/>
 <label for="confirm_password" class="col-form-label">Konfirmasi Password</label>
 <input type="password" class="form-control" name="confirm_password"/>
 <br/>
 <button class="btn btn-primary" style="submit">SIMPAN</button>
 <a href="<?php echo e(url('/resto/user')); ?>" class="btn">BATAL</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aliviaari\tes\resources\views/resto/user/create.blade.php ENDPATH**/ ?>