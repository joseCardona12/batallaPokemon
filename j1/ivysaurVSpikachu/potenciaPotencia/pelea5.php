

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

        $nombre = "Ivysaur";
        $tipo = "Planta";
        $vida = 20;
        $ataque = 10;

        if($vida == $vida){
            $ataque = 0;

            ?>
            <div class="mt-3"></div>
    
            <?php
            
            echo "La vida del Pókemon $nombre es de $vida". "<br>";
            echo "Ha sufrido un cambio en cada habilidad, potenciando a estas <br>";
            echo "El Pókemon 1 ha hecho un ataque sin daño de tipo $tipo". " de $ataque" . "puntos";

        ?>
            <form class="mt-3" action="pelea6.php" method="POST">
                <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
            </form> 
        <?php
        }


    }
    echo atacar();



    ?>

    </div>
    
</body>
</html>