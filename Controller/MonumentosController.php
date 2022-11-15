<?php 
    include 'Model/MonumentosModel.php';

    class MonumentosController {

        function __construct() {
            $this->conFactoryPDO = new ConnectionFactoryPDO();
            $this->monumentos = new MonumentosModel();
        }

        function listadeMonumentos () {
            $result = $this->monumentos->listadeMonumentos();
            $json = array();
            $json_str = "";
            foreach ($result as $r) {
                $json_str.="\n\n{\"idMonumento\" : ".$r['idMonumento'].",\"nome\" : \"".$r['nome']."\",\"latitude\" : ".$r['latitude'].",\"longitude\" : ".$r['longitude']."},\n";
            }
            $json_str = rtrim($json_str,",\n");
            $json = "[".$json_str."\n\n]";
            echo $json;
        }
    }