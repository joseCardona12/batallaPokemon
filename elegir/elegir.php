<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Elegir Pókemon</title>
</head>
<body>

    <div class="container">
        <h1 class="mt-3">Elegir Pókemon</h1>

        <form action="elegirPokemon.php" method="POST">
            <!--Jugador 1-->
            <h4>Pókemon 1</h4>
            <select class="form-select mb-3"  name="elegirPoke1" required>
                <option value="">Elegir Pókemon</option>
                <option value="pikachu">Pikachu</option>
                <option value="bulbasur">Bulbasur</option>
                <option value="ivysaur">Ivysaur</option>
                <option value="charmander">Charmander</option>
                <option value="wartortle">Wartortle</option>

            </select>
            <!--Jugador 2-->
            <h4>Pókemon 2</h4>
            <select class="form-select mb-3"  name="elegirPoke2" required>
                <option value="">Elegir Pókemon</option>
                <option value="pikachu">Pikachu</option>
                <option value="bulbasur">Bulbasur</option>
                <option value="ivysaur">Ivysaur</option>
                <option value="charmander">Charmander</option>
                <option value="wartortle">Wartortle</option>

            </select>

            <input type="submit" value="Elegir" name="elegido" class="btn btn-primary">
        </form>

    </div>


    
</body>
</html>





<?php



?>