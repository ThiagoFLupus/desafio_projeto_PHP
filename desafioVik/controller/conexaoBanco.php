<?php

    class ConexaoBanco{

        public static function getConexao(){
            $host="localhost";
            $bancoD="vik";
            $usuario="root";
            $senha="";

            try{
                return $pdo= new PDO("mysql:dbname=".$bancoD."; host=".$host, $usuario, $senha);
                //return array("conexao"=> $pdo, "resposta"=> "Conexão realizada com sucesso.");
            }catch(PDOException $e){
                return array("conexao"=> null, "resposta"=> "Erro gerado: ".$e-> getMessage());
            }
        }
    }
?>