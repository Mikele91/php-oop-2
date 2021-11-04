<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->



<?php
require_once __DIR__ . "/classes/utente.php";
require_once __DIR__ . "/classes/prodotto.php";
require_once __DIR__ . "/classes/utenteP.php";
require_once __DIR__ . "/classes/creditCard.php";

$carta= new Card(234056930,"2018-08", 455, "michele");
var_dump($carta);
echo $carta->getNumber(), $carta-> getHeaded(), $carta->getCvv();

$michele = new Cliente ("michele", 1, "michele@hotmail.it");
$simone = new Premium("simone" , 2, "simone@live.come",14);
var_dump($simone);
try{
    echo $michele->setName($michele->getName());

}catch(Exception $e){
    echo "Errore: " . $e->getMessage();
}
$elm1 = new Prodotto("biscotti", "a1", 20);
$michele->addCarello($elm1);
$michele->addCarello($elm1);

$michele->addCarello($elm1);


// $spesa = [$elm1,$elm2,$elm3];
var_dump($michele);

// var_dump($michele);

echo $michele->getName();

