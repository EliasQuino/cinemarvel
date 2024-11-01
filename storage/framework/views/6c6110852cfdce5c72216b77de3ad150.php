<?php $__env->startSection('title', 'Crear Pelicula'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>CREAR NUEVA PELICULA</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<form action="/pelicula" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre de Pelicula</label>
        <input id="Nombre" name="Nomre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="Clasificacion" class="form-label">Clasificacion</label>
        <input id="Clasificacion" name="Clasificacion" type="text" class="form-control" tabindex="2">
    </div>


    <div class="mb-3">
        <label for="Duracion" class="form-label">Duracion de la pelicula</label>
        <input id="Duracion" name="Duracion" type="time" class="form-control" tabindex="3">
    </div>


    <div class="form-group">
        <label for="Idgenero">Genero</label>
        <select name="Idgenero" class="form-control" required>
            <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($genero->id); ?>"><?php echo e($genero->Nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>


    <a href="pelicula" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\usuario\Desktop\ssss\proyecto1.1\proyecto1.0\resources\views/pelicula/create.blade.php ENDPATH**/ ?>