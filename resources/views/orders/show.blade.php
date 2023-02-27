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
                <b>Description - </b> {{$order -> Description}}
            </li>
            <li>
                <b>Amount - </b> {{$order -> Amount}}
            </li>
            <li>
                <b>Due - </b> {{$order -> Due}}
            </li>
        </ul>


</body>
</html>