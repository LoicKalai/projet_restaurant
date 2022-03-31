<?php

$updateprod = $conn->prepare('INSERT INTO produits (Noms, Description, Prix, Images) VALUES (?, ?, ?, ?, ?)');     
$updateprod->execute(array($nom, $_FILES['imgBO']['name'], $prix, $source));
?>