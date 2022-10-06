<?php  include VIEWS.'inc/header.php'; ?>
<?php // Support::Debug($_FILES); ?>

<!-- Formulaire en bootstrap pour ajouter un livre -->
<h1 class="text-center my-5">Modifier votre livre</h1>

<form class="row g-3 needs-validation" action="" method="POST" enctype="multipart/form-data">

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="titre" placeholder="Dans un autre monde" name="title" value="<?=$detailLivre["title"];?>">
    <label for="title">Titre du livre</label>
  </div>

  <div class="form-floating">
    <select name="genre" id="genre" class="mb-2">
        <option>Choix du genre</option>
        <option value="thriller" <?=$detailLivre["genre"]=="thriller" ? "selected" : ""; ?>>Thriller</option>
        <option value="romantique" <?=$detailLivre["genre"]=="romantique" ? "selected" : ""; ?>>Romantique</option>
        <option value="Horreur" <?=$detailLivre["genre"]=="horreur" ? "selected" : ""; ?>>Horreur</option>
        <option value="science-fiction" <?=$detailLivre["genre"]=="science-fiction" ? "selected" : ""; ?>>Science-fiction</option>
    </select>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="author" placeholder="Maxime Chattam" name="author" value="<?=$detailLivre["author"];?>">
    <label for="author">Auteur</label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="price" placeholder="12.90" name="price" value="<?=$detailLivre["price"];?>">
    <label for="price">Prix du livre</label>
  </div>
  
  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="quantity" placeholder="1" name="quantity" value="<?=$detailLivre["quantity"];?>">
    <label for="price">Quantité</label>
  </div>

  <input type="file" name="cover" id="cover" class="d-block mb-3">
  <?php 
	if (empty($detailLivre["cover"]))
	{
		echo "<p>Vous n'avez pas d'images pour le moment</p>";
	}else{
		?>
	  <figure>
		<img src="<?=COVER . $detailLivre["cover"]; ?>" class="img-fluid">
		<figcaption>Image déja enregistrée</figcaption>
	  </figure>
	  <?php 
	}
	?>
  <input type="submit" value="Modifier" class="btn btn-dark">
  
  

</form>

    

<?php  include VIEWS.'inc/footer.php'; ?>