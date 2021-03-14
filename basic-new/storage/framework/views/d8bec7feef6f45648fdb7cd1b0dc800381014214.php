<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Articulos
                    <a href="<?php echo e(route('post.create')); ?>"
                        class="btn btn-small btn-primary float-right">
                        Crear
                    </a>
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($post->id); ?></td>
                                    <td><?php echo e($post->title); ?></td>
                                    <td>
                                        <a
                                            href="<?php echo e(route('post.edit', $post)); ?>"
                                            class="btn btn-small btn-primary"
                                        >
                                            Editar
                                        </a>
                                    </td>
                                    <td>

                                        <form
                                            action="<?php echo e(route('post.destroy', $post)); ?>"
                                            method="POST"
                                        >
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <input
                                                type="submit"
                                                value="Eliminar"
                                                class="btn btn-small btn-danger"
                                                onclick="return confirm('Desea eliminar...')"
                                            >
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravelIntro/basic-new/resources/views/posts/index.blade.php ENDPATH**/ ?>