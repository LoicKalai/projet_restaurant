<?php
include '../connexion.php';

if(isset($_GET['id'])){ //Récupération de l'id de base de donnée produit//

    $prodid=$_GET['id'];
    $req = $conn->prepare('SELECT * FROM produits WHERE id=?');   
    $req->execute(array($prodid));

    if($req->rowCount()>0){
        $supp = $conn->prepare('DELETE FROM produits WHERE id=?');   
        $supp->execute(array($prodid));
        header("Location: index.php");
        exit;
    }





}











?>