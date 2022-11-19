<?php 
    header("Content-type: application/json; charset=utf-8");
    include "Controller/MonumentosController.php";

    $monumentos = new MonumentosController();

    if (isset($_GET['nome']) ) {
        $monumentos->listadeMonumentosByNome($_GET['nome']);
    } else {
        $monumentos->listadeMonumentos();
    }