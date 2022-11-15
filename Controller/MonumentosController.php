<?php 
    include 'Model/MonumentosModel.php';

    class MonumentosController {

        function __construct() {
            $this->conFactoryPDO = new ConnectionFactoryPDO();
            $this->monumentos = new MonumentosModel();
        }

        function listadeMonumentos () {
            $result = $this->monumentos->listadeMonumentos();
            $json_str = "";
            foreach ($result as $r) {
                $json_str.="".$r['nome'].",";
            }
            echo $json_str;
        }
    }