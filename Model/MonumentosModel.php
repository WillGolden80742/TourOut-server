<?php 
    include 'ConnectionFactory/ConnectionFactoryPDO.php';

    class MonumentosModel {

        function __construct() {
            $this->conFactoryPDO = new ConnectionFactoryPDO();
        }

        function listadeMonumentos () {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT idMonumento, nome, latitude, longitude FROM Monumento");
            return $connection->execute($query)->fetchAll();
        }

        function audioDescricao ($id) {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT audioDescricao FROM Monumento WHERE idMonumento = :id");
            $query->bindParam(':id',$id, PDO::PARAM_STR);
            return $connection->execute($query)->fetchAll();
        }
    }