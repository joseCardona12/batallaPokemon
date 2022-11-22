

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>validar Pókemon</title>
</head>
<body>

<?php

if(isset($_POST['elegido'])){

    //Elecciones

    function validar(){
        $pokemon1 = $_POST['elegirPoke1'];
        $pokemon2 = $_POST['elegirPoke2'];

        //Opcion 1 Pikachu y bulbasur

        if($pokemon1 == "pikachu" and $pokemon2 == "bulbasur"){

            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Pikachu (eléctrico)</p>
                <p>Jugador 2: Bulbasur (planta/veneno)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/pikachuVSbulbasur/pelea1.php" method="POST">
                    <h5>Habilidades de pikachu</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Electricidad estática</option>
                            <option value="habilidad2">Pararrayos</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Bulbasur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="comenzar">
                    </form>
                </div>
            </div>
            
            <?php

        }
         //Opcion 2 Pikachu y Ivysaur

         if($pokemon1 == "pikachu" and $pokemon2 == "ivysaur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Pikachu (eléctrico)</p>
                <p>Jugador 2: Ivysaur (Planta)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/pikachuVSivysaur/pelea1.php" method="POST">
                    <h5>Habilidades de Pikachu</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Electricidad estática</option>
                            <option value="habilidad2">Pararrayos</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
         }

             //Opcion 3 Pikachu y Charmander

            if($pokemon1 == "pikachu" and $pokemon2 == "charmander"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Pikachu (eléctrico)</p>
                    <p>Jugador 2: Charmander (fuego)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/pikachuVScharmander/pelea1.php" method="POST">
                        <h5>Habilidades de Pikachu</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Electricidad estática</option>
                                <option value="habilidad2">Pararrayos</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Charmander</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Mar Llamas</option>
                                <option value="habilidad2">Poder Solar</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
            }

            //Opcion 4 Pikachu y Wartortle

            if($pokemon1 == "pikachu" and $pokemon2 == "wartortle"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Pikachu (eléctrico)</p>
                    <p>Jugador 2: Wartotle (agua)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/pikachuVSwartortle/pelea1.php" method="POST">
                        <h5>Habilidades de Pikachu</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Electricidad estática</option>
                                <option value="habilidad2">Pararrayos</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Wartotle</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Torrente</option>
                                <option value="habilidad2">Cura lluvia</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
            }

            //Opcion 5 Bulbasur y Pikachu

            if($pokemon1 == "bulbasur" and $pokemon2 == "pikachu"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Bulbasur (planta/veneno)</p>
                    <p>Jugador 2: Pikachu (eléctrico)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/bulbasurVSpikachu/pelea1.php" method="POST">
                        <h5>Habilidades de Bulbasur</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Espesura</option>
                                <option value="habilidad2">Clorofila</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Pikachu</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Electricidad estática</option>
                                <option value="habilidad2">Pararrayos</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
            }
            
             //Opcion 6 Bulbasur y Ivysaur

             if($pokemon1 == "bulbasur" and $pokemon2 == "ivysaur"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Bulbasur (planta/veneno)</p>
                    <p>Jugador 2: Ivysaur (planta)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/bulbasurVSivysaur/pelea1.php" method="POST">
                        <h5>Habilidades de Bulbasur</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Espesura</option>
                                <option value="habilidad2">Clorofila</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Ivysaur</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Espesura</option>
                                <option value="habilidad2">Clorofila</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
             }

            //Opcion 6 Bulbasur y Charmander

            if($pokemon1 == "bulbasur" and $pokemon2 == "charmander"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Bulbasur (planta/veneno)</p>
                    <p>Jugador 2: Charmander (fuego)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/bulbasurVScharmander/pelea1.php" method="POST">
                        <h5>Habilidades de Bulbasur</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Espesura</option>
                                <option value="habilidad2">Clorofila</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Charmander</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Mar Llamas</option>
                                <option value="habilidad2">Poder Solar</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
            }

            //Opcion 7 Bulbasur y wartortle

            if($pokemon1 == "bulbasur" and $pokemon2 == "wartortle"){
        
                ?>
        
                <div class="container mt-3">
                    <h4>Pókemones elegidos</h4>
                    <p>Jugador 1: Bulbasur (planta/veneno)</p>
                    <p>Jugador 2: Wartortle (agua)</p>

                    <!--Habilidades de los pokemones-->
                    <div class="form">
                        <form action="../j1/bulbasurVSwartortle/pelea1.php" method="POST">
                        <h5>Habilidades de Bulbasur</h5>
                            <select name="habilidades1" class="form-select mb-3">
                                <option value="habilidad1">Espesura</option>
                                <option value="habilidad2">Clorofila</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <h5>Habilidades de Wartortle</h5>
                            <select name="habilidades2" class="form-select mb-3">
                                <option value="habilidad1">Torrente</option>
                                <option value="habilidad2">Cura lluvia</option>
                                <option value="habilidad3">Potenciar</option>
                            </select>

                            <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                        </form>
                    </div>
                </div>
                
                <?php
            }

             //Opcion 8 Ivysaur y pikachu

            if($pokemon1 == "ivysaur" and $pokemon2 == "pikachu"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Ivysaur (planta)</p>
                <p>Jugador 2: Pikachu (eléctrico)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/ivysaurVSpikachu/pelea1.php" method="POST">
                    <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Pikachu</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Electricidad estática</option>
                            <option value="habilidad2">Pararrayos</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
    
        }

         //Opcion 9 Ivysaur y bulbasur

         if($pokemon1 == "ivysaur" and $pokemon2 == "bulbasur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Ivysaur (planta)</p>
                <p>Jugador 2: Bulbasur (planta/veneno)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/ivysaurVSbulbasur/pelea1.php" method="POST">
                    <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Bulbasur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 10 Ivysaur y charmander

        if($pokemon1 == "ivysaur" and $pokemon2 == "charmander"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Ivysaur (planta)</p>
                <p>Jugador 2: Charmander (fuego)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/ivysaurVScharmander/pelea1.php" method="POST">
                    <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Charmander</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Mar Llamas</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 11 Ivysaur y wartortle

        if($pokemon1 == "ivysaur" and $pokemon2 == "wartortle"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Ivysaur (planta)</p>
                <p>Jugador 2: Wartortle (agua)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/ivysaurVSwartortle/pelea1.php" method="POST">
                    <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Torrente</option>
                            <option value="habilidad2">Cura Lluvia</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 12 charmander y pikachu

        if($pokemon1 == "charmander" and $pokemon2 == "pikachu"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Charmander (fuego)</p>
                <p>Jugador 2: Pikachu (eléctrico)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/charmanderVSpikachu/pelea1.php" method="POST">
                    <h5>Habilidades de Charmander</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Mar Llamas</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Pikachu</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Electricidad estática</option>
                            <option value="habilidad2">Pararrayos</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 13 charmander y bulbasur

        if($pokemon1 == "charmander" and $pokemon2 == "bulbasur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Charmander (fuego)</p>
                <p>Jugador 2: Bulbasur (plata/veneno)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/charmanderVSbulbasur/pelea1.php" method="POST">
                    <h5>Habilidades de Charmander</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Mar Llamas</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Bulbasur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 14 charmander y ivysaur

        if($pokemon1 == "charmander" and $pokemon2 == "ivysaur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Charmander (fuego)</p>
                <p>Jugador 2: Ivysaur (planta)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/charmanderVSivysaur/pelea1.php" method="POST">
                    <h5>Habilidades de Charmander</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Mar Llamas</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 14 charmander y wartortle

        if($pokemon1 == "charmander" and $pokemon2 == "wartortle"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Charmander (fuego)</p>
                <p>Jugador 2: Wartortle (agua)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/charmanderVSwartortle/pelea1.php" method="POST">
                    <h5>Habilidades de Charmander</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Mar Llamas</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 15 wartortle y pikachu

        if($pokemon1 == "wartortle" and $pokemon2 == "pikachu"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Wartortle (agua)</p>
                <p>Jugador 2: Pikacachu (eléctrico)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/wartortleVSpikachu/pelea1.php" method="POST">
                    <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Torrente</option>
                            <option value="habilidad2">Cura Lluvia</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Pikachu</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Electricidad estática</option>
                            <option value="habilidad2">Pararrayos</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 16 wartortle y bulbasur

        if($pokemon1 == "wartortle" and $pokemon2 == "bulbasur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Wartortle (agua)</p>
                <p>Jugador 2: Bulbasur (planta/veneno)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/wartortleVSbulbasur/pelea1.php" method="POST">
                    <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Torrente</option>
                            <option value="habilidad2">Cura Lluvia</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Bulbasur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 17 wartortle y ivysaur

        if($pokemon1 == "wartortle" and $pokemon2 == "ivysaur"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Wartortle (agua)</p>
                <p>Jugador 2: Ivysaur (planta)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/wartortleVSivysaur/pelea1.php" method="POST">
                    <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Torrente</option>
                            <option value="habilidad2">Cura Lluvia</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Ivysaur</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Espesura</option>
                            <option value="habilidad2">Clorofila</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }

        //Opcion 18 wartortle y charmander

        if($pokemon1 == "wartortle" and $pokemon2 == "charmander"){
    
            ?>
    
            <div class="container mt-3">
                <h4>Pókemones elegidos</h4>
                <p>Jugador 1: Wartortle (agua)</p>
                <p>Jugador 2: Charmander (fuego)</p>

                <!--Habilidades de los pokemones-->
                <div class="form">
                    <form action="../j1/wartortleVScharmander/pelea1.php" method="POST">
                    <h5>Habilidades de Wartortle</h5>
                        <select name="habilidades1" class="form-select mb-3">
                            <option value="habilidad1">Torrente</option>
                            <option value="habilidad2">Cura Lluvia</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <h5>Habilidades de Charmander</h5>
                        <select name="habilidades2" class="form-select mb-3">
                            <option value="habilidad1">Mar Lluvia</option>
                            <option value="habilidad2">Poder Solar</option>
                            <option value="habilidad3">Potenciar</option>
                        </select>

                        <input class="btn btn-primary" type="submit" name="habilidadJ2" value="elegir">
                    </form>
                </div>
            </div>
            
            <?php
        }



        //Repetición pokemones

        if($pokemon1 == "pikachu" and $pokemon2 == "pikachu"){
            header ("location:elegir.php");

        }

        if($pokemon1 == "bulbasur" and $pokemon2 == "bulbasur"){
            header ("location:elegir.php");

        }

        if($pokemon1 == "ivysaur" and $pokemon2 == "ivysaur"){
            header ("location:elegir.php");
        }

        if($pokemon1 == "charmander" and $pokemon2 == "charmander"){
            header ("location:elegir.php");
        }

        if($pokemon1 == "wartortle" and $pokemon2 == "wartortle"){
            header ("location:elegir.php");
        }

   

    }

    echo validar();
}


?>
    
</body>
</html>

