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
                  
                <img src="<?php echo the_post_thumbnail_url(); // Vignette large du post ?>" class="card-img-top card__img__details">
               

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
      <div class="colNouvelle">
        <div class="cardNouvelle">
          <div class="card-headerNouvelle">
            <img src="https://thispersondoesnotexist.com/image" class="card-img-topNouvelle" alt="image">
          </div>
          <div class="card-bodyNouvelle">
            <div class="alignment">
              <p1 class="cardNameArticle">Nom de l'article</p1>
              <p1 class="cardAuteur"><?php the_field('auteur'); ?></p1>
              <p1 class="card-titleNouvelle"><?php the_field('date'); ?></p1>
            </div>
            <p class="card-textNouvelle">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Praesent laoreet ante vitae eros rhoncus fermentum. Proin at
              libero vitae libero imperdiet laoreet id eu dui. Donec dapibus
              condimentum euismod. Morbi tincidunt lacus ante, et bibendum
              leo volutpat quis. Sed rhoncus rhoncus lacus, vel pulvinar
              tellus scelerisque non.
            </p>
          </div>
        </div>
      </div>
      <button class="plus__bouton">Voir plus</button>
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