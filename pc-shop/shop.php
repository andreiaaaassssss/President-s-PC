<?php
include('data_baza.php');
readfile('content.html');

if (isset($_POST['comanda'])) {
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$adresa = $_POST['adresa'];
	$telefon = $_POST['telefon'];
	$produs= $_POST['produs'];
	$codcard = $_POST['codcard'];
    $subiect =$_POST['subiect'];


							data_baza::query('INSERT INTO pc VALUES (\'\', :nume, :prenume, :adresa, :telefon, :produs, :codcard, :subiect)', array('nume'=>$nume, 'prenume'=>$prenume, 'adresa'=>$adresa, 'telefon'=>$telefon,'produs'=>$produs,'codcard'=>$codcard,'subiect'=>$subiect));
}
?>
