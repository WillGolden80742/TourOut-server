<?php 
    header("Content-type:text/html; charset=utf-8");
    include "Controller/MonumentosController.php";

    $monumentos = new MonumentosController();

    if (isset($_GET['idDocumento'])) {
        echo $monumentos -> audioDescricao($_GET['idDocumento']);
    } else if (isset($_GET['lat']) && isset($_GET['long']) ) {
        echo $_GET['lat']." ".$_GET['long'];
    }