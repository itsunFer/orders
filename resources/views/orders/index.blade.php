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
        @foreach ($orders as $order)
            <li>
                {{ $order->id}}
                <a href="/orders/{{$order->id}}">Ver detalle</a>
            </li>
        @endforeach
    </ul>

</body>
</html>