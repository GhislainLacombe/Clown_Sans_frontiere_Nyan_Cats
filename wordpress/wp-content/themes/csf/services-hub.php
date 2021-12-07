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
	  	<?php the_title();  // Titre de la page ?> 
	  </h2>
      <div class="heroGenerique">

      </div>
      <h3 class="hubServices__description">
	  	<?php the_content(); // Contenu principal de la page ?>
      </h3>
      
      
   <div class="cartesHubServices">
    <?php $service = new WP_Query( array('post_type'=> 'service','order'   => 'DESC' ,'posts_per_page' => 2) ); // 👈 Utilisation
      while ($service->have_posts()) : $service->the_post(); 
      ?>
                       
       <a href="<?php echo get_permalink() ?>" class="card bg-dark text-white card-hubServices">
				  <img class="card-img card-img-hubServices" src="<?php echo the_post_thumbnail_url(); // Vignette large du post ?>" alt="Card image">
				  <div class="hubServices-gradient02"></div>
				  <div class="card-img-overlay card-img-overlay-hubServices">
				  	<h1 class="card-title-hubServices"><?php the_title(); // Titre de la page ?>
					  </h1>

	</div>
  </div>

    




            </div>
              <?php
              endwhile; 
              wp_reset_postdata(); 
              ?>
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