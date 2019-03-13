<?php
	include ("views/static/header.php");
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:  #d9ce95;">
  <a class="navbar-brand" href="index.php?view=welcome"><img width="100px" src="https://vectr.com/niki997/a9T91vSWR.svg?width=55&height=19&select=io6PrCJSB"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container-fluid">
<div class="row-content" style="padding-top: 100px;">
		<h4 class="lijepTekst" style="text-align: center; font-size: 50px;">Recept koji ste tražili..</h4>
	</div>
</div>
<div class="container-fluid" id="slikaPozadina" >
	
	<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
	<?php
		if (isset($_POST['submit-search'])) {
			$search = mysqli_real_escape_string($konekcija, $_POST['search']);
			$sql = "SELECT o.id as post_id, naziv, datum, tekst1, tekst2, slika, ime, prezime 
					FROM objave o, korisnik k
					WHERE o.user_id=k.id AND naziv LIKE '%$search%'";
			$rezultat = mysqli_query($konekcija, $sql);
			$queryRezultat = mysqli_num_rows($rezultat);
			
			if ($queryRezultat > 0) {
				while ($row = mysqli_fetch_assoc($rezultat)) {
					echo "<div class='card flex-row flex-wrap'>
				<div class='col-sm-3'>
				<div class='card-header border-0'>
					<img src='images/".$row['slika']."' height='200' width='200' class='img-thumbnail'>
				</div>
				</div>
				<div class='col-sm-8'>
				<div class='card-block px-2'>
					<h4 class='card-title'>".$row['naziv']."</h4>
					<p class='card-text'>".$row['tekst1']."</p>
					<hr>
					<p class='card-text'>".$row['tekst2']."</p>
				</div>
				</div>
				<div class='card-footer w-100 text-muted'>
					<p>".$row['post_id']. " " .$row['ime']. " " .$row['prezime']."</p>
					<div style='float: right;'>".$row['datum']."</div>
				</div>
				</div>";
				}
			}else {
				echo"<div class='container-fluid' style='text-align: center; font-family: Quicksand; font-size: 35px; padding-top: 50px;'>
					
					Neažalost, tražili ste nepostojeći recept! Vratite se na početnu stranicu.</div>";
			}
		}
	?>
	</div>
	<div class="col-sm-2">
	</div>
	</div>
</div>