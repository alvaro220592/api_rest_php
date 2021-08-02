<?php

    namespace app\Models;

    class User{

        private static $table = 'users';

        public static function get($id){
            $conexao = new \PDO(DBDRIVER . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER,DBPASS);

            $sql = 'SELECT * FROM' . self::$table . 'WHERE id = ?';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                throw new \Exception("Erro ao buscar", 1);
            }
        }
    }