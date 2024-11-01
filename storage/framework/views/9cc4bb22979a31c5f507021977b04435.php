<?php $__env->startSection('title', 'Clientes Presenciales'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>LISTA DE CLIENTES PRESENCIALES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('clientePresencial.create')); ?>" class="btn btn-primary">NUEVO CLIENTE PRESENCIAL</a>

<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
          <!--  <th scope="col">Nombre</th>-->
            <th scope="col">Carnet</th>
         <!--   <th scope="col">Acciones</th>-->
        </tr>
    </thead>
    <tbody>
   

        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cliente->Id); ?></td>
           
            <td><?php echo e($cliente->Ci); ?></td>
          
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
        $('#usuarios').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
</script>
<?php $__env->stopSection(); ?>


 

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1.1\proyecto1.0\resources\views/clientePresencial/index.blade.php ENDPATH**/ ?>