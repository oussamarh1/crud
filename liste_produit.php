<?php
require_once "fonction.php";

if (isset($_GET['categorie_id'])) {
    $produits = ProuitEtCategorieParCategorieId($_GET['categorie_id']);
} else {
    $produits = ProuitEtCategorie();
}
//print_r($produit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>liste des produits </title>

</head>

<body>
    <?php include("_menu.php"); ?>


    <div class="container">
        <h5 class="text-center text-warning my-5">Liste des produit </h5>
        <div>
            <form action="liste.php" method="get">
                Mot clé : <input type="text" name="mc" id=""> <button>Ok</button>
            </form>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>libelle</th>
                    <th>prix</th>
                    <th>qte</th>
                    <th>Categorie</th>


                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($produits as $p) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['libelle'] ?></td>
                        <td><?= $p['prix'] ?></td>
                        <td><?= $p['qte'] ?></td>
                        <td><?= $p['nomcategorie'] ?></td>



                        <td>
                            <a class="btn btn-danger btn-sm" href="delete_produit.php?id=<?= $p['id'] ?>" onclick="return confirm('Supprimer?')">Supprimer</a>
                            <a class="btn btn-warning btn-sm" href="edit_produit.php?id=<?= $p['id'] ?>">Editer</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>