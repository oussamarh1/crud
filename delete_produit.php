<?php
include "fonction.php";
$id = $_GET['id'];
supprimer($id, "produit");
header("location:liste_produit.php");
