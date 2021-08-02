<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link REL="SHORTCUT ICON" href="logo_v1_favicon.png">
    <title>nathannicolle.fr 2.0 - accueil</title>
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_accueil.css">
</head>

<body>
    <section>
        <div class="container">
            <h1 id="actu_acc">Les dernières actualités :</h1>
            <div class="cards_actu">
                <div class="card">
					<div class="face face1">
                        <p class="new">NEW</p>
						<div class="content">
							<i class="fab fa-php"></i>
							<i class="fab fa-js"></i>
							<h3>Mise à jour multi langages</h3>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<p class="txt_actu">Cette mise à jour comprend un formulaire, des animations et bien plus !</p>
							<a href="actu_18.php">Voir plus d'infos</a>
						</div>
					</div>
				</div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <i class="fas fa-user-circle"></i>
                            <h3>Profil professionnel</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p class="txt_actu">Mon profil professionnel est enfin disponible
                                et accessible depuis l'accueil</p>
                            <a href="actu_17.php">Voir plus d'infos</a>
                        </div>
                    </div>
                </div>

                <div class="card card2">
                    <div class="face face1">
                        <div class="content">
                            <img src="mycssexperience_logo.png" alt="mycssexperience_logo">
                            <h3>Nouveau site (MyCSSExperience)</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>J'ai créé un nouveau site (MyCSSExperience) qui
                                a servi d'inspiration pour faire la version actuelle
                                du site</p>
                            <a href="actu_15.php">Voir plus d'infos</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="acc_actu_1.php" class="more_actu">Voir plus d'actus</a>
            <h1 id="titre_mes_sites_acc">Mes autres sites :</h1>
            <div id="mes_sites_acc">
                <div id="bannière_site_part1">
                    <div id="banner_content_site1">
                        <h1>My CSS Experience</h1>
                        <a href="My_css_experiences/accueil.html" target="blank">Visiter</a>
                    </div>
                </div>
                <div id="bannière_site_part2">
                    <div id="banner_content_site2">
                        <h1>La création du plastique (sauvonsnotreplanete.org)</h1>
                        <a href="Projet_physique_DD/sauvonsnotreplanete.html" target="blank">Visiter</a>
                    </div>
                </div>
            </div>
            <div id="me_full_content_acc">
                <h1 id="titre_moi_acc">Moi et mes réseaux :</h1>
                <div id="social_network_card">
                    <div class="card_me middle">
                        <div class="front">
                            <img src="me.png" alt="nathan nicolle">
                        </div>
                        <div class="back">
                            <div class="back-content middle">
                                <h2>Nathan NICOLLE</h2>
                                <span>Apprenti intégrateur web<br />et apprenti développeur</span>
                                <div class="sm">
                                    <a href="https://www.instagram.com/nathannicolle2/" target="blank"
                                        title="nathannicolle2">
                                        <i class="fab fa-instagram" alt="logo_insta"></i><b
                                            class="sm_label">Insta</b></a>
                                    <a href="https://discord.com/" target="blank" title="Rayunn #3996">
                                        <i class="fab fa-discord" alt="logo_discord"></i><b
                                            class="sm_label">Discord</b></a>
                                    <a href="https://github.com/Nathannicolle" target="blank" title="Github">
                                        <i class="fab fa-github"></i><b class="sm_label">Github</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="moi_desc">Je suis Nathan Nicolle, créateur et codeur de ce site.</br> Je suis actuellement
                    en 1ère année de BTS SIO. </br> J'ai commencé le développement à l'été 2018 alors que</br> j'allais
                    entrer en 1ère STI2D. Et je</br> développe ce site, car j'ai commencé à apprendre </br> le html à
                    l'aide du super site
                    <a href="https://openclassrooms.com/fr/dashboard" target="blank">Openclassrooms</a> Je voulais donc
                    mettre en pratique mes connaissances ! </br> Et quoi de mieux que de créer son propre </br> site
                    web, pour s'entraîner avant de créer </br> celui des autres ! </br></br>

                    NB : Ce site est "une vitrine" qui me sert</br> à partager mes compétences dans le domaine du
                    développement</br> de site web et d'applications mobile. L'utilité de ce site est donc d'afficher
                    </br>mon savoir faire en matière de développement web, </br>afin de montrer à des futurs clients ou
                    écoles ce dont je suis capable !</br> Ce site permet également de voir mes évolutions vis à vis du
                    </br>code et la programmation web, mobile ou logicielle.
                </p>
            </div>
            <div class='formulaire' id='container_formulaire'>
