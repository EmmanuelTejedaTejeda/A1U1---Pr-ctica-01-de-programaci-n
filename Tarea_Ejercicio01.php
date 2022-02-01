<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 01</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">

    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }
    </script>
</head>
<body>

<section class="hero is-danger">
        <div class="hero-body">
        <p class="title">
        Datos del empleado
        </p>
        </div>
</section>

<section class="section is-medium columns">

<div class="column"></div>

        <div class="column is-two-fifths">
            <form action="Tarea_Ejecutar.php" method="post">

                <div>
                    <br>
                    <label class="subtitle">Nombre(s):</label>
                    <input class="input is-primary" type="text" name="Nombre" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Apellido Paterno:</label>
                    <input class="input is-primary" type="text" name="APaterno" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Apellido Materno:</label>
                    <input class="input is-primary" type="text" name="AMaterno" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Cargo:</label>
                    <input class="input is-primary" type="text" name="Cargo" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">RFC:</label>
                    <input class="input is-primary" type="text" name="RFC" onkeyup="mayus(this);" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Curp:</label>
                    <input class="input is-primary" type="text" name="Curp" onkeyup="mayus(this);" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Domicilio:</label>
                    <input class="input is-primary" type="text" name="Domicilio" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Telefono</label>
                    <input class="input is-primary" type="tel" placeholder="Solo numeros" size="10" name="Telefono" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Correo electronico:</label>
                    <input class="input is-primary" type="tel" name="CorreoEmail" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Sexo:</label>
                    <select name="Sexo" class="subtitle" required>
                    <option class="subtitle">Masculino</option>
                    <option class="subtitle">Femenino</option>

                    </select>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Fecha de nacimiento:</label>
                    <input class="subtitle" type="date" 
                    value="2000-01-01"
                    min="2000-01-01" max="2004-01-01"
                    name="FNacimiento" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Estado civil:</label>
                    <select name="ECivil" class="subtitle" required>
                        <option class="subtitle">Casado</option>
                        <option class="subtitle">Soltero</option>
                        <option class="subtitle">Viudo</option>
                        <option class="subtitle">Divorciado</option>
                    </select>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Escolaridad:</label>
                    <select name="Escolaridad" class="subtitle" required>
                        <option class="subtitle">Primaria</option>
                        <option class="subtitle">Secundaria</option>
                        <option class="subtitle">Preparatoria</option>
                        <option class="subtitle">Universidad</option>
                    </select>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Referencia familiar:</label>
                    <input class="input is-primary" type="text" name="RFamiliar" required>
                </div>

                <div>
                    <br>
                    <label class="subtitle">Observaciones:</label>
                    <input class="input is-primary" type="text" name="Observaciones" required>
                </div>

                <div>
                    <br>
                    <input class="button is-primary" type="submit" name="Enviar">
                </div>
            </form>
        </div>
        <div class="column"></div>
</section>

</body>
</html>