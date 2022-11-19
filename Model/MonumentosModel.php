<?php 
    include 'ConnectionFactory/ConnectionFactoryPDO.php';

    class MonumentosModel {

        function __construct() {
            $this->conFactoryPDO = new ConnectionFactoryPDO();
        }

        function listadeMonumentos () {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT idMonumento, nome, latitude, longitude, descricao FROM Monumento");
            return $connection->execute($query)->fetchAll();
        }

        function listadeMonumentosByNome ($nome) {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT idMonumento, nome, latitude, longitude, descricao FROM Monumento WHERE nome like CONCAT('%', :nome, '%') ");
            $query->bindParam(':nome',$nome, PDO::PARAM_STR);
            return $connection->execute($query)->fetchAll();
        }

        function audioDescricao ($id) {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT audioDescricao FROM Monumento WHERE idMonumento = :id");
            $query->bindParam(':id',$id, PDO::PARAM_STR);
            return $connection->execute($query)->fetchAll();
        }

        function arquivoNaoEncontrado () {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT arquivo FROM MensagensAoUsuario WHERE idMensagem = '1'");
            return $connection->execute($query)->fetchAll();
        }

        function permissoesNecessarias () {
            // Recomendado uso de prepare statement 
            $connection = $this->conFactoryPDO;
            $query = $connection->query("SELECT arquivo FROM MensagensAoUsuario WHERE idMensagem = '2'");
            return $connection->execute($query)->fetchAll();
        }
    }