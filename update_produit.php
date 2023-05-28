<?php 
include "fonction.php";

extract($_POST);
modifier_produit($libelle,$prix,$qte,$id);
header("location:liste_produit.php");
