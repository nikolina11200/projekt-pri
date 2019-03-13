<?php
	include ("views/static/header.php");
?>


<h1>search stranica</h1>
<div class="container-fluid" id="slikaPozadina" >
	<?php
		if (isset($_POST['submit-search'])) {
			$search = mysqli_real_escape_string($konekcija, $_POST['search']);
			$sql = "SELECT * FROM objave WHERE naziv LIKE '%$search%' OR user_id LIKE '%$search%'";
			$rezultat = mysqli_query($konekcija, $sql);
			$queryRezultat = mysqli_num_rows($rezultat);
			
			if ($queryRezultat > 0) {
				while ($row = mysqli_fetch_assoc($rezultat)) {
					echo "<div>
						<h3>".$row[naziv]."</h3>
						<p>".$row[tekst1]."</p>
						<p>".$row[tekst2]."</p>
						<p>".$row[datum]."</p>
					
					
					</div>"
				}
			}else {
				echo"nema rezultata"
			}
		}
	?>
</div>