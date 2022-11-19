<?php 
    header("Content-type:audio/mpeg; charset=utf-8");
    include "Controller/MonumentosController.php";

    $monumentos = new MonumentosController();

    if (isset($_GET['idDocumento'])) {
        echo $monumentos -> audioDescricao($_GET['idDocumento']);
    }