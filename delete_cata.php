<?php
include "fonction.php";
$id = $_GET['id'];
if (YatilProduitDansCategorie($id)) {
    header("location:liste_cata.php?e=err");
    exit();
} else {
    supprimer($id, "categorie");
    header("location:liste_cata.php?m=yap");
}
