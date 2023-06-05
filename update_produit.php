<?php
include "fonction.php";

extract($_POST);
modifier_produit($libelle, $prix, $qte, $categorie_id, $id);
header("location:liste_produit.php");
