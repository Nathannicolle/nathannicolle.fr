<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form method='post' id="formulaire" action="#formulaire">
    <div id="name_items">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom" required value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; /* code pour garder rempli les champs dans le cas d'un oubli de certains champs par exemple*/ } ?>">
        <label for="name">NOM :</label>
        <input type="text" name="name" id="name" placeholder="Entrez votre nom" required value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>">
    </div>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" placeholder="Entrez votre adresse email" required value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
    <label for="message">Message :</label>
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