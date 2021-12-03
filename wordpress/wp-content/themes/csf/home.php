<?php 
/**
 * 	Template Name: home
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
  
    <!--<div class="heros">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-6">
            <img
              class="gif-heros"
              src="https://imgur.com/g1TBBfG.png"
              alt="gif-heros"
            />
          </div>
          <div class=" col-12 col-md-6 " >
            <img
              class="img-heros"
              src="https://imgur.com/o4wrrf4.png"
              alt="img-heros"
            />
          </div>
          <div class="col-12 justify-content-left bt-donner"> 
            <a href="//www.clownssansfrontieres.ca/donner/">
              <img
                class="donner-heros"
                href="#donner"
                src="https://imgur.com/e7PMfzR.png"
                alt="donner-heros"
              />
            </a>
          </div>
        </div>
      </div>
    </div> -->

    <div class="bgGradient">
    <div class="gridOrganisme">
      <div class="titleOrganisme">
        Qui sommes-nous?
        <div class="ligne"></div>
      </div>
      <div class="heroOrganisme">
        <!-- Slider here -->
        <div class="swiper swiper-organisme size-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2020/03/50267696_10156317738762739_3890001727377637376_o.jpg"></div>
            <div class="swiper-slide"><img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2014/04/CSF-MI-CHINE.jpg"></div>
            <div class="swiper-slide"><img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2018/10/12185472_10153724839153658_6740247252875028219_o-1024x576.jpg"></div>
            <div class="swiper-slide"><img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2019/09/4.DSC00850-768x543.jpg"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- end of slider -->
      </div>
      <div class="descriptionOrganisme">
        <div class="descriptionOrganisme1">Notre Mission</div>
        <div class="descriptionOrganisme2">Depuis 1994, l’association artistique et humanitaire ClownsSansFrontières organise des spectacles et des ateliers gratuits pour ofrir un soutien moral et émotionnel aux populations victimes de la guerre, de la misère ou de l’exclusion. Sans discrimination politique, ethnique ou religieuse, les artistes apportent des moments de rire et de rêve dans les camps de réfugiés, les bidonvilles, les centres de détention pour mineurs, les orphelinats, les communautés autochtones, les centres
    jeunesses et autres lieux où la culture peine à respirer.</div>
      </div>
      <div class="informationOrganisme">En savoir plus</div>
    </div>
  </div>

  <div class="service">
    <h1 class="titres">Nos Services</h1>
    <?php
            $service = new WP_Query( array('post_type'=> 'service','order'   => 'DESC' ,'posts_per_page' => 2) ); // 👈 Utilisation
            while ($service->have_posts()) : $service->the_post(); 
            ?>
              
              <div class="cartesHubServices">
 
			<div class="card bg-dark text-white card-hubServices">
			<img class="card-img card-img-hubServices" src="<?php echo the_post_thumbnail_url(); // Vignette large du post ?>" alt="Card image">
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
  </div>
  </div>

    

    <section class="nouvelles" id="nouvelles">
      <div class="container-fluid">
        <h1 class="titres">Nouvelles</h1>
        
        <div class="container__nouvelles">
            <?php
            $nouvelle = new WP_Query( array('post_type'=> 'nouvelle', 'orderby' => 'date','order'   => 'DESC' ,'posts_per_page' => 3) ); // 👈 Utilisation
            while ($nouvelle->have_posts()) : $nouvelle->the_post(); 
            ?>
            
              
              <div class="nouvelles__apercu gradient1">
              <?php the_title(); // Titre de la page ?>
              </div>
              <?php
              endwhile; 
              wp_reset_postdata(); 
              ?>
          </div>
         
      </div>
    </section>
    <section class="nouvelles" id="nouvelles">
      <div class="container-fluid">
        <h1 class="titres">Témoignages</h1>
        <div class="row justify-content-center">
          
          <div class="col">
            <div class="card">
              <div class="card-header">
                <img
                  src="https://thispersondoesnotexist.com/image"
                  class="card-img-top cardshadow2"
                  alt="image"
                />
              </div>
              <div class="card-body">
                <h5 class="card-title">Mr Jeon</h5>
                <p class="card-text">
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
          
        </div>
      </div>
    </section>

    
    <!--- NOUVELLES-->
    <!--- <section>-->
  
  <div class="word_wrapper">
    <a href="https://www.clownssansfrontieres.ca/donner/">
      <div class="word word__one hide__small">
        <h1>Donnez</h1>
      </div>
      <div class="word word__two hide__small">
        <h1>Donnez</h1>
      </div>
      <div class="word word__three hide__small">
        <h1>Donnez</h1>
      </div>
      <div class="word word__one hide__big">
        <h1>Faites un don</h1>
      </div>
      <div class="word word__two hide__big">
        <h1>Faites un don</h1>
      </div>
      <div class="word word__three hide__big">
        <h1>Faites un don</h1>
      </div>
      <img src="https://freesvg.org/img/1302118210.png" alt="cursor" class="word__cursor">
    </a>
  </div>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>