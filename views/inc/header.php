<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Librarie</title>
    <link href="<?= ASSETS ?>css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="nav">

</nav>
<div class="msg">
    <?= isset($_SESSION["msg"]) ? $_SESSION["msg"] : ""; // On test si session["msg"] existe, si c'est le cas, on l'affiche, sinon en envoie une chaine de caractere vide?>
</div>
<div class="container mt-4">