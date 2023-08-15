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
if(isset($_GET['btn-enviar'])){
    $nombre=$_GET['tPeli'];
    $tanda=$_GET['tanda'];
    $nBoletos=$_GET['numB'];
    $ptotal=$_GET['cobro'];
}

file_put_contents("cobro.txt", $ptotal, FILE_APPEND);
?>
<?php include "layouts/header.php"?>
<?php include "views/modal2.php"?>

<!--    header("refresh:10; url=index.php");-->


<div class="mod">
    <br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="factura_tarjetazo.php" method="get">
                <div class="card mb-3">
                    <div class="card-header" style="text-align: center"><h3>Checkout</h3></div>
                    <div class="card-body"><h4>Por favor verifique la siguiente información antes de realizar el pago:</h4></div>

                        <ul class="list-group list-group-flush bg-light">
                            <li class="list-group-item">
                                <h5><b>Pelicula:</b> <?php echo $nombre; ?> </h5>
                                <input type="text" name="nPelicula" value="<?php echo $nombre; ?>" style="display: none;">
                            </li>
                            <li class="list-group-item">
                                <h5><b>Tanda:</b> <?php echo $tanda ?> </h5>
                                <input type="text" name="hora" value="<?php echo $tanda ?>" style="display: none;">
                            </li>
                            <li class="list-group-item">
                                <h5><b>Cantidad de boletos:</b> <?php echo $nBoletos ?> </h5>
                                <input type="text" name="boletos" value="<?php echo $nBoletos ?>" style="display: none;">
                            </li>
                            <li class="list-group-item">
                                <h5><b>Precio total:</b> C$<?php echo $ptotal ?> </h5>
                                <input type="text" name="ptot" value="<?php echo $ptotal ?>" style="display: none;">
                            </li>
                        </ul>
                    <div class="card-footer">
                        <div ><button type="submit" class="btn-lg btn-success btn-block" name="btn-send" data-toggle="modal" data-target="#modal2">Aceptar</button></div>
                        <br>
            </form>
                        <div><form action="index.php"><button type="submit" class="btn-lg btn-danger btn-block">Cancelar</button></form></div>
                    </div>
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>