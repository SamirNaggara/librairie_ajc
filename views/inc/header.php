<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css">

    <title>Master Lib</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?=BASE_PATH?>">MasterLib</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?=BASE_PATH?>ajout_livre">Ajouter Livre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_PATH?>livres">Voir les livres</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="msg">
    <!-- On test si session["msg]  existe si c'est le cas, on l'affiche sinon, on envoie une chaine de caractère vide -->
    <?= isset($_SESSION["msg"]) ? $_SESSION["msg"] : ""; ?>
</div>
<div class="container mt-4">