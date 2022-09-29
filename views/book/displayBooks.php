<?php  include VIEWS.'inc/header.php'; ?>


<h1 class="text-center my-5">Liste des livres</h1>

<div class="row mx-auto">
<?php 
foreach($allBooks as $book)
{
    ?>
        <div class="card col-4 m-3" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?=$book["title"]?></h5>
                <p class="card-text">De <?=$book["author"]?></p>
                <p class="card-text">Categorie : <?=$book["genre"]?></p>
                <?php if ($book["price"]){ ?>
                    <p class="card-text">Prix : <?=$book["price"]?> €</p>
                <?php } ?>
            </div>
        </div>
    <?php
}

?>
</div>



<?php  include VIEWS.'inc/footer.php'; ?>