<?php 
/**
 * 	Template Name: Team
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			
		<?php endif; ?>
		
		

		
<h2><?php the_title(); // Titre de la page ?></h2>

<?php the_content(); // Contenu principal de la page ?>
		<div class="equipe"> 
    
    <header>
    <div class="photo-groupe" id="header">
        <img src="sources/medias/equipe/group.jpg" class="card-img-top" alt="groupe">
      </div>
    </header>
    <div class="direction">
    <br>
    <h3>Notre équipe</h3>
    
      
    <div class="card-group">

<?php $membre = new WP_Query('post_type=membre');
while ($membre->have_posts()) : $membre->the_post(); 
?>


<div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modal<?php echo get_post_field( 'post_name' );?>">
          <div class="circle circle-<?php the_field('color'); ?>"><img src="<?php the_field('image'); ?>" class="card-img-top" >
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1"><?php the_title(); // Titre de la page ?></h4>
            <p class="card-text-equipe1" > <?php the_field('role'); ?> </p>
          </div>
        </div>

        <div class="modal fade" id="modal<?php echo get_post_field( 'post_name' );?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); // Titre de la page ?></h5>
             </div>
            <div class="modal-body">
            <?php the_field('description'); ?>
              <br>
            </div>
          </div>
        </div>
      </div>


<?php
  endwhile; 
  wp_reset_postdata(); 
?>

<div class="remerciements">
  <div class="merci-title">Merci</div> 
  <div class="merci-text"> Merci à nos précieux partenaires.<br> Nos partenaires sont précieux pour la réussite de nos activités ici et ailleurs.</div>
</div>


	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>