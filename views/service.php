<html>
<head>
<meta http-equiv="content-type" content="text/html ; charset=utf-8" />
<title>CBTP</title>
<link rel="stylesheet" href="../css/style.css">
<style>
	.contact-info {
		background: #FFB000; /* Couleur de fond jaune */
		color: #fff; /* Couleur du texte blanc */
		padding: 10px 0; /* Padding autour de la section */
		font-size: 14px; /* Taille du texte */
	}

	.contact-info .container {
		display: flex;
		justify-content: space-between; /* Espacement entre les éléments */
		align-items: center;
	}

	.contact-info .social-icon img {
		width: 20px; /* Taille des icônes */
		height: 20px;
	}

	.contact-info .info-link {
		display: flex;
		align-items: center;
		color: #fff;
		text-decoration: none; /* Supprimer la décoration du lien */
		margin-left: 20px; /* Espacement entre les liens */
	}

	.contact-info .info-link img {
		width: 20px; /* Taille des icônes */
		height: 20px;
		margin-right: 5px; /* Espacement entre l'icône et le texte */
	}

	.contact-info .info-link:hover {
		text-decoration: underline; /* Souligner le lien au survol */
	}
	.container {
            position: relative;
            display: inline-block;
        }
        .image {
            display: block;
            width: 100%;
            height: auto;
        }
        .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000;
        }


        .content-section {
            text-align: center;
            margin: 40px auto;
        }

        .content-section h2 {
            font-size: 24px;
            color: #333;
            margin: 20px 0;
        }

        .content-section .underline {
            width: 50px;
            height: 3px;
            background-color: #FFB000;
            margin: 10px auto;
        }
		
		.services {
    margin: 30px 0;
}
.service {
    float: left;
    width: 30%;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
}
.service img {
    max-width: 100px;
}
.service h3 {
    color: #333;
}
.service p {
    color: #666;
}
.service a {
    text-decoration: none;
    color: #0779e4;
    font-weight: bold;
}
.service a:hover {
    text-decoration: underline;
}


    </style>
</head>


<body>

<!--
<p align="right"><a href="../views/home.php">déconnexion</a></p> -->


<header class="contact-info">
    <div class="container">
        <a href="https://www.linkedin.com/" class="social-icon"><img src="../images/linkedin-icon.png" alt="LinkdIn"></a>
        <a href="https://goo.gl/maps/your-map-link" class="info-link"><img src="../images/location-icon.png" alt="Comment venir"> Comment venir</a>
        <a href="tel:0698989898" class="info-link"><img src="../images/phone-icon.png" alt="Téléphone"> 06 98 98 98 98</a>
        <a href="mailto:bureau@gtr-tp.fr" class="info-link"><img src="../images/email-icon.png" alt="Email"> bureau@gtr-tp.fr</a>
        <span class="info-link"><img src="../images/clock-icon.png" alt="Horaires"> 
            <?php 
                // PHP code for dynamic hours
				echo date("Y-m-d H:i:s");
               
            ?>
        </span>
    </div>
</header>

  <!-- Header section -->
    <header class="header">
        <?php include '../views/header.php'; ?>
    </header>



<p align="center">
<b>Bienvenu, <font size="3" color="blue">
<? php echo $_SESSION['username']; ?></font>, Chez CBTP "Chantier Batiment et Traveaux Public. </b>
</p>


	<div class="content-section">
  
    <h2>NOS SAVOIR-FAIRE</h2>
    <div class="underline"></div>
</div>
 <div class="container">
 
 
 
<?php
$services = [
    [
        "title" => "Travaux Publics",
        "description" => "Créée en 2024, CBTP vous propose différentes prestations. Découvrir nos savoirs faire !",
        "icon" => "travaux_publics.png"  
    ],
    [
        "title" => "Terrassement",
        "description" => "Si vous avez un projet de construction qui nécessite un terrassement, CBTP est le prestataire qu'il vous faut.",
        "icon" => "terrassement.png"
    ],
    [
        "title" => "Vente de Matériaux",
        "description" => "Professionnels et particuliers, nous vous proposons de nouveaux services sur le site de Fitou.",
        "icon" => "vente_materiaux.png"
    ],
    [
        "title" => "Démolition",
        "description" => "A la mini pelle, au mini chargeur, ou bien à la pelle 30 T, notre parc matériel complet, nous permets de vous accompagner dans vos opérations...",
        "icon" => "demolition.png"
    ],
    [
        "title" => "Recyclage",
        "description" => "Grâce à notre ICPE nous sommes habilités à récupérer vos déchets inertes (béton, ciments, gravats...), et nous les recyclons !",
        "icon" => "recyclage.png"
    ],
    [
        "title" => "Travaux Agricoles",
        "description" => "CBTP répond à vos besoins que vous soyez un exploitant, une collectivité ou une entreprise...",
        "icon" => "agricultural.png"
    ],
];

foreach ($services as $service) {
    echo '<div class="service">';
    echo '<img src="../images/' . $service["icon"] . '" alt="' . $service["title"] . '">';
    echo '<h3>' . $service["title"] . '</h3>';
    echo '<p>' . $service["description"] . '</p>';
    echo '<a href="#">En savoir plus</a>';
    echo '</div>';
}
?> 
 



</div>

<p align="center">
Clic ici pour 
<a href="../views/Login.php">Choisir un Service</a> 
</p>
</body>
</html>