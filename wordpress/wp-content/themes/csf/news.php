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
			<h2>
				
			</h2>
		<?php endif; ?>
		<section>
    <div class="heros">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="gif-heros" src="https://imgur.com/g1TBBfG.png" alt="gif-heros" />
          </div>
          <div class="col-12 col-md-6">
            <img class="img-heros" src="https://imgur.com/o4wrrf4.png" alt="img-heros" />
          </div>
          <div class="col-12 justify-content-left bt-donner">
            <a href="//www.clownssansfrontieres.ca/donner/">
              <img class="donner-heros" href="#donner" src="https://imgur.com/e7PMfzR.png" alt="donner-heros" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="detailsNouvelle">
    <h2>Nouvelle</h2>
    <div class="nouvelle">
      <div class="container__nouvelle__hero">

        <div class="hero__nouvelle">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card bg-primary card__details">
                  <img
                    src="https://image.shutterstock.com/image-vector/under-construction-industrial-sign-vector-260nw-333015377.jpg"
                    class="card-img-top card__img__details" />

                  <div class="card-body card__body__details">
                    <h5 class="card-title card__title__details">
					          <?php the_title(); // Titre de la page ?>
                    </h5>
                    <p class="card-text card__desc__details">Catégorie</p>
                    <p class="card-text card__desc__details">Fate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h4 class="nouvelle__description soustitre__nouvelle"><?php the_title(); // Titre de la page ?>
      </h4>

      <div class="nouvelle__description titreNouvelle">
        Plan de soutien aux organismes de coopération internationale – Plus de
        3,7 M$ accordés à 30 organismes québécois de coopération
        internationale afin d’appuyer la réalisation de projets visant à
        réduire les effets de la COVID-19
      </div>
      <div class="blueLine"></div>
      <div class="nouvelle__description">
        <p1>
          NOUVELLES FOURNIES PAR
          <br />
          Cabinet de la ministre des Relations internationales et de la
          Francophonie
        </p1>
      </div>
      <div class="blueLine"></div>

      <div class="nouvelle__description">
	  <?php the_content(); // Contenu principal de la page ?>
      </div>

      <div class="nouvelle__pied">
        <div class="texte__debut"></div>
        <div class="nouvelle__info">
          <div class="nouvelle__auteur">Par Katel Le Fustec</div>
          <div class="nouvelle__date">10 décembre 2020</div>
          <div class="nouvelle__csf">Clown Sans Frontière</div>
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
              <p1 class="cardAuteur">Auteur</p1>
              <p1 class="card-titleNouvelle">date</p1>
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

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>