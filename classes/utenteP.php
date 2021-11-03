<?php
class Premium  extends Cliente{



    protected $punti;


function __construct($_name, $_id, $_email ,$_punti)
{
    parent::__construct($_name, $_id, $_email,);
    $this->punti = $_punti;
    
}

public function getPunti()
{
    return $this->punti;
}
public function setPunti($_punti)
{
    $this->prezzo = $_punti;
}
}