<?php
include "fonction.php";
$id = $_GET['id'];
supprimer($id, "categorie");
header("location:liste_cata.php");
