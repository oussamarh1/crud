<?php
include "fonction.php";
extract($_POST);

ajouter_produit($libelle, $prix, $qte, $categorie_id);
header("location:liste_produit.php");
