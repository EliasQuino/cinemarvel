<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li>
<?php /**PATH C:\Users\PC\Downloads\PROYECTO OFICIAL SI1\PROYECTO OFICIAL SI1\proyecto1.1\proyecto1.0\resources\views/vendor/adminlte/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>