<?php $__env->startSection('title', 'editProve'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>EDITAR DATOS DEL PROVEEDOR</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form action="/proveedor/<?php echo e($usuario->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="<?php echo e($usuario->nombre); ?>" tabindex="1">
    </div>


    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="<?php echo e($usuario->telefono); ?>" tabindex="1">
    </div>





    <div class="mb-3">
        <label for="email" class="form-label">Correo Electronico</label>
        <input id="email" name="email" type="email" class="form-control" value="<?php echo e($usuario->email); ?>" tabindex="2">
    </div>

    <a href="/clienteVirtual" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form><?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Downloads\PROYECTO OFICIAL SI1\proyecto1.1\proyecto1.0\resources\views/proveedor/edit.blade.php ENDPATH**/ ?>