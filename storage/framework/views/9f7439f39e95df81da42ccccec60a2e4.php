<?php $__env->startSection('title', 'Crear Cajero'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Crear Nuevo Cajero</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('pelicula.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="HoraEntrada">Hora de Entrada</label>
            <input type="time" name="HoraEntrada" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="HoraSalida">Hora de Salida</label>
            <input type="time" name="HoraSalida" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Idpuesto">Puesto</label>
            <select name="Idpuesto" class="form-control" required>
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($puesto->id); ?>"><?php echo e($puesto->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Cajero</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Downloads\PROYECTO OFICIAL SI1\PROYECTO OFICIAL SI1\proyecto1.1\proyecto1.0\resources\views/cajero/create.blade.php ENDPATH**/ ?>