<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedidos</h1>

    <form action="/orders" method="POST">
        @csrf
        <label for="description">Descripcion detallada</label><br>
        <textarea name="description"></textarea>
        @error('description')
            <h4>{{ $message }}</h4>
        @enderror
        <br>

        <label for="amount">Cantidad</label><br>
        <input type="number" name="amount" min="1">
        @error('amount')
            <h4>{{ $message }}</h4>
        @enderror
        <br>
        <br>

        <label for="due">Fecha</label><br>
        <input type="date" name="due" min="<?=date('Y-m-d', strtotime('+15 days')) ?>">
        @error('due')
            <h4>{{ $message }}</h4>
        @enderror

        <br>
        <br>
        <input type="submit" value="Enviar">

    </form>

    

</body>
</html>