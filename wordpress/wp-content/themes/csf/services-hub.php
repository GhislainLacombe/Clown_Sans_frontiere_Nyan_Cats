<?php 
/**
 * 	Template Name: Hub de Services
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			
		<?php endif; ?>
		
		

		<div class="hubServices">
      
      <h2 class="titre_hubServices">
	  	<?php the_title(); // Titre de la page ?>
	  </h2>
      <div class="heroGenerique">

      </div>
      <h3 class="hubServices__description">
	  	<?php the_content(); // Contenu principal de la page ?>
      </h3>
      
      
      <div class="cartesHubServices">
       
        <div class="card bg-dark text-white card-hubServices">
          <img class="card-img card-img-hubServices" src="https://www.clownssansfrontieres.ca/wp-content/uploads/2014/04/CSF-milieu-scolaire-1024x413.jpg" alt="Card image">
          <div class="hubServices-gradient"></div>
          <div class="card-img-overlay card-img-overlay-hubServices">
      
            <h1 class="card-title-hubServices">Spectacles, animations et ateliers</h1>
            
          </div>
        </div>
        <div class="card bg-dark text-white card-hubServices">
          
          <img class="card-img card-img-hubServices" src="https://www.clownssansfrontieres.ca/wp-content/uploads/2017/09/Katel_Le_Fustec_20170711_133500-1024x683.jpg" alt="Card image">
          <div class="hubServices-gradient"></div>
          <div class="card-img-overlay card-img-overlay-hubServices">
      
            <h1 class="card-title-hubServices">Exposition <br>de photographies
            </h1>
            
          </div>
        </div>

      </div>
    </div>
	

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>