
<?php $__env->startSection('content'); ?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?php echo e(route('blog.create')); ?>" class="d-none d-sm-inline-block btn btn-dark shadow-sm"><i
        class="text-white"></i> Tambah Data Baru [+]</a>
    </div>

        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td>
                     <img src="<?php echo e(url('/img/'.$blog->gambar)); ?>" class="rounded" style="width: 150px">
                </td>
                <td><?php echo e($blog['judul']); ?></td>
                <td><?php echo e($blog['content']); ?></td>
                <td>
                    <form action="<?php echo e(route('blog.destroy',$blog->id)); ?>" method="POST">
                        <a class="btn btn-success" href="<?php echo e(route('blog.edit',$blog->id)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas\resources\views/blogs/index.blade.php ENDPATH**/ ?>