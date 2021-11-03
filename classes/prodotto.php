<?php
class Prodotto {
    protected $name;
    protected $id;
    protected $prezzo;


    function __construct($_name, $_id,$_prezzo)
    {
        $this->name = $_name;
        $this->id = $_id;
        $this->prezzo = $_prezzo;


    }

    // NOME PRODOTTO
    public function getName()
    {
        return $this->name;
    }


    public function setName($_name){
        $this->name = $_name;

    }
    

    // PRODOTTO ID 
    public function getId()
    {
        return $this->id;
    }

    public function setid($_id)
    {
        $this->id = $_id;

    }
    // Prodotto prezzo 

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;

    }
    
}

