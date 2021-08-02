<?php
		include "structure/header.html";
?>
		<div id="banner_creations" class="banner_pages">
			<h1>Mes créations</h1>
		</div>
		<h2 id="title_creations_links"><a href="#title_langages">Langages</a> |
			<a href="#messites">Mes sites</a> | <a href="#apps">Mes applications</a></h2>
		<h1 id="title_langages">Les langages que j'utilise :</h1>
		<div id="langages">
			<h1>Les langages que je connais :</h1>
			<h3><b>Pour en savoir plus sur quant à mon "niveau" concernant les différents langages rendez-vous : <a href="profil/index.php#competences"> ici </a></b>
			</h3>
			<h2><a href="#html">HTML5 et CSS3</a> | <a href="#js">JavaScript</a> | <a href="#jquery">jQuery</a> |  <a href="#php">PHP</a> | <a href="#mysql">MySQL, SQL et MariaDB</a> | <a href="#python">Python</a> | <a href="#c_arduino">C++
					(arduino)</a></h2>
			<div id="html">
				<a href="html5etCSS3.png" target="blank"><img src="html5etCSS3.png" class="img" /></a>
				<p>- Le html5 (HyperText Markup Language) est un langage dit de balisage ou d'intégration utilisé dans
					le web, c'est la base même d'une page web, la grande majorité des sites web est basé dessus
					(celui-ci inclu !) <br />Sources : <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language"
						target="blank">Wikipedia</a> (et mes connaissances)<br />

					<br />- Le CSS (Cascading Style Sheets) quant à lui sert à décrire le style d'une page comme la
					couleur de fond, la police ou encore la taille d'un cadre comme celui contenant ce texte, comme le
					html5 il est quasi (voir totalement à ma connaissance) systématiquement utilisé pour les pages web
					<br />Sources : <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade"
						target="blank">Wikipedia</a> (et mes connaissances) <br />
					<br /><b> > Le HTML5 et Le CSS3 sont des langages dits <u>front-end</u>. Le front-end
						sert à coder ou programmer la partie "visible" d'un site web comme la position d'un élément ou
						son style. On dit que le front-end correspond à l'aspect client d'un site web ou d'une
						application web.<br /></b>
			</div>

			<div id="js">
				<a href="logo_javascript.png" target="blank"><img src="logo_javascript.png" class="img" /></a>
				<p>
					JavaScript est un langage de programmation de scripts qui permet de jouer sur le DOM (Document Object Model).
					Le DOM est la représentation sous forme d'objet des éléments html d'une page web. Ainsi il est possible de 
					modifier la structure d'une page avec JavaScript. Le langage peut permettre également de modifier le style d'une
					page. Il est donc beaucoup utilisé pour créer des animations (même les plus petites auxquelles la plus part des utilisateurs
					ne prêterai pas forcément attention) par exemple au clic sur un élément de la page. Sur ce site le JavaScript est par exemple utilisé pour faire en sorte que lorsque l'on fait défiler (scroll) la
					page le menu vient se fixer en haut de l'écran et ce seulement à partir d'un certain pourcentage de défillement sur la
					site.
					<br /> <br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/JavaScript" target="blank">Wikipédia</a> (Javascript)<br />
					- <a href="https://developer.mozilla.org/fr/docs/Learn/JavaScript/First_steps/What_is_JavaScript" target="blank">MDN (Mozilla Developper Network) (Javascript)</a> (Javascript)<br />
					- Mes connaissances
				</p>
				<b> > Le javascript est un langage dit <u>front-end</u>. Le front-end
						sert à coder ou programmer la partie "visible" d'un site web comme la position d'un élément ou
						son style. On dit que le front-end correspond à l'aspect client d'un site web ou d'une
						application web.<br /></b>
			</div>

			<div id="jquery">
				<a href="Jquery-logo.png" target="blank"><img src="Jquery-logo.png" class="img" /></a>
				<p>
				jQuery est une bibliothèque JavaScript libre et multiplateforme créée pour faciliter l'écriture de scripts Javascript côté client.
				Les syntaxes sont donc simplifiées par rapport au Javascript dit "Vanilla" (qui correspond au JavaScript "pur").
					<br /> <br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/JQuery" target="blank">Wikipédia</a> (jQuery)<br />
					- Mes connaissances
				</p>
			</div>

			<div id="php">
				<a href="phplogo_mini.png" target="blank"><img src="phplogo_mini.png" class="img" /></a>
				<p>
					Le PHP (Hypertext Preprocessor) est un langage de programmation libre, principalement utilisé pour
					produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme
					n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. C'est
					un langage dit dynamique, utilisé dans le web, il sert par exemple à créer des formulaires
					communiquant avec un serveur, envoyant ainsi les données sur celui-ci. Il est utilisé dans beaucoup
					de pages web connues comme Facebook etc. Il commence d'ailleurs à être utilisé sur ce site pour faire le
					traitement des informations récupérées par le formulaires et pour me permettre d'éviter la répétition 
					du menu à chaque page (c.f l'article sur la dernière mise à jour pour plus de détails sur cette partie).
					C'est également le langage principalement utilisé pour la page web de mon profil professionnel<br /> <br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/PHP" target="blank">Wikipédia</a> (PHP)<br />
					- Mes connaissances
				</p>
				<b>  > Le PHP est un langages dit <u>back-end</u>. Le back-end
						correspond à la partie "cachée" du site web, c'est la partie serveur d'un site, c'est ce qui rend un site dynamique  
						par le biais de traitements de données.<br />
			</div>

			<div id="mysql">
				<a href="mariadb_and_mysql.png" target="blank"><img src="mariadb_and_mysql.png" class="img" /></a>
				<p>MySQL est un système de gestion de bases de données relationnelles. Il est basé sur le langage de requête <u>SQL</u> (Structured Query Language). 
				SQL est un langage normalisé servant à exploiter des bases de données relationnelles. Ce qui signifie qu'il permet d'effectuer sous forme de commandes
				des actions relatives aux Bases De Données. On peut par exemple ajouter des informations à une Base De Données (BDD).  Aussi Mariadb est un fork (projet
				dérivé) de MySQL mais développé sous licence GNU (General Public License). Etant donné que MySQL a été racheté en 2009 par Sun Microsystems. Ainsi les
				trois technologies (MySQL, SQL et Mariadb) sont étroitements liées et la syntaxe est relativement la même qu'on utilise MySQL ou Mariadb.
				<br /> <br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/MySQL" target="blank">Wikipédia</a> (MySQL)<br />
					- <a href="https://fr.wikipedia.org/wiki/Structured_Query_Language" target="blank">Wikipédia</a> (SQL)<br />
					- <a href="https://fr.wikipedia.org/wiki/MariaDB" target="blank">Wikipédia</a> (MariaDB)<br />
					- Mes connaissances
				</p>
				<b>  > MySQL, SQL et MariaDB sont des langages/technologies dit <u>back-end</u>. Le back-end
						correspond à la partie "cachée" du site web, c'est la partie serveur d'un site, c'est ce qui rend un site dynamique  
						par le biais de traitements de données.<br />
			</div>

			<div id="python">
				<a href="python.jpg" target="blank"><img src="python.jpg" class="img" /></a>
				<p>
					Le python est un langage vaste et relativement accessible pour apprendre les bases de programmation.
					C'est un langage de "programmation orienté objet (POO)" open source. Il permet de créer des
					programmes en .exe (exécutable) souvent considérés comme des logiciels, il peut également servir à
					créer des jeux vidéos (relativement simples), il est aussi utilisé dans le machine learning ("Le
					Machine Learning est une technologie d’intelligence artificielle permettant aux ordinateurs
					d’apprendre sans avoir été programmés explicitement à cet effet. Pour apprendre et se développer,
					les ordinateurs ont toutefois besoin de données à analyser et sur lesquelles s’entraîner.") ce
					langage peut être aussi utilisé dans le web.
					<br /><br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/Python_(langage)" target="blank">Wikipédia</a>,<br />
					- <a href="https://www.lebigdata.fr/machine-learning-et-big-data" target="blank">Lebigdata.fr</a>
					(pour la définition de marchine learning)
				</p>
			</div>
			<div id="c_arduino">
				<a href="c++_arduino.png" target="blank"><img src="c++_arduino.png" class="img" /></a>
				<p>
					C++ est un langage de programmation compilé permettant la programmation sous de multiples paradigmes
					(comme la programmation procédurale, orientée objet ou générique). Ses bonnes performances, et sa
					compatibilité avec le C en font un des langages de programmation les plus utilisés dans les
					applications où la performance est critique. J'ai appris ce langage car il est utilisé pour la
					programmation avec Arduino, évidemment ce n'est pas le seul, puisque le langage Arduino serait un
					mélange entre plusieurs dont principalement celui-ci ! Arduino est un fabriquant de cartes
					électroniques matériellement libres sur lesquelles se trouvent un microcontrôleur. Elles permettent
					de faire des systèmes automatisés comme de la domotique avec par exemple l'allumage automatisé d'un
					éclairage à partir d'une heure précise ou de conditions précises comme la luminosité. Cela se fait
					au travers de capteurs comme un capteur de température etc. <br /><br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/C%2B%2B" target="blank">Wikipedia</a> (C++)<br />
					- <a href="https://fr.wikipedia.org/wiki/Arduino" target="blank">Wikipedia</a> (Arduino)<br />
					- Mes connaissances
				</p>
			</div>
			<h1>Les langages dont j'ai commencé l'apprentissage avant de le suspendre temporairement :</h1>
			<h2><a href="#java">Java</a>
			<h3><b>J'ai arrêté temporairement l'apprentissage de ce langage faute de temps
					au lycée mais maintenant que je suis en bts je vais peut-être reprendre l'apprentissage</b>
			</h3>
			<div id="java">
				<a href="java_mini.png" target="blank"><img src="java_mini.png" class="img" /></a>
				<p>
					Le java est un langage de programmation orienté objet (POO). Ce sont également des techniques
					informatiques. Il sert pour les logiciels et applications mobiles. C'est d'ailleurs cette utilité
					qui m'avait poussé à me lancer dans l'apprentissage de ce langage et de la programmation en général.
					Cependant j'ai dû arrêter faute de temps et à cause de sa complexité, car j'étais en seconde et je
					n'avais plus le temps de m'y consacrer. Aujourd'hui je déconseillerais le java en langage pour
					commencer, c'est un conseil que je donne mais qui m'a déjà été donné auparavant par plusieurs
					connaissances dans le milieu. Il vaudrait mieux commencer par le Python moins complexe à mon avis
					(c'est un conseil pour ceux qui souhaiteraient se lancer dans la programmation. Cependant j'admets
					que je suis loin d'être un expert dans le milieu.) Le Java sert également dans la programmation de
					jeux vidéos, dont un très connu surtout dans sa version pc dite "version Java", c'est évidemment
					Minecraft dont le launcher fonctionne en Java. Ainsi les mods de ce jeu sont codés également en
					Java<br /><br />
					Sources :<br />
					- <a href="https://fr.wikipedia.org/wiki/Java_(technique)" target="blank">Wikipédia</a> (Java
					(écosystème (technique) ≠ langage))<br />
					- <a href="https://fr.wikipedia.org/wiki/Java_(langage)" target="blank">Wikipédia</a> (java
					langage)<br />
					- Mes connaissances
				</p>
			</div>
		</div>
		<h1 id="messites">Mes sites :</h1>
		<div id="cards_websites">
			<div id="card_website_1" class="card_project">
				<h1 class="title_websites">My css experiences (MCE)</h1>
				<a href="My_css_experiences/accueil.html" target="blank"><img src="mce_capture_mini.jpg"
						class="img"></a>
				<p id="p_cards_site_1">MyCSSExperiences comme son nom l'indique est un site regroupant
					des expériences que j'ai faites en HTML5/CSS3 et cela m'a notamment
					inspiré pour mon site nathannicolle.fr<br>
					<br><u>Mise en ligne le :</u> 24/04/2020
					<br><u>Langages utilisés :</u> HTML5/CSS3
					<br><u>Type :</u> projet personnel
					
				</p>
					
			</div>
			<div id="card_website_2" class="card_project">
				<h1 class="title_websites">La création du plastique (LCDP)</h1>
				<a href="Projet_physique_DD/sauvonsnotreplanete.html" target="blank"><img src="img_projet_v2_mini.jpg"
						class="img" /></a>
				<p id="p_cards_site_2">Ce site est sur la création du plastique, c'est un projet réalisé en cours de
					physique à l'institut Lemmonier. Il est actuellement hébergé sur mon site à la suite de problèmes de
					noms de domaines dus à 1&1, cela m'a permis également de comprendre qu'il vaut mieux pour
					ce genre de projet choisir que l'hébergement se fasse sur le domaine de mon site et non sur
					un domaine "propre" <br>
					<br><u>Mise en ligne le :</u> 10/01/2019
					<br><u>Langages utilisés :</u> HTML5/CSS3
					<br><u>Type :</u> projet dans le cadre scolaire (en STI2D)
			</div>
			<div id="card_website_3" class="card_project">
				<h1 class="title_websites">nathannicolle.fr (ce site)</h1>
				<a href="index.html"><img src="capture_nathannicolle2_0_mini.jpg" class="img" /></a>
				<p id="p_cards_site_3">Ce site est la base de mon aprentissage
					en HTML5 et en CSS3, commencé en 2018. Il a beaucoup évolué et
					vient d'être entièrement rénové. Pour cela je suis reparti
					de zéro avec pour seule inspiration le site déjà existant et les médias
					présents dessus. Je l'ai ainsi entièrement repensé !<br>
					<br><u>Mise en ligne le :</u> 19/09/2018
					<br><u>Langages utilisés :</u> HTML5/CSS3 - PHP - Javascript
					<br><u>Type :</u> projet personnel
				</p>
			</div>
		</div>
		<h1 id="apps">Mes applis :</h1>
		<p id="disclaimer_app">
			Pour le moment je conçois mes applications à l'aide d'un site web
			assez simple qui s'appelle :<br />
			Appinventor 2<br />
			mais dans le futur je vais réellement apprendre à coder en java car j'ai essayé mais on m'a conseillé des
			langages plus simples avant de commencer. Le java est utile dans la conception d'applications android car
			l'IDE (interface de développement) Android Studio l'utilise ! Je tiens aussi à préciser que pour l'instant
			je ne possède pas de licence Google Play ce qui signifie que je ne peux pas poster mes applis sur le google
			play store ! Je réserve cet achat quand je saurais concevoir une appli "professionnelle" avec Android studio
			! Mais si vous restez connectés vous serez au courant dans la partie "Mes actus". <br /><br />
			<b>Pour savoir comment télécharger un fichier en .apk <a href="https://www.youtube.com/watch?v=r5KK_S7y2yQ"
					target="blank">cliquez-ici</a> pour accéder au tuto réalisé par frandroid c'est plutôt bien expliqué
				bien que la vidéo date de 3 ans ! (la seule différence c'est qu'il faudra juste cliquez sur le lien de
				l'application que vous téléchargez depuis votre mobile).
				Si vous rencontrez des problèmes avec le téléchargement, contactez-moi à
				assistance[at]nathannicolle.fr</b>
		</p>
		<h1>Speakforme :</h1>
		<p class="p_general">
			Utilité/Principe : L'application est disponible en deux versions en une : une VF et une Version Anglaise.
			Elle comprend 2 parties :<br />

			- La partie "Parler pour moi" qui sert à lire une phrase écrite dans la zone de texte par l'utilisateur
			!<br />
			- La partie "Traduire pour moi" qui sert à traduire et lire la traduction (fr-en et en-fr seulement ! Autre
			détail, c'est que la traduction nécessite une connexion internet !)<br />

			Cette application a été conçue pour les muets, sourds et malentendants afin de leur faciliter l'échange avec
			le monde exterieur ! Le principe est simple mais l'app peut s'avérer réellement utile ! Si le concept vous
			plaît n'hésitez pas à le partager avec votre entourage ! (l'app est en alpha donc entièrement terminée !)
		</p>
		<h2><b>Screenshots de l'appli :</b></h2>
		<div class="scr_apps">
			<a href="ppmoi_home.png" target="blank"><img src="ppmoi_home_mini.png" class="scr_app_1" /></a>
			<a href="ppourmoi.png" target="blank"><img src="ppourmoi_mini.png" class="scr_app_2" /></a>
			<a href="ppourmoi_a.png"><img src="ppourmoi_a_mini.png" class="scr_app_3" /></a>
			<a href="ppourmoi_t.png"><img src="ppourmoi_t_mini.png" class="scr_app_4" /></a>
		</div>
		<h3><a href="apps/speakforme.apk">Télécharger l'app</a> en apk</h3>
		<h1>Basichrono</h1>
		<p class="p_general">
			(L'app est entièrement terminée !) Utilité/principe :<br />
			Comme son nom l'indique c'est un chronomètre vraiment basique car
			il fonctionne en secondes ! Deux interfaces sont disponibles
			(chacun avec des couleurs différentes !). Ce n'est pas vraiment utile mais bon...
			j'ai fait ça "pour le fun".
		</p>
		<h2><b>Screenshots de l'appli :</b></h2>
		<div class="scr_apps">
			<a href="scr_bc_int1.png" target="blank"><img src="scr_bc_int1_mini.png" class="scr_app_1" /></a>
			<a href="scr_bc_int1_10.png" target="blank"><img src="scr_bc_int1_10_mini.png" class="scr_app_2" /></a>
			<a href="scr_bc_int2.png"><img src="scr_bc_int2_mini.png" class="scr_app_3" /></a>
			<a href="scr_bc_int2_10.png"><img src="scr_bc_int2_10_mini.png" class="scr_app_4" /></a>
		</div>
		<h3><a href="apps/basichrono_test.apk">Télécharger l'app</a> en apk</h3>
		<h2><b>Vidéo de l'appli :</b></h2>
		<video src="bc_app.mp4" controls="true" preload="true" />
	<?php
		include "structure/footer.html";
	?>