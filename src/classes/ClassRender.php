<?php
namespace Src\Classes;

class ClassRender {
    #Propriedades
    private $Dir, $Title, $Description, $Keywords;
    
    public function getDir()
    {
        return $this->Dir;
    }
 
    public function setDir($Dir)
    {
        $this->Dir = $Dir;
    }

    public function getTitle()
    {
        return $this->Title;
    }
 
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getKeywords()
    {
        return $this->Keywords;
    }

    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
    }
    
    #Método responsável por renderizar todos os layouts
    public function renderLayout()
    {
        include_once(DIRREQ."app/view/Layout.php");
    }
    
    #Adiciona característica específicas no header
    public function addHeader()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")) {
            include(DIRREQ."app/view/{$this->getDir()}/Header.php");
        }
    }

    #Adiciona característica específicas no head
    public function addHead()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")) {
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }

    #Adiciona característica específicas no main
    public function addMain()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")) {
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }

    #Adiciona característica específicas no footer
    public function addFooter()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")) {
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }
}