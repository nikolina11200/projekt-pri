<?php

include('../db.php');

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];
$plozinka = $_POST['plozinka'];

if ($lozinka != $plozinka) {
	print ("Greška: Lozinke se ne podudaraju");
} else {
	//Izgradnja upita
	$sql = "INSERT INTO korisnik VALUES(null, DEFAULT,
	'".$ime."', '".$prezime."', '".$korisnicko_ime."', '".$lozinka."')";
	
	
	
}
				$rezultat = mysqli_query($konekcija, $sql);
						if(mysqli_num_rows($rezultat)>0)
						{
							print ("greška");
						}
						else
						{
							print("uspješno ste se registrirali");
								$_SESSION['ime']= $ime;
								$_SESSION['prezime']= $prezime;
								$_SESSION['korisnicko_ime']= $korisnicko_ime;
								$_SESSION['lozinka'] = $lozinka;
								$_SESSION['plozinka']= $plozinka;
							header("Location: ../index.php?view=welcome");
							}
						
		
mysqli_close($konekcija);
?>