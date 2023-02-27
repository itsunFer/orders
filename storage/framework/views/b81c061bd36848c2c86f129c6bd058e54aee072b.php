<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedidos</h1>
    <a href="/orders/create"> Agregar Orden</a><br>
    <ul>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($order->id); ?>

                <a href="/orders/<?php echo e($order->id); ?>">Ver detalle</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</body>
</html><?php /**PATH C:\laragon\www\canciones\resources\views/orders/index.blade.php ENDPATH**/ ?>