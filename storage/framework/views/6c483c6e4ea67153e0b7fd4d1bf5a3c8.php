<?php $__env->startSection('title', 'Crear Compra'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Crear Nueva Compra</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Información de la Compra</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('compra.store')); ?>" method="POST">
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
                    <label for="proveedor">Proveedor</label>
                    <select name="proveedor_id" class="form-control" required>
                        <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($proveedor->id); ?>"><?php echo e($proveedor->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <h4>Productos</h4>
                <div id="productos-container">
                    <div class="producto-item mb-3">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="producto">Producto</label>
                                <select name="productos[0][producto_id]" class="form-control" required>
                                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($producto->id); ?>"><?php echo e($producto->Nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="productos[0][cantidad]" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="precio">Precio</label>
                                <input type="number" step="0.01" name="productos[0][precio]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" class="form-control" required>
                </div>






                <button type="button" class="btn btn-secondary" id="add-producto-btn">Agregar Producto</button>
                <button type="submit" class="btn btn-primary">Crear Compra</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    document.getElementById('add-producto-btn').addEventListener('click', function() {
        const container = document.getElementById('productos-container');
        const index = container.children.length;

        // Crear nuevo elemento para producto
        const productoItem = document.createElement('div');
        productoItem.classList.add('producto-item', 'mb-3');
        productoItem.innerHTML = `
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="producto">Producto</label>
                    <select name="productos[${index}][producto_id]" class="form-control" required>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($producto->id); ?>"><?php echo e($producto->Nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="productos[${index}][cantidad]" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" name="productos[${index}][precio]" class="form-control" required>
                </div>
            </div>
        `;
        container.appendChild(productoItem);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Downloads\PROYECTO OFICIAL SI1\proyecto1.1\proyecto1.0\resources\views/compra/create.blade.php ENDPATH**/ ?>