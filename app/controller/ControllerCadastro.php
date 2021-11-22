<?php
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro {
    protected $Nome, $Sexo, $Cidade;


    public function __construct()
    {
        $Render = new ClassRender();
        $Render->setTitle("Cadastro");
        $Render->setDescription("Esse é o nosso site de MVC");
        $Render->setKeywords("mvc completo, curso de mvc, webdesign em foco.");
        $Render->setDir("cadastro");
        $Render->renderLayout();
    }

    #Recebe variáveis
    public function recVariaveis()
    {
        if(isset($_POST['Nome'])) {
            $this->Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(isset($_POST['Sexo'])) {
            $this->Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if(isset($_POST['Cidade'])) {
            $this->Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #Chama o método de cadastro da class Cadastro
    public function cadastrar()
    {
        $this->recVariaveis();
        parent::cadastroClientes($this->Nome, $this->Sexo, $this->Cidade);
    }

    #Selecionar e exibir os dados do DB
    public function seleciona()
    {
        $this->recVariaveis();
        parent::selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);
    }
}