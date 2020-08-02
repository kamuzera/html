<?php
abstract class ClassConexao {

    public function Conectar (){

        try {
            $Pdo=new PDO("mysql:host=localhost;dbname=new_db", "root","root");
            return $Pdo;

        } catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}

?>