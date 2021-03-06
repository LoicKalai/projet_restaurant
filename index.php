<?php

     include './connexion.php';
?>



<!DOCTYPE html>
<html lang="fr">

<head>

    <title>SABOR DEL MUNDO</title>
    <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="./css/anim_titre.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>

<body>


    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section> 




    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"> </span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.php" class="navbar-brand" id="logomundo">SABOR <span class="del">DEL</span> MUNDO</a>

            </div>



            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">

                    <li><a href="#about" class="smoothScroll">?? propos</a></li>
                    <li><a href="#team" class="smoothScroll">Actualit??</a></li>
                    <li><a href="#menu" class="smoothScroll">Menu</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a href="#footer" class="section-btn" id="boutonnav">R??server</a>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->

    <video id="background-video" autoplay loop muted>
        <source src="videoresto.mp4" type="video/mp4">


    </video>


    <h1 class="bienvenue"><span class="typer" id="some-id" data-delay="200" data-delim=":"
            data-words=" Bienvenue!: Bienvenido!: Welcome!: ?????????? ????????????????????!: ?????? ?????? : ?????????? ???????? ??????????"
            data-colors="#ffffff"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Qui sommes-nous ?</h4>
                            <h2>Nous sommes le restaurant du monde.</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Apr??s avoir fait le tour du monde, tout ce qu'on veut c'est ??tre ?? la maison. Et la
                                maison, c'est SABOR DEL MUNDO.</p>
                            <p>Il y a tellement de go??ts et de saveurs dans le monde.
                                L???id??e de voyager dans les diff??rents pays et continents ?? travers
                                les plats est exactement ce qui nous a motiv?? ?? cr??er ce restaurant.
                                Un r??ve de voyage qui s???est transform?? en r??alit??.
                                On sait bien que voyager est co??teux et pas tout le monde ?? la
                                possibilit??e de le faire.
                                C???est pour cela que l???on am??ne le monde entier ?? votre table.
                                Savourez les saveurs du monde entier dans notre restaurant
                                ???Sabor Del Mundo???(Saveurs du monde).
                                Chez nous, vous trouverez les sp??cialit??s Asiatiques,
                                Nord et Sud-Am??ricaines, Africaines,
                                les plats de l???ouest et de l???est de l???Europe.
                                Faites vous plaisir avec nos boissons et desserts exotiques. Bon app??tit!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img class="epice" src="images/epices.jpg.jpg" alt="images d'??pices">
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!---------------------------- MENU---------------------------------------------------->
    <section id="menu" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Notre carte</h2>
                        <h4>des saveurs du monde</h4>
                        <div class="boutonmenu">
                            <div class="place">
                                <button type="button" id="btnentr??" class="btnmenue">ENTR??ES</button>
                                <button type="button" id="btnplat" class="btnmenue">PLATS</button>
                                <button type="button" id="btndessert" class="btnmenue">DESSERTS</button>
                                <button type="button" id="btnboiss" class="btnmenue">BOISSONS</button>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="plat">
                    <!----------------------Cat??gorie Plat------------------------------>
                    <?php
                         $recupProduit = $conn->query("SELECT produits.Nom, produits.Description, produits.Prix, produits.Images, categorie_plat.Type FROM produits INNER JOIN categorie_plat ON produits.id_categorie = categorie_plat.id WHERE produits.id_categorie = 3 ");                                      
                         while ($affichage= $recupProduit->fetch())                   
                         {
                    ?>


                    <div class="col-md-4 col-sm-6">
                        <!-- MENU THUMB -->
                        <div class="menu-thumb">
                            <a href="<?= $affichage["Images"]; ?>" class="image-popup"
                                title="<?= $affichage["Nom"]; ?>">
                                <img src="<?= $affichage["Images"]; ?>" class="img-responsive"
                                    alt="<?= $affichage["Nom"]; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3> <?= $affichage["Nom"]; ?></h3>
                                        <p><?= $affichage["Description"]; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span> <?= $affichage["Prix"]; ?>???</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                         } 
                         ?>


                </div>
                <!--------------------------Fin des plat---------------------------------------->

                <div class="entree">
                    <!-----------------------Cat??gorie entr??e------------------------->


                    <?php
                    $recupProduit = $conn->query("SELECT produits.Nom, produits.Description, produits.Prix, produits.Images, categorie_plat.Type FROM produits INNER JOIN categorie_plat ON produits.id_categorie = categorie_plat.id WHERE produits.id_categorie = 1 ");                                      
                    while ($affichage= $recupProduit->fetch())                   
                    {
               ?>

                    <div class="col-md-4 col-sm-6">
                        <!-- MENU THUMB -->
                        <div class="menu-thumb">
                            <a href="<?= $affichage["Images"]; ?>" class="image-popup"
                                title="<?= $affichage["Nom"]; ?>">
                                <img src="<?= $affichage["Images"]; ?>" class="img-responsive"
                                    alt="<?= $affichage["Nom"]; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3> <?= $affichage["Nom"]; ?></h3>
                                        <p><?= $affichage["Description"]; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span> <?= $affichage["Prix"]; ?>???</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                         } 
                         ?>

                </div>
                <!-----------------------------Fin des entr??e------------------------------>

                <div class="dessert">
                    <!-----------------------Cat??gorie Dessert------------------------->
                    <?php
                    $recupProduit = $conn->query("SELECT produits.Nom, produits.Description, produits.Prix, produits.Images, categorie_plat.Type FROM produits INNER JOIN categorie_plat ON produits.id_categorie = categorie_plat.id WHERE produits.id_categorie = 2 ");                                      
                    while ($affichage= $recupProduit->fetch())                   
                    {
               ?>

                    <div class="col-md-4 col-sm-6">
                        <!-- MENU THUMB -->
                        <div class="menu-thumb">
                            <a href="<?= $affichage["Images"]; ?>" class="image-popup"
                                title="<?= $affichage["Nom"]; ?>">
                                <img src="<?= $affichage["Images"]; ?>" class="img-responsive"
                                    alt="<?= $affichage["Nom"]; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3> <?= $affichage["Nom"]; ?></h3>
                                        <p><?= $affichage["Description"]; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span> <?= $affichage["Prix"]; ?>???</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                         } 
                         ?>



                </div>
                <!-----------------------Fin cat??gorie Dessert------------------------->
                <!----------------------Cat??gorie Boisson-------------------------------->
                <div class="boisson">
                    <?php
                    $recupProduit = $conn->query("SELECT produits.Nom, produits.Description, produits.Prix, produits.Images, categorie_plat.Type FROM produits INNER JOIN categorie_plat ON produits.id_categorie = categorie_plat.id WHERE produits.id_categorie = 4 ");                                      
                    while ($affichage= $recupProduit->fetch())                   
                    {
               ?>

                    <div class="col-md-4 col-sm-6">
                        <!-- MENU THUMB -->
                        <div class="menu-thumb">
                            <a href="<?= $affichage["Images"]; ?>" class="image-popup"
                                title="<?= $affichage["Nom"]; ?>">
                                <img src="<?= $affichage["Images"]; ?>" class="img-responsive"
                                    alt="<?= $affichage["Nom"]; ?>">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3> <?= $affichage["Nom"]; ?></h3>
                                        <p><?= $affichage["Description"]; ?></p>
                                    </div>
                                    <div class="menu-price">
                                        <span> <?= $affichage["Prix"]; ?>???</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php
                              } 
                              ?>




                </div>

                <!------------------Fin de cat??gorie boisson-------------------------------------->
            </div>
        </div>

    </section>
    <!----------------------------Fin du Menu----------------------------------------->

    <!-- ACTU -->
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Actualit??s</h2>
                        <h4>Nos plats phares du moment</h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="images/Plat/plat_lib/solyanka_lib.jpg" class="img-responsive" alt="Soupe Solyanka">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Cette d??licieuse soupe russe avec de la viande et du citron est tr??s c??l??bre en ce
                                    moment.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>La soupe solyanka</h3>
                        <p>C'est la soupe du moment.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/Plat/plat_lib/canard_orange_lib.jpg" class="img-responsive"
                            alt="canard ?? l'orange cuisin??">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Ce plat ?? su conqu??rir les papilles des clients de par sa singularit??.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Canard ?? l'orange</h3>
                        <p>Un succ??s fruit??</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/Plat/plat_lib/poulet_curry_lib.jpg" class="img-responsive"
                            alt="Poulet curry cuisin??">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Cette sp??cialit?? met tr??s souvent tout le monde d'accord, c'est l'une des r??f??rences
                                    gustatives.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Poulet curry coco</h3>
                        <p>Le riz que tout le monde aime</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- TESTIMONIAL -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Les avis</h2>
                    </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Un restaurant magnifique avec des plats aussi vari??s que d??licieux. 21/20.</p>
                            <div class="tst-author">
                                <h4>James Cabr??n</h4>
                                <span>Restauran??i?? Breakfast</span>
                            </div>
                        </div>


                        <div class="item">
                            <p>Mes papilles ont voyag?? ?? travers le monde ! Les saveurs sont au rendez-vous, je
                                recommande ?? 100%. 22/20.</p>
                            <div class="tst-author">
                                <h4>Paul Petrouchki</h4>
                                <span>Le Privi??te</span>
                            </div>
                        </div>

                        <div class="item">
                            <p>De tous les resto que j'ai fait, on peut dire que celui-ci les ??limine tous r??unis !
                                Bravo ! 777/20.</p>
                            <div class="tst-author">
                                <h4>Rose Responsive</h4>
                                <span>Ari Ga-Town</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <!-- Titre du formulaire -->
                            <h2>Contactez-Nous</h2>
                        </div>
                    </div>

                    <!-- Formulaire de contact -->
                    <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form"
                        data-wow-delay="0.8s">

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-nom" name="nom" placeholder="Nom">
                            <!-- Message d'erreur s'affichant en JS -->
                            <p class="errornom">Veuillez entrer un nom correct</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-prenom" name="prenom" placeholder="Pr??nom">
                            <!-- Message d'erreur s'affichant en JS -->
                            <p class="errorprenom">Veuillez entrer un pr??nom correct</p>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="email" class="form-control" id="cf-mail" name="mail"
                                placeholder="Adresse mail">
                            <!-- Message d'erreur s'affichant en JS -->
                            <p class="errormail">Saisissez un mail valide</p>

                            <textarea class="form-control" rows="6" id="cf-message" name="message"
                                placeholder="??crivez-nous"></textarea>
                            <!-- Message d'erreur s'affichant en JS -->
                            <!-- Message de validation s'affichant en JS -->
                            <p class="errormess">??crivez un message correct</p>
                            <p class="validmess">Votre message a bien ??t?? envoy?? !</p>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                <!-- ----------------------------------MAPS----------------------------------------->
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.8629412544615!2d6.007418215519094!3d47.258383319960934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d62fbecacc221%3A0x1b6fa8bdd3c83d0f!2s101%20Rue%20de%20Vesoul%2C%2025000%20Besan%C3%A7on!5e0!3m2!1sfr!2sfr!4v1647437685545!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->

    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Si??ge social</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>808 Rue du Pesto</p>
                            <p>25000 Vesontio</p>
                            <p>France, Plan??te Terre</p>
                        </address>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">R??servation</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>06 09 06 09 06</p>
                            <p><a href="mailto:sabordelmundo@gmail.com">deliciosabordelmundo@gmail.com</a></p>
                            <p>SDM Corporation</p>
                        </address>
                    </div>
                </div>


                <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Nos horaires</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p><strong>Lundi</strong> Ferm??</p>
                            <div>
                                <strong>Mardi ?? Vendredi</strong>
                                <p>09:00 - 20:00</p>
                            </div>
                            <div>
                                <strong>Samedi - Dimanche</strong>
                                <p>11:00h - 22:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p>Copyright &copy; 2022</p>
                        <p>Lo??c KALAIDJOGLOU</p>
                        <p>Moustapha KAMMOUN</p>
                        <p>Artem KHLIEBNIKOV</p>
                        <p>Design: TemplateMo</p>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/change.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="./js/anim_titre.js"></script>
</body>

</html>