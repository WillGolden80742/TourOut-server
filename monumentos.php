<?php 
    header("Content-type: application/json; charset=utf-8");
    include "Controller/MonumentosController.php";

    $monumentos = new MonumentosController();

    $monumentos->listadeMonumentos();
