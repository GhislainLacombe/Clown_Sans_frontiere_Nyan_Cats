<?php 
/**
 * 	Template Name: Nouvelle
 *  Template Post Type: post, page, nouvelle
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			
		<?php endif; ?>
		<section>
 
    <div class="detailsNouvelle">
    <h2>Nouvelle</h2>
    <div class="nouvelle">
      <div class="container__nouvelle__hero">

        <div class="hero__nouvelle">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card bg-primary card__details">
                  
                <img src="<?php the_field('image'); ?>" class="card-img-top card__img__details">
               

                  <div class="card-body card__body__details">
                    <h5 class="card-title card__title__details">
					          <?php the_title(); // Titre de la page ?>
                    </h5>
                    <p class="card-text card__desc__details"><?php the_field('categorie'); ?></p>
                    <p class="card-text card__desc__details"><?php the_field('date'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h4 class="nouvelle__description soustitre__nouvelle"><?php the_title(); // Titre de la page ?>
      </h4>

      <div class="nouvelle__description">
	  <?php the_content(); // Contenu principal de la page ?>
      </div>

      <div class="nouvelle__pied">
        <div class="texte__debut"></div>
        <div class="nouvelle__info">
          <div class="nouvelle__auteur"><?php the_field('auteur'); ?></div>
          <div class="nouvelle__date"><?php the_field('date'); ?></div>
          <div class="nouvelle__csf"><?php the_field('csf'); ?></div>
        </div>
      </div>
    </div>



    <div class="nouvelle__apercu">
    <div class="row row__apercuDNouvelle"> 
      <div class="colNouvelle">
      <?php $nouvelle = new WP_Query( array('post_type'=> 'nouvelle' ,'posts_per_page' => 1 )); // 👈 Utilisation
      while ($nouvelle->have_posts()) : $nouvelle->the_post(); 
      ?>
                <a href="<?php echo get_permalink() ?>" style="text-decoration:none; color:white;">
                    
                <div class="card cardApercuDNouvelle" style="width: 100%;">
          <div class="card-body">
            <h4 class="card-title"><?php the_title(); // Titre de la page ?></h4>
            <h6 class="card-subtitle"><?php the_field('date'); ?> - <?php the_field('auteur'); ?></h6>
          </div>
        </div>
                   
    
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
               
            </div>
            </div>



    </div>
  </div>
  </section>
		
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>