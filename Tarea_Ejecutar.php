<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Salida de datos
            </p>
        </div>
    </section>

    <section class="section is-medium columns">
        
        <div class="column"></div>

        <div class="column is-two-fifths">

            <?php 

            $Nombre = $_POST['Nombre'];
            $APaterno = $_POST['APaterno'];
            $AMaterno = $_POST['AMaterno'];
            $Cargo = $_POST['Cargo'];
            $RFC = $_POST['RFC'];
            $Curp = $_POST['Curp'];
            $Domicilio = $_POST['Domicilio'];
            $Telefono = $_POST['Telefono'];
            $CorreoEmail = $_POST['CorreoEmail'];
            $Sexo = $_POST['Sexo'];
            $FNacimiento = $_POST['FNacimiento'];
            $ECivil = $_POST['ECivil'];
            $Escolaridad = $_POST['Escolaridad'];
            $RFamiliar = $_POST['RFamiliar'];
            $Observaciones = $_POST['Observaciones'];

            echo "<h1 class='is-subtitle'>";
            echo "<br>Bienvenido " . $Nombre . " " . $APaterno . " " . $AMaterno . ".";
            echo "<br>Su cargo es " . $Cargo . ".";
            echo "<br>Su RFC es " . $RFC . ".";
            echo "<br>Su CURP es " . $Curp . ".";
            echo "<br>Vives en " . $Domicilio . ".";
            echo "<br>Su numero de telefono es " . $Telefono . ".";
            echo "<br>Con direccion web " . $CorreoEmail . ".";
            echo "<br>Tu genero es " . $Sexo . ".";
            echo "<br>Naciste en " . $FNacimiento . ".";
            echo "<br>Actualmente estas " . $ECivil . ".";
            echo "<br>Tu escolaridad es " . $Escolaridad . ".";
            echo "<br>Tu referencia familiar " . $RFamiliar . ".";
            echo "<br>Sus observaciones dadas fueron " . $Observaciones . ".";
            ?>
        </div>

        <div class="column"></div>

    </section>
    
</body>
</html>