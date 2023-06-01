<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>
        <center>Conversor de Temperatura</center>
    </h1>
    <form action="conversor.php" method="post">
        <lable for="tipoConversao"> Tipo de conversão:
            <select id="op" name="tipoTemp">
                <option value="1">ºC para ºF</option>
                <option value="2">ºF para ºC</option>
            </select>
        </lable><br><br>
        <label for="temperatura">Temperatura:</label>
        <input type="number" name="temp">
        <input type="submit">

    </form>
</body>

</html>