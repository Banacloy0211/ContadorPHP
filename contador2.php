<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contador 0 a 100</h1>
    <p>Creamos un contrador hasta 100</p>
    <?php
        for($i = 0; $i <= 100; $i++){
            echo "$i ,";
        }
        echo '<br>';
    
    ?>
    <h3>Cuenta atras 10 a 0</h3>
    <p>Realizamos una cuenta regresiva desde 10</p>
    <?php
        $num = 10;
        while($num>=0){
            echo("$num, ");
            $num--;
        }
    ?>
</body>
</html>