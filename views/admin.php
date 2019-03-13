<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:  #d9ce95;">
  <a class="navbar-brand" href="?view=welcome"><img width="100px" src="https://vectr.com/niki997/a9T91vSWR.svg?width=55&height=19&select=io6PrCJSB"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="container-fluid">
    <ul class="navbar-nav mr-auto ">
	  </ul>
	  <h4 class="lijepTekst" style="text-align: center; font-size: 50px;">Recepti</h4>
	</div> 
<ul class="navbar-nav" >
   <li class="nav-item dropdown" style="float:right;">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <?php print ($user['ime']. " " . $user['prezime']); ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?logout=logout">Odjava</a>
            </div>
        </li>
</ul>
</div>
</nav>
<br><br><br>
<div class="container-fluid" style="background-color: #f7f0ca; padding-top: 15px;" >
<div class="row">
    <div class="col-sm-4 text-center">
        <form method="POST" enctype="multipart/form-data" action="index.php?posts=<?php if (isset($edit_post)){?>edit&id=<?=$edit_post['id']?><?php } else {?>new<?php } ?>">
            <div class="form-group">
                <label for="korisnicko_ime">Naziv:</label>
                <div class="input-group">
                    <input type="text" value="<?php if(isset($edit_post)) print($edit_post['naziv']);?>" name="naziv" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="lozinka">Sastojci:</label>
                <textarea name="tekst1" class="form-control"><?php if(isset($edit_post)) print($edit_post['tekst1']);?></textarea>
            </div>
			<div class="form-group">
                <label for="lozinka">Priprema:</label>
                <textarea name="tekst2" class="form-control"><?php if(isset($edit_post)) print($edit_post['tekst2']);?></textarea>
            </div>
			<div class="form-group">
				<label for="slika">Izaberite sliku<strong>(obavezno)</strong>:</label>
				<input type="file" name="slika" id="slika" value="<?php if(isset($edit_post)) print($edit_post['slika']);?>">
				<input type="hidden" class="btn btn-primary" name="submit">
			</div> 
			<div class="form-group">
			<button class="btn btn-secondary" type="submit" name="objava">
<?php if (isset($edit_post)){ ?>Uredi objavu<?php } else { ?>Dodaj objavu<?php }?>
            </button>
           </div>
        </form>
    </div>


    <div class="col-sm-8" >
	<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <td>Id</td>
                <td>Naslov</td>
                <td>Sastojci</td>
				<td>Priprema</td>
				<td>Slika</td>
                <td>Datum</td>
                <td>Autor</td>
                <td>Akcije</td>
            </tr>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td><?php print($post['post_id']); ?></td>
                    <td><?php print($post['naziv']); ?></td>
                    <td><?php print($post['tekst1']); ?></td>
					<td><?php print($post['tekst2']); ?></td>
					<td>
						<img src="images/<?php print($post['slika']);  ?>" height="200" width="200" class="img-thumbnail">
						
					</td>
                    <td><?php print($post['datum']); ?></td>
                    <td><?php print($post['ime']. " " .$post['prezime']); ?></td>
                    <td>
                        <a class="btn btn-danger btn-sm"
                    href="index.php?posts=delete&id=<?php print($post['post_id']); ?>">Pobriši</a>
                    <a class="btn btn-default btn-sm"
                    href="index.php?posts=edit&id=<?php print($post['post_id']); ?>">Uredi</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
		</div>
    </div>
</div>
</div>