<?php $__env->startSection('title', 'SNS'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3>ホーム</h3>
                <form action="<?php echo e(action('Admin\SnsController@create')); ?>" method="post" enctype="multipart/form-data" class="form">

                    <?php if(count($errors) > 0): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($e); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-2" for="body"></label>
                        <div class="col-md-10">
                            <input type="text" placeholder="いまどうしてる？" class="form-control" name="body" value="<?php echo e(old('body')); ?>">
                        </div>
                    </div>
                    <?php echo e(csrf_field()); ?>

                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <table>
                                <tr>
                                    <td><?php echo e($post->user->name); ?></td>
                                    <td><?php echo e(($post->body)); ?></td>
                                    <td><?php echo e(($post->created_at)); ?></td>
                                    <td>
                                    <?php if($post->user_id == Auth::id()): ?>
                                        <div class="delete">
                                            <a href="<?php echo e(action('Admin\SnsController@delete', ['id' => $post->id])); ?>">削除</a>
                                        </div>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5-1\resources\views/admin/sns/mutter.blade.php ENDPATH**/ ?>