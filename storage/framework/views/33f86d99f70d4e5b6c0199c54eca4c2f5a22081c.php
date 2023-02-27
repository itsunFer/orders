<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Canciones</h1>
        <?php if(is_null($cancion)): ?>
        <ul>
            <?php $__currentLoopData = $canciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($song["Cancion"]); ?> - <?php echo e($song["Artist"]); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php else: ?>
            <h1><?php echo e($cancion['Cancion']); ?></h1>
            <h2><?php echo e($cancion['Artist']); ?></h2>
        <?php endif; ?>
    </body>
</html><?php /**PATH C:\laragon\www\canciones\resources\views/canciones.blade.php ENDPATH**/ ?>