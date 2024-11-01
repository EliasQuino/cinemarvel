<?php $__env->startSection('title', 'Lista de Compras'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>LISTA DE COMPRAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('compra.create')); ?>" class="btn btn-primary">NUEVA COMPRA</a>

    <table id="compras" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
            
                <th>Monto Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($compra->id); ?></td>
                    <td><?php echo e($compra->proveedor->nombre); ?></td>
                 
                 <td><?php echo e($compra->precio_total); ?></td>                    <td>
                        <a href="<?php echo e(route('compra.show', $compra->id)); ?>" class="btn btn-info">Ver Detalles</a>
                        <a href="<?php echo e(route('compra.edit', $compra->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('compra.destroy', $compra->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

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
            $('#compras').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Downloads\PROYECTO OFICIAL SI1\proyecto1.1\proyecto1.0\resources\views/compra/index.blade.php ENDPATH**/ ?>