<?php

function connect($server,$user,$mdp,$db)
{
try
{
    $bdd = new PDO('mysql:host='.$server.';dbname='.$db.'', $user, $mdp);
    $bdd->exec('SET NAMES utf8');
    echo print_r("je suis passé");
    $req = 'USE admini;SELECT * FROM user;';
	$rep = $dbh->query($req, PDO::FETCH_ASSOC);
	echo print_r($rep->fetchAll(),1);
}
catch (Exception $e)
{
        die('Erreur  : ' . $e->getMessage());
}
}

connect('172.17.0.6','nicolas','jeSaisPasQuoi','admini');
//172.17.0.4 adresse container VPS à la place de .6 qui est mySQL 


?>


