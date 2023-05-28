<?php
include "fonction.php";
extract($_POST);
modifier_categorie($nomcategorie, $id);
header("location:liste_cata.php");
