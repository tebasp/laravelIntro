<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar articulo</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                <form action="<?php echo e(route('post.update', $post)); ?>" method="POST" enctype="multipar/form-data">
                    <div class="form-group">
                        <label for="title">Titulo *</label>
                        <input type="text" name="title" class="form-control" required value="<?php echo e(old('title', $post->title)); ?>">
                    </div>
                    <div class="form-group">
                        <label for="file">Imagen</label>
                        <input type="file" name="file" id="file" class="form-control"">
                    </div>
                    <div class="form-group">
                        <label for="body">Contenido *</label>
                        <textarea name="body" class="form-control" rows="6" required">
                            <?php echo e(old('body', $post->body)); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="iframe">Contenido embebido</label>
                        <textarea name="iframe" class="form-control">
                            <?php echo e(old('iframe', $post->iframe)); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="submit" value="Actualizar" class="btn btn-sm btn-primary" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravelIntro/basic-new/resources/views/posts/edit.blade.php ENDPATH**/ ?>