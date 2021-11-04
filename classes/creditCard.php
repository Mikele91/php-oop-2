<?php
class Card {
    protected $number;
    protected $date;
    protected $cvv;
    protected $headed;
    

    function __construct($_number,$_date, $_cvv, $_headed)
    {
        $this->number = $_number;
        $this->date = $_date;
        $this->cvv = $_cvv;
        $this->headed = $_headed;

    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getCvv()
    {
        return $this->cvv;
    }
    public function getHeaded()
    {
        return $this->headed;
    }
}