
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('blog.update',$blog->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" value="<?php echo e($blog->gambar); ?>">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?php echo e($blog->judul); ?>">
            </div>
            <br>    
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" value="<?php echo e($blog->content); ?>"></textarea>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blogs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas\resources\views/blogs/edit.blade.php ENDPATH**/ ?>