<?php
include "fonction.php";
$id = $_GET['id'];
$categorie = findById($id, "categorie");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-6 border mx-auto mt-5 p-3 shadow">
                <h5 class="text-center mb-2 text-danger">Ajouter Produit: </h5 class="text-center mb-2 text-danger">
                <form action="update_cata.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="" value="<?= $categorie['id'] ?>">

                    <div class="mb-3">

                        <label for="nomcategorie" class="form-label"> Nom : </label> <input class="form-control" type="text" name="nomcategorie" id="nomcategorie" value="<?= $categorie['nomcategorie'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>