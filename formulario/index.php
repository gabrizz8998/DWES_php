<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="manipula_datos.php">
        <p><label for="nombre">Nombre</label><input type="text" name="nombre"/></p>
        <p><label for="ciclo">Ciclo</label><select name="ciclo"></p>
            <option>Desarrollo web en parte servidor</option>
            <option>Desarrollo web en parte cliente</option>
        </select>
        <p><input type=submit value="Enviar"/>
        <input type=reset value="Borrar"/></p>
    </form>
</body>
</html>