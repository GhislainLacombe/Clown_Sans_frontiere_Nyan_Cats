<?php 
/**
 * 	Template Name: Services
 * 	Template Post Type: post, page, service
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		<?php
            $service = new WP_Query( array('post_type'=> 'service', 'orderby' => 'date','order'   => 'DESC' ,'posts_per_page' => 1) ); // 👈 Utilisation
            while ($service->have_posts()) : $service->the_post(); 
            ?>
              
              <div class="cartesHubServices">
 
			<div class="card bg-dark text-white card-hubServices">
			<img class="card-img card-img-hubServices" src="https://www.clownssansfrontieres.ca/wp-content/uploads/2017/09/Katel_Le_Fustec_20170711_133500-1024x683.jpg" alt="Card image">
			<div class="hubServices-gradient02"></div>
			<div class="card-img-overlay card-img-overlay-hubServices">
			<h1 class="card-title-hubServices"><?php the_title(); // Titre de la page ?>
			</h1>

			</div>
			</div>

		</div>



            </div>
              <?php
              endwhile; 
              wp_reset_postdata(); 
              ?>

	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>