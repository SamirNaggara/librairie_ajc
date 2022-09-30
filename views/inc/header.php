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
<nav class="nav">

</nav>
<div class="msg">
    <!-- On test si session["msg]  existe si c'est le cas, on l'affiche sinon, on envoie une chaine de caractère vide -->
    <?= isset($_SESSION["msg"]) ? $_SESSION["msg"] : ""; ?>
</div>
<div class="container mt-4">