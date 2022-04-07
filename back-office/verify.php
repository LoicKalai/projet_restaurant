<?php

include './password.php';
$entrees = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 1";
$desserts = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 2";
$plats = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 3";
$boissons = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 4";

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);




if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['description'])){
    $description = $_POST['description'];
}
if(isset($_POST['price'])){
    $price = $_POST['price'];
}
if(isset($_FILES['image'])){
    $image = $_FILES['image'];
}
if(isset($_POST['id_category'])){
    $id_category = $_POST['id_category'];
}

if(($name)&&($description)&&($price)){
    $res = array('validation' => "Plat ajouté");
    echo json_encode($res);
    $updateprod = $conn->prepare('INSERT INTO produits (Nom, Description, Prix, Images, id_categorie) VALUES (?, ?, ?, ?, ?)');     
    $updateprod->execute(array($name, $description, $price, $image['name'], $id_category));
}

$dbh = new PDO('mysql:host=localhost; dbname=produits', $username, $password)

$stmt = $dbh->prepare('INSERT INTO produits (Nom, Description, Prix, Images, id_categorie) VALUES (:Nom, :Description, :Prix, :Images, :id_categorie)');
$stmt->bindParam(':Nom', $name, ':Description', $description, ':Prix', $price, ':Images', $image, ':id_categorie', $id_category);

$stmt->execute();

echo json_encode($_POST);

if($stmt === false){
    die("Erreur");
}
}catch (PDOException $e){
  	die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>