<div class="banner_acc_form"><h1>Me contacter :</h1></div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form method='post' id="formulaire" class="formulaire" action="#formulaire">
    <label for="firstname">Prénom<sup title="requis">*</sup> :</label>
    <input type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom" required value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; /* code pour garder rempli les champs dans le cas d'un oubli de certains champs par exemple*/ } ?>">
    <label for="name">NOM<sup title="requis">*</sup> :</label>
    <input type="text" name="name" id="name" placeholder="Entrez votre nom" required value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>">
    <label for="email">Email<sup title="requis">*</sup> :</label>
    <input type="email" name="email" id="email" placeholder="Entrez votre adresse email" required value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
    <label for="message">Message<sup title="requis">*</sup> :</label>
    <textarea rows="5" name="message" id="message" placeholder="Entrez votre message" required></textarea>
    <div class="g-recaptcha" data-sitekey="6LfY7N8ZAAAAAOB1Q4ehiM0GPyMWoh1GqoT_ey7y"></div>
    <input type="submit" value="Envoyer" id="envoyer" name="submitpost">
</form>

<?php 
    require ('recaptcha/autoload.php');
    
    if(isset($_POST['submitpost'])){
        if(isset($_POST['g-recaptcha-response'])){
            if(!empty($_POST['g-recaptcha-response'])) {
                $recaptcha = new \ReCaptcha\ReCaptcha('');
                $resp = $recaptcha->verify($_POST['g-recaptcha-response']); //vérification de la réponse renvoyé par le formulaire de captcha
                if ($resp->isSuccess()) { //si la réponse est un succès alors on exécute le code d'envoi du formulaire
                // Verified!
                    if(isset($_POST['email'])) //si le champ email existe
                    {
                        if(!empty($_POST['firstname']) and !empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])) //si les champs sont complétés
                        {   // ----Formats d'encodage----
                            $header ="MIMI-Version 1.0 \r\n";
                            $header .= 'From: "nathannicolle.fr/index" <nathan-nicolle@orange.fr>' . "\n";
                            $header .='Content-Type:text/html; charset="utf-8"'. "\n";
                            $header .='Content-Transfer-Encoding: 8bit';
            
                            // ----Message----
                            $message = '
                            <html>
                                <body>
                                    <ul>Prénom : '.$_POST['firstname']. '</ul>
                                    <ul>NOM : '.$_POST['name']. '</ul>
                                    <ul>adresse mail : '.$_POST['email']. '</ul>
                                    <ul>Message : '.nl2br($_POST['message']). '</ul>
                                </body>
                            </html>';
                            mail("nathan-nicolle@orange.fr", "Mail contact blog", $message, $header); //envoi du mail avec la fonction mail(adresse cible, objet, message et en-tête)
                            $msg="<p class='form_succes'><i class='fas fa-check'></i> Votre message a bien été envoyé !</p>";
                        }else{
                            $msg="<p class='form_error'>Veuillez compléter tout les champs !</p>";
                        }
                    }
                } 
            } else {
                $msg_captcha="<p class='form_error_2'><i class='fas fa-times'></i> merci de valider le captcha</p>";
            }
        }
    }

    if(isset($msg)) {
        echo $msg;
    } //on écrit le message qu'il soit la confirmation d'envoi ou un message d'erreur

    if(isset($msg_captcha)) {
        echo $msg_captcha;
    }
