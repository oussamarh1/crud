<?php

include "config.php";
//connextion bd

function connecter_db()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=' . DB, USER, PWD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        return $dbh;
    } catch (PDOException  $e) {

        echo "Erreur de connexion a la base de donnees " . $e->getMessage();
    }
}


//ajouter un produit
function ajouter_produit($libelle, $prix, $qte, $categorie_id = 1)
{
    try {
        //connextion
        $cnx = connecter_db();
        //preparation la requete
        $rp = $cnx->prepare("insert into produit (libelle,prix,qte,categorie_id) values(?,?,?,?)");
        //execute la requete
        $rp->execute([$libelle, $prix, $qte, $nomcategorie = 1]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de produit  " . $e->getMessage();
    }
}
// modifier une produit 

function modifier_produit($libelle, $prix, $qte, $id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update produit set libelle=?,prix=?,qte=? where id =?");
        $rp->execute([$libelle, $prix, $qte, $id]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de produit  " . $e->getMessage();
    }
}
//ajouter un categorie
function ajouter_categorie($nomcategorie)
{
    try {
        //connextion
        $cnx = connecter_db();
        //preparation la requete
        $rp = $cnx->prepare("insert into categorie (nomcategorie) values(?)");
        //execute la requete
        $rp->execute([$nomcategorie]);
    } catch (PDOException  $e) {
        echo "Erreur d'ajout de categorie  " . $e->getMessage();
    }
}
// modifier une categorie 

function modifier_categorie($nomcategorie, $id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update categorie set nomcategorie=? where id =?");
        $rp->execute([$nomcategorie, $id]);
    } catch (PDOException  $e) {
        echo "Erreur de modifier de categorie  " . $e->getMessage();
    }
}
//supprimer(1,"produit")
function supprimer($id, $table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("delete from $table where id =?");
        $rp->execute([$id]);
    } catch (PDOException  $e) {
        echo "Erreur de suppression de produit  " . $e->getMessage();
    }
}



// lister les produits 
function all($table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
function findById($id, $table)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from $table where id=? ");
        $rp->execute([$id]);

        return $rp->fetch();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
// lister les produits 
function YatilProduitDansCategorie($categorie_id) //(id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where categorie_id=? ");
        $rp->execute([$categorie_id]); //(id)

        $resultat = $rp->fetchAll();
        return !empty($resultat);
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
// lister les produits 
function ProuitEtCategorie()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select p.*,c.nomcategorie from produit p join categorie c on c.id=p.categorie_id ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
function ProuitEtCategorieParCategorieId($categorie_id) //(id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select p.*,c.nomcategorie from produit p join categorie c on c.id=p.categorie_id where c.id=?");
        $rp->execute([$categorie_id]); //(id)

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
//rechercher un produit par son libelle 
function rechercher($mc)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select * from produit where nom like ? ");
        $rp->execute(["%$mc%"]);

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de recherche de personne  " . $e->getMessage();
    }
}
function test()
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("select p.*,c.nomcategorie from produit p join categorie c on c.id=p.categorie_id where c.id=? ");
        $rp->execute();

        return $rp->fetchAll();
    } catch (PDOException  $e) {
        echo "Erreur de selection de produit  " . $e->getMessage();
    }
}
