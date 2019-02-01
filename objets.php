
<?php
require ("Connexion.php");


$appli = new Connexion();

$contrat = $appli->getContrat(1);

echo $contrat->getNomBabysitter();


