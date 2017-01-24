<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recojida de datos</title>
  </head>
  <body>
    <?php
    include "calculoGym.php";

    echo "Lunes: " . $_POST["lunes"] . "<br>";
    echo "Martes: " . $_POST["martes"] . "<br>";
    echo "Miercoles: " . $_POST["miercoles"] . "<br>";
    echo "Jueves: " . $_POST["jueves"] . "<br>";
    echo "Viernes: " . $_POST["viernes"] . "<br>";
    echo "Sábado: " . $_POST["sabado"] . "<br>";

    $gestor=new calculoGym();

    $gestor->nuevoSocioHombre($_POST["lunes"]);
    $gestor->nuevoSocioHombre($_POST["martes"]);
    $gestor->nuevoSocioHombre($_POST["miercoles"]);
    $gestor->nuevoSocioHombre($_POST["jueves"]);
    $gestor->nuevoSocioHombre($_POST["viernes"]);
    $gestor->nuevoSocioHombre($_POST["sabado"]);

    echo "Media= " . $gestor->mediaHombres() . "<br><br>";

        echo "Lunes: " . $_POST["lunes"] . "<br>";
        echo "Martes: " . $_POST["martes"] . "<br>";
        echo "Miercoles: " . $_POST["miercoles"] . "<br>";
        echo "Jueves: " . $_POST["jueves"] . "<br>";
        echo "Viernes: " . $_POST["viernes"] . "<br>";
        echo "Sábado: " . $_POST["sabado"] . "<br>";

        $gestor=new calculoGym();

        $gestor->nuevoSocioMujer($_POST["lunes"]);
        $gestor->nuevoSocioMujer($_POST["martes"]);
        $gestor->nuevoSocioMujer($_POST["miercoles"]);
        $gestor->nuevoSocioMujer($_POST["jueves"]);
        $gestor->nuevoSocioMujer($_POST["viernes"]);
        $gestor->nuevoSocioMujer($_POST["sabado"]);

            echo "Media= " . $gestor->mediaMujeres();

    ?>
  </body>
</html>
