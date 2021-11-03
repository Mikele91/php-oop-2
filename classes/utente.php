<?php
class Cliente {
    protected $name;
    protected $id;
    protected $email;
    protected $indirizzo;

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
}

