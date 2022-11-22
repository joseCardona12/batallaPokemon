

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ataques</title>
</head>
<body>

    <div class="container">
    <?php

        if(isset($_POST['habilidadJ2'])){

            $personaje1 = $_POST['habilidades1'];
            $personaje2 = $_POST['habilidades2'];

            //Condición 1
            if($personaje1 == "habilidad1" && $personaje2 == "habilidad1"){

                function atacar(){

                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;

                    if($vida == $vida){
                        $ataque = 10;

                        ?>
                            <div class="mt-3"></div>

                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";

                    ?>
                         <form class="mt-3" action="habilidad1/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }

                echo atacar();


            }
            
            

           //COndición 2
           if($personaje1 == "habilidad1" && $personaje2 == "habilidad2"){

            function atacar(){

                $nombre = "Wartortle";
                $tipo = "Agua";
                $vida = 100;
                $ataque = 10;

                if($vida == $vida){
                    $ataque = 10;

                    ?>
                        <div class="mt-3"></div>

                    <?php
                    echo "La vida del Pókemon $nombre es de $vida". "<br>";
                    echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";

                ?>
                     <form class="mt-3" action="habilidad2/pelea2.php" method="POST">
                        <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                    </form> 
                <?php
                }
        
            }

            echo atacar();
            } 

            //Condición 3

            if($personaje1 == "habilidad1" && $personaje2 == "habilidad3"){

                function atacar(){
    
                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;
    
                    if($vida == $vida){
                        $ataque = 10;
    
                        ?>
                            <div class="mt-3"></div>
    
                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";
    
                    ?>
                         <form class="mt-3" action="habilidad3/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }
    
                echo atacar();
                } 

                //Condición 4

            if($personaje1 == "habilidad2" && $personaje2 == "habilidad1"){

                function atacar(){
    
                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;
    
                    if($vida == $vida){
                        $ataque = 20;
    
                        ?>
                            <div class="mt-3"></div>
    
                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";
    
                    ?>
                         <form class="mt-3" action="habilidad2Elegida/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }
    
                echo atacar();
                }

                 //Condición 5

            if($personaje1 == "habilidad2" && $personaje2 == "habilidad2"){

                function atacar(){
    
                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;
    
                    if($vida == $vida){
                        $ataque = 30;
    
                        ?>
                            <div class="mt-3"></div>
    
                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";
    
                    ?>
                         <form class="mt-3" action="habilidad2Elegida01/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }
    
                echo atacar();
                } 

            //Condición 6

            if($personaje1 == "habilidad2" && $personaje2 == "habilidad3"){

                function atacar(){
    
                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;
    
                    if($vida == $vida){
                        $ataque = 30;
    
                        ?>
                            <div class="mt-3"></div>
    
                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";
    
                    ?>
                         <form class="mt-3" action="potenciarHabilidad2/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }
    
                echo atacar();
                } 

            //Condición 7

            if($personaje1 == "habilidad3" && $personaje2 == "habilidad1"){

                function atacar(){
    
                    $nombre = "Wartortle";
                    $tipo = "Agua";
                    $vida = 100;
                    $ataque = 10;
    
                    if($vida == $vida){
                        $ataque = 30;
    
                        ?>
                            <div class="mt-3"></div>
    
                        <?php
                        echo "La vida del Pókemon $nombre es de $vida". "<br>";
                        echo "Ha sufrido un cambio en cada habilidad, potenciando a estas <br>";
                        echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";
    
                    ?>
                         <form class="mt-3" action="habilidadPotenciadaPikachu/pelea2.php" method="POST">
                            <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                        </form> 
                    <?php
                    }
            
                }
    
                echo atacar();
                } 

        //Condición 8

        if($personaje1 == "habilidad3" && $personaje2 == "habilidad2"){

            function atacar(){

                $nombre = "Wartortle";
                $tipo = "Agua";
                $vida = 100;
                $ataque = 10;

                if($vida == $vida){
                    $ataque = 30;

                    ?>
                        <div class="mt-3"></div>

                    <?php
                    echo "La vida del Pókemon $nombre es de $vida". "<br>";
                    echo "Ha sufrido un cambio en cada habilidad, potenciando a estas <br>";
                    echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";

                ?>
                     <form class="mt-3" action="habilidPotenciadaPikachu/pelea2.php" method="POST">
                        <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                    </form> 
                <?php
                }
        
            }

            echo atacar();
            } 

        //Condición 9

        if($personaje1 == "habilidad3" && $personaje2 == "habilidad3"){

            function atacar(){

                $nombre = "Wartortle";
                $tipo = "Agua";
                $vida = 100;
                $ataque = 10;

                if($vida == $vida){
                    $ataque = 40;

                    ?>
                        <div class="mt-3"></div>

                    <?php
                    echo "La vida del Pókemon $nombre es de $vida". "<br>";
                    echo "Ha sufrido un cambio en cada habilidad, potenciando a estas <br>";
                    echo "El Pókemon 1 ha hecho un ataque tipo $tipo". " de $ataque" . "puntos";

                ?>
                     <form class="mt-3" action="potenciaPotencia/pelea2.php" method="POST">
                        <input class="btn btn-primary" type="submit" name="atacar" value="atacar Pókemon2">
                    </form> 
                <?php
                }
        
            }

            echo atacar();
            } 


               

    }



    ?>
    </div>
    
</body>
</html>