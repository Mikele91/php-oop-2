<?php
class Cliente {
    protected $name;
    protected $id;
    protected $email;
    protected $indirizzo;
    protected $carello =[];
    protected $totale = 0;

    function __construct($_name, $_id, $_email, $_indirizzo= NUll)
    {
        $this->name = $_name;
        $this->id = $_id;
        $this->email = $_email;
        $this->indirizzo = $_indirizzo;

    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }
    public function getCarello()
    {
        return $this->carello;
    }

    
    public function addCarello($_prodotto){
        $this->carello[]= $_prodotto;
        // var_dump($_prodotto); die();
            $this->totale += $_prodotto->getPrezzo();
    }
}