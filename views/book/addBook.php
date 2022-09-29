<?php  include VIEWS.'inc/header.php'; ?>

<?php
    Support::debug($_FILES);
?>


<h1 class="text-center my-5">Ajouter un livre</h1>
<form action="" method="POST" class="ajout-livre" enctype="multipart/form-data">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="titre" placeholder="Le seigneur des anneaux" name="titre">
        <label for="titre">Titre du livre</label>
    </div>
    <select name="genre" id="genre" class="mb-2">
        <option value="">Choisir un genre</option>
        <option value="horreur">Horreur</option>
        <option value="romantique">Romantique</option>
        <option value="sf">Science Fiction</option>
        <option value="thriller">Thriller</option>
    </select>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="author" placeholder="Tolkien" name="author">
        <label for="author">Auteur du livre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="price" placeholder="17" name="price">
        <label for="price">Prix du livre</label>
    </div>
    <input type="file" name="cover" id="cover" class="d-block mb-3">
    <input type="submit" value="Enregistrer" class="btn btn-success">
</form>


<?php  include VIEWS.'inc/footer.php'; ?>