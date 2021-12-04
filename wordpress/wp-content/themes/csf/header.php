<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
  
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
		<!-- 
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav>
		<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			//wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
			
		
		?>
	</nav>
-->
<nav class="navbar navbar-expand-xl">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>">
        <img src="https://imgur.com/L4QPMUp.png" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	  	<img class="hamburger" src="https://icons.veryicon.com/png/o/miscellaneous/digital-workshop-console-general-icon/hamburger-menu-fold.png" alt="menu hamburger">
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<?php 

          		// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement

           		 wp_nav_menu( array( 'theme_location' => 'main-menu',

              		'container' => 'ul',

              		'menu_class'=> 'navbar-nav',

                ));

			?>

        </ul>
      </div>
    </div>
</nav>
<div class="heros" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6">
		<?php if(get_locale() == "en_US"){  ?>
			<img class="gif-heros" src="https://i.imgur.com/tWry6WC.png" alt="gif-en" />
			<?php }else{ ?>
          <img class="gif-heros" src="https://imgur.com/g1TBBfG.png" alt="gif-heros" />
<?php }?>

        </div>
        <div class="col-12 col-md-6">
          <img class="img-heros" src="https://imgur.com/o4wrrf4.png" alt="img-heros" />
        </div>
        <div class="col-12 justify-content-left bt-donner">
          <a href="//www.clownssansfrontieres.ca/donner/">
            
		  <?php if(get_locale() == "en_US") { ?>
			<img class="donner-heros" href="#donner" src="https://imgur.com/uNdi2DB.png" alt="donner-heros" /> 
      		<?php }else{ ?>
    		<img class="donner-heros" href="#donner" src="https://imgur.com/e7PMfzR.png" alt="donner-heros" />    
  			<?php }?>
   
          </a>
        </div>
      </div>
    </div>
  </div>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>
<!--
<main>ébute le contenu principal de notre site -->
