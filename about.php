<?php
		include "structure/header.html";
?>
		<div id="banner_about" class="banner_pages">
			<h1>à propos</h1>
		</div>
		<h2 id="title_about_links"><a href="#Remerciments">Remerciements</a> | <a href="#mecontacter">Me contacter</a> |
			<a href="#mesreseaux">Mes réseaux</a></h2>
		<h1 id="Remerciments">Remerciements :</h1>
		<p class="p_about">
			<b>
				Merci à :<br />
				<a href="https://openclassrooms.com/fr/" target="blank" id="link_oc"><b>Openclassrooms</b></a><br />
				C'est un super site ! Et comme je l'ai dit
				dans l'article sur le lancement de ce site web c'est le site
				qui m'a permis de me former au HTML5 et au CSS3 !<br />
				Merci à : <br /> <a href="https://dyjix.eu/" target="blank">Dyjix.eu</a>
				pour l'hébergement de mon site<br />
				Merci aussi à :<br /> <a href="https://www.ovh.com/fr/">ovh cloud</a> pour
				le nom de domaine<br />
				Merci également à :<br /> Ma famille et à ceux qui m'ont soutenu
				pour ce projet !<br />Merci à ceux qui me soutiennent pour
				mon projet d'avenir, Merci à ceux qui me soutiendront pour
				mes projets futurs<br />
				Merci à : <br /> Sébastien HUITOREL pour son aide et ses conseils !<br />
				Merci à : <br /><a href="https://www.instagram.com/_titartist_/" target="blank">@_titartist_</a> pour
				le nouveau logo (ancien ! :-D => <a href="NN_LOGO_3.jpg" target="blank">ici</a>
				<=) du site ! <br />Et pour finir Merci à :<br />VOUS pour
				votre visite sur mon site !
			</b>
		</p>
		<div class='formulaire' id='container_formulaire'>
<div class="banner_acc_form"><h1 id="mecontacter">Me contacter :</h1></div>
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
                $recaptcha = new \ReCaptcha\ReCaptcha('6LfY7N8ZAAAAAHkzEkgzKioHTDgdU-XGUH6FrVLn');
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
		<h1>Il est également possible de me contacter par le biais de ces adresses :</h1>
		<p class="p_about">
			Pour tout problème avec mes sites ou applis vous pouvez me contacter par mail à l'adresse suivante (adresse
			avec mail automatique de réponse, le delai de réponse est de maximum 48 heures (souvent moins de 24h))
			:<br />
			<b><a href="mailto:assistance@nathannicolle.fr" class="mail" title="adresse d'assistance (L'arobase est remplacé par [at] car cela évite les spams
					de la boite mail par des bots pour autant le lien est clicable)">
					assistance[at]nathannicolle.fr </a></b>(adresse uniquement d'assistance)
			<br />
			Pour faire une suggestion ou une remarque ou pour me contacter sur des sujets "pro" (tant qu'elle est
			constructive ! Donc pas de haine !) vous pouvez me contacter par mail à l'adresse suivante (Le delai de
			réponse est de maximum 48 heures (souvent moins de 24h)) :<br />
			<b><a href="mailto:contact@nathannicolle.fr" class="mail" title="adresse de suggestion ou de contact pro (L'arobase est remplacé par [at] car cela évite les spams
					de la boite mail par des bots pour autant le lien est clicable)">
					contact[at]nathannicolle.fr </a><br /></b>
			<b>Vous pouvez également me contacter par le biais des messages
				privés des réseaux sociaux présents ci-dessous dans la partie "Mes Réseaux"<br></b>
		</p>
		<h1 id="mesreseaux">Mes réseaux :</h1>
		<h2>Les réseaux sociaux que j'utilise sont les suivants :</h2>
		<a href="https://www.instagram.com/nathannicolle2/" class="links_sm_about" title="@nathannicolle2"
			target="blank"><i class="fab fa-instagram"></i><br /> Instagram</a>
		<p class="p_general">@nathannicolle2<br />
			Je suis très réactif sur instagram en cas de messages privés<br />
			je poste également les avancés du site donc pour connaître
			l'avancée des mises à jour et mes actualités comme pour les
			maitenances du ou des sites</p>
		<a href="https://discord.com/new" class="links_sm_about" title="Rayunn#3996" target="blank"><i
				class="fab fa-discord"></i><br /> Discord</a>
		<p class="p_general">
			Nathan NICOLLE#3996<br />
			Je réponds aux message privés sur discord vous pouvez m'y
			contacter
		</p>
		<a href="https://github.com/Nathannicolle" class="links_sm_about" title="@Rayunn1" target="blank"><i
				class="fab fa-github"></i> Nathannicolle</a>
		<p class="p_general">
			J'ai créé un dépôt github afin que celui qui souhaite voir comment est organisé mon site
			en ai la possibilité !
		</p>
	<?php
		include "structure/footer.html";
	?>