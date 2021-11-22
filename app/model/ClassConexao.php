<?php
namespace App\Model;

class ClassConexao {
    public function conexaoDB()
    {
        try {
            $Con = new \Pdo("mysql:host=".HOST.";dbname=".DB, USER, PASS);
            return $Con;
        } catch(\PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}