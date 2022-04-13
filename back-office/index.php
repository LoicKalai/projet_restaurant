<?php
include '../connexion.php';

$entrees = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 1";
$desserts = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 2";
$plats = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 3";
$boissons = "SELECT Nom,Prix,Images FROM produits INNER JOIN categorie_plat WHERE id_categorie = categorie_plat.id AND id_categorie = 4";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/dae690c13b.js" crossorigin="anonymous"></script></script>
</head>
<body>
<header id="header">
        <div id="logo"><p><span id="span">Sabor</span><span>del Mundo</span></p></div>
        <div id="searchdiv"><input type="search" id="searchbar"><button id="searchbutton"><img src="../back-office/assets/search.svg" alt=""></button></div></div>
        <div id="connect"><img id="usericon" src="../back-office/assets/user.svg" alt="icone d'une personne">mr. Johnson</div>
    </header>    
<main>
    <div id="mainmenu">
        <div id="choix">
            <div id="line">
                <div id="entr"><h3>Entrees</h3><img class="choice" src="../back-office/assets/undraw_breakfast_psiw.svg" alt=""></div>
                <div id="bois"><h3>Boissons</h3><img class="choice" src="../back-office/assets/undraw_hot_beverage_-2-vw3.svg" alt=""></div>
                <div id="plat"><h3>Plats</h3><img class="choice" src="../back-office/assets/undraw_hamburger_-8-ge6.svg" alt=""></div>
                <div id="dess"><h3>Desserts</h3><img class="choice" src="../back-office/assets/undraw_cookie_love_ulvn.svg" alt=""></div>
            </div>
        </div>    
        <div id="rightpart" class="boxEntree">
            <div class="thing" id="add"><img id="circle" src="../back-office/assets/akar-icons_circle-plus.svg" alt=""><button class="butt">Ajouter</button></div>
            <?php $stmt = $conn->query($entrees); ?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div id="encircle">
                    <div class="things">
                        <h2><?php echo htmlspecialchars($row['Nom']); ?></h2>
                        <img class="image" src="<?php echo htmlspecialchars($row['Images']); ?>" alt="plat n1">
                    </div>
                    <div id="divbelow">
                        <button id="modifydelete">Modifier</button>
                        <button id="modifydelete">Supprimer</button>
                    </div>
                </div>
   	  	    <?php endwhile; ?>
        </div>
        <div id="rightpart" class="boxBoissons" >
            <div class="thing" id="add"><img id="circle" src="../back-office/assets/akar-icons_circle-plus.svg" alt=""><button class="butt">Ajouter</button></div>
            <?php $stmt = $conn->query($boissons); ?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div id="encircle">
                    <div class="things">
                        <h2><?php echo htmlspecialchars($row['Nom']); ?></h2>
                        <img class="image" src="<?php echo htmlspecialchars($row['Images']); ?>" alt="plat n1">
                    </div>
                    <div id="divbelow">
                        <button id="modifydelete">Modifier</button>
                        <button id="modifydelete">Supprimer</button>
                    </div>
                </div>
   	  	    <?php endwhile; ?>
        </div>
        <div id="rightpart" class="boxPlats">
            <div class="thing" id="add"><img id="circle" src="../back-office/assets/akar-icons_circle-plus.svg" alt=""><button class="butt">Ajouter</button></div>
            <?php $stmt = $conn->query($plats); ?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div id="encircle">
                    <div class="things">
                        <h2><?php echo htmlspecialchars($row['Nom']); ?></h2>
                        <img class="image" src="<?php echo htmlspecialchars($row['Images']); ?>" alt="plat n1">
                    </div>
                    <div id="divbelow">
                        <button id="modifydelete">Modifier</button>
                        <button id="modifydelete">Supprimer</button>
                    </div>
                </div>
   	  	    <?php endwhile; ?>
        </div>
        <div id="rightpart" class="boxDesserts">
            <div class="thing" id="add"><img id="circle" src="../back-office/assets/akar-icons_circle-plus.svg" alt=""><button class="butt">Ajouter</button></div>
            <?php $stmt = $conn->query($desserts); ?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div id="encircle">
                    <div class="things">
                        <h2><?php echo htmlspecialchars($row['Nom']); ?></h2>
                        <img class="image" src="<?php echo htmlspecialchars($row['Images']); ?>" alt="plat n1">
                    </div>
                    <div id="divbelow">
                        <button id="modifydelete">Modifier</button>
                        <button id="modifydelete">Supprimer</button>
                    </div>
                </div>
   	  	    <?php endwhile; ?>
        </div>
    </div>

    <form id="form"  method="POST" action="ajout.php">

        <div class="bloc_croix">
        <img src="assets/cross.svg" class="croix" alt="croix de fermeture"> <!--CROIX FERMETURE FORM-->
        </div>
        
        <p class="popp">Nom</p>
        <input type="text" name="name" class="descpop" id="name">
        <span id="errormessage1"></span>

        <p class="popp">Description</p>
        <input type="text" name="description" class="descpop" id="description">
        <span id="errormessage2"></span>

        <p class="popp">Prix</p>
        <input type="text" name="price" class="descpop" id="price">
        <span id="errormessage3"></span>

        <p class="popp">Images</p>
        <input type="url" name="image" class="descpop" id="image">
        <span id="errormessage4"></span>

        <p class="popp">Id_categorie</p>
        <input type="number" name="id_category" class="descpop" id="id_category">
        <span id="errormessage5"></span>
        
        <button type="submit" id="validate">Valider</button>
    </form>


    </div>
</main>
<div id="done"><button id="ok">Ok</button></div>


<script src="script.js"></script>
<!-- <script src="ajout.js"></script> -->
  
</body>
</html>

<?php

if($stmt === false){
    die("Erreur");
}


?>