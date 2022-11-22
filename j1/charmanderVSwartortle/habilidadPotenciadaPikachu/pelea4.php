

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Pelea</title>
</head>
<body>

    <div class="container">

    <?php

    function atacar(){

        $nombre = "Wartotle";
        $tipo = "Agua";
        $vida = 30;
        $ataque = 10;

        if($vida == $vida){
            $ataque = 20;

            ?>
            <div class="mt-3"></div>
    
            <?php
            echo "La vida del Pókemon $nombre es de $vida". "<br>";
            echo "El Pókemon 2 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";

        ?>
            <form class="mt-3" action="pelea5.php" method="POST">
                <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon1">
            </form> 
        <?php
        }


    }
    echo atacar();


?>

    </div>
    
</body>
</html>
