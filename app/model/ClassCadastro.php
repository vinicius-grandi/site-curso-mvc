<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    private $Db;

    #Cadastrará os clientes no sistema
    protected function cadastroClientes($Nome, $Sexo, $Cidade)
    {
        $Id = 0;
        $sql = "INSERT INTO sistema VALUES (:Id , :Nome , :Sexo , :Cidade)";
        $this->Db = $this->conexaoDb()->prepare($sql);
        
        $this->Db->bindParam(":Id", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":Nome", $Nome, \PDO::PARAM_STR);
        $this->Db->bindParam(":Sexo", $Sexo, \PDO::PARAM_STR);
        $this->Db->bindParam(":Cidade", $Cidade, \PDO::PARAM_STR);

        $this->Db->execute();
    }

    #Acesso ao DB
    protected function selecionaClientes($Nome, $Sexo, $Cidade)
    {
        $Nome = '%'.$Nome.'%';
        $Sexo = '%'.$Sexo.'%';
        $Cidade = '%'.$Cidade.'%';

        $sql = "SELECT * FROM sistema WHERE Nome LIKE :Nome AND Sexo LIKE :Sexo AND Cidade LIKE :Cidade ";
        $BFetch = $this->conexaoDb()->prepare($sql);

        $BFetch->bindParam(":Nome", $Nome, \PDO::PARAM_STR);
        $BFetch->bindParam(":Sexo", $Sexo, \PDO::PARAM_STR);
        $BFetch->bindParam(":Cidade", $Cidade, \PDO::PARAM_STR);

        $BFetch->execute();

        $I = 0;
        while($Fetch = $BFetch->fetch(\PDO::FETCH_ASSOC)) {
            $Array[$I] = ['Nome'=>$Fetch['Nome'], 'Sexo'=>$Fetch['Sexo'],'Cidade'=>$Fetch['Cidade']];
            $I++;
        }
        if(isset($Array)) {
            return var_dump($Array);
        } else {
            echo "Não podemos encontrar nada em nosso banco de dados";
        }
    }
}