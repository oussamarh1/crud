<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("_css.php"); ?>
    <title>Document</title>
</head>

<body>

    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 border mx-auto mt-5 p-3 shadow">
                <h5 class="text-center mb-2 text-danger">Ajouter Produit: </h5 class="text-center mb-2 text-danger">
                <form action="store_cata.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label for="nomcategorie" class="form-label"> Nom : </label> <input class="form-control" type="text" name="nomcategorie" id="nomcategorie">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>




            <?php include("_js.php"); ?>
</body>

</html>