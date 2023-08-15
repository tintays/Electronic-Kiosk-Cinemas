<?php
sleep(10);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/cine.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Checkout</title>


</head>
<body class="container" style="background-color: #303030">
<?php
if(isset($_GET['btn-send'])){
    $nombre=$_GET['nPelicula'];
    $tanda=$_GET['hora'];
    $nBoletos=$_GET['boletos'];
    $ptotal=$_GET['ptot'];

    try {
        $saldo = 'data.txt';
        if (file($saldo)== null){
            $dato=0;
        }else{

            $datos = file($saldo);
            $dato = rtrim($datos[0]);
        }

    }
    catch (Exception $e){
        console.log($e);
    }



# Prepare the data
# Save it
    file_put_contents("data.txt","");

    header("refresh:15; url=index.php");
}
?>
<?php include "layouts/header.php"?>


<!--    header("refresh:10; url=index.php");-->


<div class="mod">
    <br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="card mb-3">
                    <?php
                        if($ptotal>$dato) {
                            echo '<div class="card-header" style="text-align: center"><h3>¡¿Error?!</h3></div>';
                            echo '<div class="card-body"><h4>Hubo un error al realizar el pago, intente nuevamente</h4></div>';
                        }
                        else {
                            echo '<div class="card-header" style="text-align: center"><h3>¡Correcto!</h3></div>';
                            echo '<div class="card-body"><h4>¡Hubo éxito al realizar el pago, que disfrute su pelicula!</h4></div>';
                            echo '<ul class="list-group list-group-flush bg-light">
                        <li class="list-group-item">
                            <h5><b>Pelicula:</b> '.$nombre.'</h5>
                        </li>
                        <li class="list-group-item">
                            <h5><b>Tanda:</b> '.$tanda.'</h5>

                        </li>
                        <li class="list-group-item">
                            <h5><b>Cantidad de boletos:</b> '.$nBoletos.'</h5>

                        </li>
                        <li class="list-group-item">
                            <h5><b>Precio total:</b> C$ '.$ptotal.'</h5>
                        </li>
                    </ul>';
                        }
                    ?>

                    <?php
                        if($ptotal>$dato)
                            echo '<div class="card-footer"> <h3>Intente de nuevo o con otra tarjeta</h3></div>';
                        else
                            echo '<div class="card-footer"> <h3>Su recibo se esta imprimiendo, muchas gracias por preferirnos</h3></div>';
                    ?>
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>