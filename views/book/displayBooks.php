<?php  include VIEWS.'inc/header.php'; ?>

<h1 class="text-center my-5">Bienvenue dans la librairie !</h1>
<div class="row mx-auto">
    <?php
        foreach($allBooks as $book)
        {
            ?>
            <div class="card col-sm-4 m-2" style="width: 18rem;">
            <img src="<?= COVER . $book["cover"]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$book["title"]?></h5>
                    <p class="card-text">De : <?=$book["author"]?></p>
                    <p class="card-text">Catégorie : <?=$book["genre"]?></p>
                    <?php if($book["price"]){ ?>
                        <p class="card-text">Prix : <?=$book["price"]?>€</p>
                    <?php }?>
                    <a href="delete-book?id=<?=$book["id_book"]?>" class="btn btn-danger btn-sm">Supprimer</a>
					<a href="detail-book?id=<?=$book["id_book"]?>" class="btn btn-primary btn-sm">Voir</a>
					<a href="update-book?id=<?=$book["id_book"]?>" class="btn btn-info btn-sm">Modifier</a>
                </div>
            </div>
        <?php
        }
    ?>
</div>
<?php  include VIEWS.'inc/footer.php'; ?>