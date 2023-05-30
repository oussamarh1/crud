<?php
include "fonction.php";
$categories = all("categorie")

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php include("_css.php"); ?>

    <title>Document</title>
</head>

<body>


    <?php include("_menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 border mx-auto mt-5 p-3 shadow">
                <h5 class="text-center mb-2 text-danger">Ajouter Produit: </h5 class="text-center mb-2 text-danger">
                <form action="store_produit.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label for="libelle" class="form-label"> Libelle : </label>
                        <input class="form-control" type="text" name="libelle" id="libelle">
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label"> Prix : </label>
                        <input class="form-control" type="text" name="prix" id="prix">
                    </div>
                    <div class="mb-3">
                        <label for="qte" class="form-label"> qte : </label>
                        <input class="form-control" type="text" name="qte" id="qte">
                    </div>
                    <div class="mb-3">
                        <label for="qte" class="form-label"> Categorie : </label>
                        <select class="form-control" type="text" name="categorie_id" id="categorie_id">
                            <?php foreach ($categories as $c) { ?>
                                <option value="<?= $c['id'] ?>"><?= $c['nomcategorie'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>