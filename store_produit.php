<?php
include "fonction.php";
extract($_POST);

ajouter_produit($libelle, $prix, $qte);
//header("location:liste_produit.php");
