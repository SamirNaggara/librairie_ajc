<?php  include VIEWS.'inc/header.php'; ?>
<header>
<div class="container row">
	<figure class="col-md">
		<img src="<?=COVER . $detailLivre["cover"]?>" class="img-fluid d-block mx-auto">
	</figure>
	<div class="col-md">
		<h1 class=""><?=$detailLivre["title"]?></h1>
		<p>Auteur : <?=$detailLivre["author"]?></p>
		<p>Genre : <?=$detailLivre["genre"]?></p>
		<p>Quantité disponible : <?=$detailLivre["quantity"]?></p>
	</div>
</div>

<?php  include VIEWS.'inc/footer.php'; ?>