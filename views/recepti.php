<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:  #d9ce95;">
  <a class="navbar-brand" href="?view=welcome"><img width="100px" src="https://vectr.com/niki997/a9T91vSWR.svg?width=55&height=19&select=io6PrCJSB"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container-fluid">
	<ul class="navbar-nav mr-auto">
	  </ul>
	  <h4 class="lijepTekst" style="text-align: center; font-size: 50px;">Recepti</h4>
	</div> 

<ul class="navbar-nav" >
   <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <?php print ($user['ime']. " " . $user['prezime']); ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?logout=logout">Odjava</a>
            </div>
        </li>

<!--overlay za recepte-->
<li class="nav-item ">
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  
    <!--pisanje recepata-->
	
<div class="container col-md-8">
<h3 class="lijepTekst" style="font-size: 30px;">Napišite recept..</h3>
	<form method="POST" enctype="multipart/form-data" action="index.php?posts=<?php if (isset($edit_post)){?>edit&id=<?=$edit_post['id']?><?php } else {?>new<?php } ?>">
            <div class="form-group">
                <label for="naziv">Naslov:</label>
                <div class="input-group">
                    <input type="text" value="<?php if(isset($edit_post)) print($edit_post['naziv']);?>" name="naziv" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="tekst1">Sastojci:</label>
                <textarea name="tekst1" class="form-control"><?php if(isset($edit_post)) print($edit_post['tekst1']);?></textarea>
            </div>
			<div class="form-group">
                <label for="tekst2">Priprema:</label>
                <textarea name="tekst2" class="form-control"><?php if(isset($edit_post)) print($edit_post['tekst2']);?></textarea>
            </div>
			<!--forma za sliku-->
			<div class="form-group">
				<label for="slika">Izaberite sliku<strong>(obavezno)</strong>:</label>
				<input type="file" name="slika" id="slika">
				<input type="hidden" value="Dodaj objavu" name="submit"/>
			</div>
			<div class="form-group">
			<button class="btn btn-secondary" type="submit" name="objava">
<?php if (isset($edit_post)){ ?>Uredi objavu<?php } else { ?>Dodaj objavu<?php }?>
            </button>
           </div>
        </form>
	
</div>

</div>
</div>
	
</li>
	
	
	
<script>
function openNav() {
  document.getElementById("myNav").style.width = "50%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
    </ul>
    <div class="p-2 bd-highlight"  style="font-size:15px;cursor:pointer;" onclick="openNav()"><img src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-and-lines-1/2/16-512.png" height="50px" width="50px"></div>
  </div>
</nav>
<br><br><br>

<!--kartice za recepte-->
<div class="container-fluid background-pic">
<div class="row content">
<div class="col-sm-2 ">
	</div>
	<div class="col-sm-8" style="background-color: white; padding-top: 15px;">
	
<?php foreach ($posts as $post) { ?>
    <div class="card flex-row flex-wrap">
		<div class="col-sm-3">
        <div class="card-header border-0">
            <img src="images/<?php print($post['slika']);  ?>" height="200" width="200" class="img-thumbnail">
        </div>
		</div>
		<div class="col-sm-8">
        <div class="card-block px-2">
            <h4 class="card-title"><?php print($post['naziv']); ?></h4>
            <p class="card-text"><?php print($post['tekst1']); ?></p>
			<hr>
			<p class="card-text"><?php print($post['tekst2']); ?></p>
            
        </div>
		</div>
        <div class="card-footer w-100 text-muted">
			<?php print($post['post_id']); ?>
            <?php print($post['ime']. " " .$post['prezime']); ?>
        </div>
    </div>
	<?php } ?>
    <br>
    </div>
	<div class="col-sm-2">
		</div>
		</div>
</div>