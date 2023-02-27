<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedido</h1>
    <a href="/orders"> Inicio</a><br>
        <ul>
            <li>
                <b>Description - </b> <?php echo e($order -> Description); ?>

            </li>
            <li>
                <b>Amount - </b> <?php echo e($order -> Amount); ?>

            </li>
            <li>
                <b>Due - </b> <?php echo e($order -> Due); ?>

            </li>
        </ul>


</body>
</html><?php /**PATH C:\laragon\www\canciones\resources\views/orders/show.blade.php ENDPATH**/ ?>