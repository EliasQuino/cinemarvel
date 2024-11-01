<?php $__env->startSection('title', 'categoria'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>LISTA DE CATEGORIAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('categoria.create')); ?>" class="btn btn-primary">NUEVA CATEGORIA </a>

<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($usu->id); ?></td>
            <td><?php echo e($usu->nombre); ?></td>
            <td>
                <form action="<?php echo e(route('categoria.destroy', $usu->id)); ?>" method="POST">
                    <a href="/categoria/<?php echo e($usu->id); ?>/edit" class="btn btn-info">Editar</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>


<script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script><?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\usuario\Desktop\ssss\proyecto1.1\proyecto1.0\resources\views/categoria/index.blade.php ENDPATH**/ ?>