?>
</div>
            <footer class="pied_de_page">
                <div class="footer_lists">
                    <ul class="pages_utiles">
                        <li class="title_list_footer"><b>Pages utiles</b></li>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="partenaires.html">Partenariats</a></li>
                        <li><a href="crédits.html">Crédits</a></li>
                        <li><a href="#">A propos</a></li>
                    </ul>
                    <ul class="contact_footer">
                        <li class="title_list_footer"><b>Mes réseaux</b></li>
                        <li><a href="https://www.instagram.com/nathannicolle2/" target="blank" title="nathannicolle2"><i
                                    class="fab fa-instagram"></i>
                                nathannicolle2 <i class="fas fa-external-link-alt"></i></a></li>
                        <li><a href="https://discord.com/" target="blank" title="Rayunn #3996">
                                <i class="fab fa-discord"></i>
                                Nathan NICOLLE#3996 <i class="fas fa-external-link-alt"></i></a></li>
                        <li><a href="https://github.com/Nathannicolle" target="blank" title="Rayunn1">
                                <i class="fab fa-github"></i>
                                Nathannicolle <i class="fas fa-external-link-alt"></i></a></li>
                        <li>
                            <a href="mailto:assistance@nathannicolle.fr" id="mail" title="adresse d'assistance (L'arobase est remplacé par [at] car cela évite les spams
                            de la boite mail par des bots pour autant le lien est clicable)"><i
                                    class="far fa-envelope"></i>
                                assistance[at]nathannicolle.fr <i class="fas fa-external-link-alt"></i></a>
                        </li>
                    </ul>
                    <ul class="mes_sites_footer">
                        <li class="title_list_footer"><b>Mes sites</b></li>
                        <li><a href="My_css_experiences/accueil.html" target="blank" title="MyCSSExperience">MCE <i
                                    class="fas fa-external-link-alt"></i></a></li>
                        <li><a href="Projet_physique_DD/sauvonsnotreplanete.html" target="blank"
                                title="La création du plastique">LCDP <i class="fas fa-external-link-alt"></i></a></li>
                    </ul>
                </div>
                <label id="copyright"><i class="far fa-copyright"></i> 2021 nathannicolle.fr (V2) - tout droits
                    réservés</label>
                <script src="scripts/script.js" type="text/javascript"></script>
            </footer>
        </div>
    </section>
    <header class="header_accueil">
        <div class="header_principal">
            <a href="index.php"><img src="logo_v1_intermédiaire.png" class="logo" alt="logo_nathannicolle.fr"></a>
            <div class="menu">
                <ul>
                    <li><a href="#"><i class="fas fa-home" alt="logo_home_menu"></i> Accueil</a></li>
                    <li><a href="acc_actu_1.php"><i class="far fa-newspaper" alt="logo_news_menu"></i> Actus</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="actu_18.php">- Mise à jour multi langages</a></li>
                                <li><a href="actu_17.php">- Nouvelle page de profil professionnel</a></li>
                                <li><a href="actu_16.php">- Nouvelle version du site</a></li>
                                <li><a href="actu_15.php">- Màj + nouveau site</a></li>
                                <li><a href="actu_14.php">- Page d'entrée</a></li>
                                <li><a href="actu_13.php">- Nouveau logo</a></li>
                                <li><a href="actu_12.php">- Mise à jour d'après maintenance</a></li>
                                <li><a href="actu_11.php">- Changement de fond</li>
                                <li><a href="actu_10.php">- Nouveau logo</a></li>
                                <li><a href="actu_9.php">- Mise à jour du site création du plastique</a></li>
                                <li><a href="actu_8.php">- Mise à jour paypal</a></li>
                                <li><a href="actu_7.php">- Mise à jour de début 2019</a></li>
                                <li><a href="actu_6.php">- Mise à jour du 07/12/18</a></li>
                                <li><a href="actu_5.php">- Mise à jour du 24/10/18</a></li>
                                <li><a href="actu_4.php">- Mise à jour du 08/10/18</a></li>
                                <li><a href="actu_3.php">- Mise en ligne du site</a></li>
                                <li><a href="actu_2.php">- Début d'apprentissage du php</a></li>
                                <li><a href="actu_1.php">- Lancement de mon projet de site web</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="creations.php"><i class="fas fa-code" alt="logo_code_menu"></i> Créations</a>
                        <div class="sub-menu-2">
                            <ul>
                                <li><a href="creations.php#title_langages">- Langages</a></li>
                                <li><a href="creations.phpl#messites">- Sites web</a></li>
                                <li><a href="creations.php#apps">- Applis</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="about.php"><i class="fas fa-info-circle" alt="logo_info_menu"></i> A propos</a></li>
                </ul>
            </div>
            <div class="titles">
                <h1>Bienvenue sur mon site web</h1>
                <span id="subtitle_acc_temporaire"><br /></span>
                <span id="subtitle_acc"></span>
            </div>
            <div id="btns_acc">
                <div id="btn_voir_plus">
                    Voir plus<br /><br /><i class="fas fa-angle-double-down"
                            alt="flèches_voir_plus"></i>
                </div>
                <div id="btn_space_pro">
                    <a href="profil/index.php"><br />Profil pro <i
                            class="fas fa-angle-double-right"></i><br /><br /></a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>