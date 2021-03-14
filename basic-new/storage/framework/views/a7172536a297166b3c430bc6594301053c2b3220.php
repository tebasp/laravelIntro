<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo articulo</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form
                        action="<?php echo e(route('post.store')); ?>"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label for="title">Titulo *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="file" class="form-label">Imagen</label>
                            <input class="form-control" type="file" id="file" name="file">
                        </div>
                        <div class="form-group">
                            <label for="body">Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="iframe">Contenido embebido</label>
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravelIntro/basic-new/resources/views/posts/create.blade.php ENDPATH**/ ?>