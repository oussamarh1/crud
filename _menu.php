<?php
require_once "fonction.php";
$categories = all("categorie");

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestin De Stock</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="create_produit.php">Noveau Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="liste_produit.php">Liste De Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_cata.php">Noveau Categorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="liste_cata.php">Liste Categorie</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach ($categories as $c) { ?>
                        <li><a class="dropdown-item" href="liste_produit.php?categorie_id=<?= $c['id'] ?>"><?= $c['nomcategorie'] ?></a></li>
                        <?php } ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


