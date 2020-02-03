<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Listado de Medicamentos</h3>
                <small>En esta seccion se se muestran todos los medicamentos agregados.</small>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="alert alert-info" id="alert"></div>
    <div class="row">
        <?php $__currentLoopData = $orm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="blog-box blog-grid text-center">
                        <img src="<?php echo e(asset($m->med_image)); ?>" class="img-fluid top-radius-blog" height="50" width="50" alt="">
                        <div class="blog-details-main">
                            <hr>
                            <h6 class="blog-bottom-details"><?php echo e($m->med_name); ?> <br><small><?php echo e($m->cat_name); ?></small></h6>
                            <hr>
                            <?php echo Form::open(['route' => ['medicines.destroy',$m->id],'method' => 'DELETE']); ?>

                                <ul class="blog-social">
                                    <li>
                                        <a href="#" class="btn-delete-med" title="Borrar"><i class="icofont icofont-ui-close"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('medicines.edit', $m->id)); ?>" title="Actualizar Informacion"><i class="icofont icofont-loop"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('medicines.show', $m->id)); ?>"><i class="icofont icofont-open-eye" title="Ver Detalles"></i></a>
                                    </li>
                                </ul>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row justify-content-center">
        <?php echo e($orm->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/Medicines/view.blade.php ENDPATH**/ ?>