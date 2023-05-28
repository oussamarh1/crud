<?php
include "fonction.php";
extract($_POST);
ajouter_categorie($nomcategorie);
header("location:liste_cata.php");
