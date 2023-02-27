<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedidos</h1>

    <form action="/orders" method="POST">
        <?php echo csrf_field(); ?>
        <label for="description">Descripcion detallada</label><br>
        <textarea name="description"></textarea>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <h4><?php echo e($message); ?></h4>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <label for="amount">Cantidad</label><br>
        <input type="number" name="amount" min="1">
        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <h4><?php echo e($message); ?></h4>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <br>

        <label for="due">Fecha</label><br>
        <input type="date" name="due" min="<?=date('Y-m-d', strtotime('+15 days')) ?>">
        <?php $__errorArgs = ['due'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <h4><?php echo e($message); ?></h4>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <br>
        <input type="submit" value="Enviar">

    </form>

    

</body>
</html><?php /**PATH C:\laragon\www\canciones\resources\views/orders/create.blade.php ENDPATH**/ ?>