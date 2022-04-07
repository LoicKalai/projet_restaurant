

<!--------------------- PAGE HTML----------------------->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Back-office</title>

</head>
<body>

    <h1>Back-Office Restaurant</h1>
    <h1>Ajouter</h1>

    <form name="ajt" method="POST">
        <div class="contenue">
            <div class="inp">


                <p>Numéro Catégorie</p>
                <input type="number" name="id_categorie">

                <p>Nom</p>
                <input name="nom" type="text">

                <p>Description</p>
                <input type="text" name="descr">

                <p>Prix</p>
                <input type="text" name="prix">

                <p>Image</p>
                <input type="url" name="image">

                         
            </div>
            <button type="submit" class="btn" name="bouton">+</button>  
        </div>
</form>
  
    
<script src="script.js"></script>
</body>
</html>

<!-------------------------- Fin Page HTML---------------------->

