<?php  include VIEWS.'inc/header.php'; ?>
<?php Support::Debug($_FILES); ?>

<!-- Formulaire en bootstrap pour ajouter un livre -->
<h1 class="text-center my-5">Ajouter un livre</h1>

<form class="row g-3 needs-validation" action="" method="POST" enctype="multipart/form-data">

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="titre" placeholder="Dans un autre monde" name="title">
    <label for="title">Titre du livre</label>
  </div>

  <div class="form-floating">
    <select name="genre" id="genre" class="mb-2">
        <option>Choix du genre</option>
        <option value="thriller">Thriller</option>
        <option value="romantique">Romantique</option>
        <option value="Horreur">Horreur</option>
        <option value="science-fiction">Science-fiction</option>
    </select>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="author" placeholder="Maxime Chattam" name="author">
    <label for="author">Auteur</label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="price" placeholder="12.90" name="price">
    <label for="price">Prix du livre</label>
  </div>

  <input type="file" name="cover" id="cover" class="d-block mb-3">
  <input type="submit" value="Ajouter" class="btn btn-dark">

</form>

    

<?php  include VIEWS.'inc/footer.php'; ?>