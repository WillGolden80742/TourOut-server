<?php 
    header("Content-type:audio/mpeg; charset=utf-8");
    include "Controller/MonumentosController.php";

    $monumentos = new MonumentosController();

    echo $monumentos->baixandoDados($_GET['status']);
