
<?php


include '../connexion.php';


$erreur = array();

    $nom = $_POST['nom'];
    $description = $_POST['descr'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];
    $id_categorie = $_POST['id_categorie'];

    $req = $conn->prepare('INSERT INTO produits(Nom, Description, Prix, Images, id_categorie) VALUES (?, ?, ?, ?, ?)');   
    $req->execute(array($nom, $description, $prix, $image, $id_categorie));
    
///////////////////VERIFICATION CHAMPS/////////////////////////////////////

if (($_POST)){

    //Verif Nom//
    if(empty($nom)&& isset($nom)){
        $erreur["nom"] = 'Champs obligatoire';
    }
    else if(!preg_match('/^[a-zA-Z]+$/', $nom)){
        $erreur["nom"] = 'Entrez un nom de produit';
    }

    // Verif Description//
    if(empty($description)&& isset($description)){
        $erreur["descr"] = 'Entrez une description du produit';
    }

    //Verif Prix//
    if(empty($prix)&& isset($prix)){
        $erreur["prix"] = 'Entrez un prix du produit';
    }
    else if(!preg_match('/^[0-9]/', $prix)){
        $erreur["prix"] = 'Insérez que des nombres';
    }
    // Verif Image//

    if(empty($image)&& isset($image)){
        $erreur["prix"] = 'Entrez un URL d\'image';
    }
}


echo json_encode($erreur);
?>