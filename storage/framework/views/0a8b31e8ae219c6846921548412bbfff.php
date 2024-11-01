<?php $__env->startSection('title', 'editCP'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>EDITAR DATOS DEL CLIENTE PRESENCIAL</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form action="/clientePresencial/<?php echo e($usuario->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre Completo</label>
        <input id="name" name="name" type="text" class="form-control" value="<?php echo e($usuario->name); ?>" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input id="email" name="email" type="email" class="form-control" value="<?php echo e($usuario->email); ?>" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" value="" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="horaEntrada" class="form-label">Hora de Entrada</label>
        <input id="horaEntrada" name="horaEntrada" type="time" class="form-control" value="<?php echo e($usuario->horaEntrada); ?>" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="horaSalida" class="form-label">Hora de Salida</label>
        <input id="horaSalida" name="horaSalida" type="time" class="form-control" value="<?php echo e($usuario->horaSalida); ?>" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="salario" class="form-label">Salario</label>
        <input id="salario" name="salario" type="number" step="any" class="form-control" value="<?php echo e($usuario->salario); ?>" tabindex="6">
    </div>
    <a href="/clienteVirtual" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form><?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Downloads\proyecto1.1\proyecto1.1\proyecto1.0\resources\views/clientePresencial/edit.blade.php ENDPATH**/ ?>