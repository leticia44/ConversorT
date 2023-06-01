<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style.css">
    <script src='main.js'></script>
</head>
<body>


<?php
echo "<center>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $op = $_POST["tipoTemp"];
    $temp = $_POST["temp"];

    if ($op == "1") {
        $fah = round(($temp * 9 / 5) + 32, 2);
        echo "<h2>" . $temp . "°C = " . $fah . "°F</h2>";
    } elseif ($op == "2") {
        $cel = round(($temp - 32) * 5 / 9, 2);
        echo "<h2>" . $temp . "°F = " . $cel . "°C</h2>";
    }
}

echo "</center>";
?>

<a href="index.php">
    <center> Voltar </center>
</a>

</body>
</html>