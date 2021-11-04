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

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
        <img class="gif-heros" src="https://imgur.com/o4wrrf4.png" alt="gif-heros" />
      </div>
      <div class="col">
        <img class="img-heros" src="https://imgur.com/o4wrrf4.png" alt="img-heros" />
      </div>
      <div class="col">
        <a href="#donner">
          <img class="donner-heros" href="#donner" src="https://imgur.com/e7PMfzR.png" alt="donner-heros" />
        </a>
        <button
               class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar"
          aria-controls="navbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
       
          <span class="bi bi-list"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbar"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#accueil">Accueil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#nouvelles">Nouvelles</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#equipe">Équipe</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#apropos">À propos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#histoire">Histoire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link donner" href="https://www.clownssansfrontieres.ca/donner/"> FAITES UN DON </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#english">
                <mark>EN</mark>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
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
    <div class="gridService">
    <div class="titleService">Nos Services</div>
      <div class="saaService">
        <img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2014/04/CSF-milieu-scolaire-1024x413.jpg" class="saaService__image">
        <div class="saaService__text">
          Spectacles, animations et ateliers
        </div>
      </div>
      <div class="epService">
        <img src="https://www.clownssansfrontieres.ca/wp-content/uploads/2017/09/Katel_Le_Fustec_20170711_133500-1024x683.jpg" class="epService__image">
        <div class="epService__text">
          Exposition de photographies
        </div>
    </div>
  </div>
  </div>

    <div class="heros">
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
    </div>

    <section class="nouvelles" id="nouvelles">
      <div class="container-fluid">
        <h1 class="titres">Nouvelles</h1>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide gradient1">
              Plan de soutien aux organismes de coopération internationale
            </div>
            <div class="swiper-slide gradient2">
              Communiqué pour publication immédiate
            </div>
            <div class="swiper-slide gradient3">
              Journée Mondiale du nettoyage de notre planète
            </div>
            <div class="swiper-slide gradient1">Appel à la mobilisation !</div>
            <div class="swiper-slide gradient2">
              Appel de Clowns Without Borders International (CWBI) à la
              solidarité et au respect des droits humains aux frontières de
              l’Union Européenne
            </div>
            <div class="swiper-slide gradient3">
              HAÏTI « ON EST DANS UNE CRISE HUMANITAIRE »
            </div>
            <div class="swiper-slide gradient1">
              ANNONCE : Projet de Coopération Québec-Haïti 2020
            </div>
            <div class="swiper-slide gradient2">
              Retour en image sur les ateliers artistiques et culturels à
              Kitcisakik
            </div>
            <div class="swiper-slide gradient3">
              Retour en image sur notre soirée témoignage !
            </div>
            <div class="swiper-slide gradient1">
              En piste! 16 jours d’activisme en Haïti
            </div>
            <div class="swiper-slide gradient2">
              Clowns Sans Frontières lance sa 19e campagne Jour Nez!
            </div>
            <div class="swiper-slide gradient3">
              Entrevue avec Katel Le Fustec sur les ondes de Radio Canada
              International
            </div>
          </div>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
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
                  class="card-img-top cardshadow1"
                  alt="image"
                />
              </div>
              <div class="card-body">
                <h5 class="card-title">Mr Kim</h5>
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
          <div class="col">
            <div class="card">
              <div class="card-header">
                <img
                  src="https://thispersondoesnotexist.com/image"
                  class="card-img-top cardshadow3"
                  alt="image"
                />
              </div>
              <div class="card-body">
                <h5 class="card-title">Mr Min</h5>
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
    <!--Trish: animation-->
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
        <img
          src="https://freesvg.org/img/1302118210.png"
          alt="cursor"
          class="word__cursor"
        />
      </a>
    </div>
    <!--Trish: footer-->
    <div class="pied-de-page">
      <div class="sponsor__wrapper">
        <div class="sponsor">
          <div class="sponsor__img a">
            <img
              src="https://pbs.twimg.com/profile_images/1147162075933941760/w5i6uC-7.png"
              alt="Telus fondation"
            />
          </div>
          <div class="sponsor__img b">
            <img
              src="http://www.desjardins.com/ressources/images/desjardins-facebook-generique.jpg"
              alt="Desjardins"
            />
          </div>
          <div class="sponsor__img c">
            <img
              src="https://tohu-cdn.s3.ca-central-1.amazonaws.com/staging/files/TOHU_Logo-A_Jaune.jpg"
              alt="Tohu"
            />
          </div>
          <div class="sponsor__img d">
            <img
              src="https://upload.wikimedia.org/wikipedia/fr/thumb/0/03/Minist%C3%A8re_des_Relations_internationales_et_de_la_Francophonie_%28Qu%C3%A9bec%29.svg/1200px-Minist%C3%A8re_des_Relations_internationales_et_de_la_Francophonie_%28Qu%C3%A9bec%29.svg.png"
              alt="Quebec"
            />
          </div>
          <div class="sponsor__img e">
            <img
              src="https://www.canada.ca/content/dam/canada/tbs-sct/migration/hgw-cgf/oversight-surveillance/communications/fip-pcim/images/spec/T130-Canada.png"
              alt="Canada"
            />
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footer__wrapper">
          <div class="footer__logo hide_above">
            <div class="logo">
              <img src="https://i.imgur.com/zlLh1kK.png" alt="logo" />
            </div>
          </div>
          <div class="footer__contact">
            <ul>
              <li>514-495-1287</li>
              <li>contact@clownssansfrontieres.ca</li>
              <li>105 Ontario St E, Montreal, Quebec H2X1G9</li>
            </ul>
          </div>
          <div class="footer__logo hide_below">
            <div class="logo">
              <img src="https://i.imgur.com/zlLh1kK.png" alt="logo" />
            </div>
          </div>
          <div class="footer__icone">
            <div class="icone vimeo">
              <a href="https://vimeo.com/user2650793"></a>
            </div>
            <div class="icone ig">
              <a
                href="https://www.instagram.com/clownssansfrontieres/?hl=fr-ca"
              ></a>
            </div>
            <div class="icone fb">
              <a href="https://www.facebook.com/ClownsSansFrontieres/"></a>
            </div>
            <div class="icone yt">
              <a
                href="https://www.youtube.com/channel/UCQWUO8JZx69GPWRInazRPMw"
              ></a>
            </div>
            <div class="icone twt">
              <a href="https://twitter.com/csf_canada"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  <!--Trish: footer-->
  <div class="pied-de-page">
    <div class="sponsor__wrapper">
      <div class="sponsor">
        <div class="sponsor__img a"><img src="https://pbs.twimg.com/profile_images/1147162075933941760/w5i6uC-7.png" alt="Telus fondation"></div>
        <div class="sponsor__img b"><img src="http://www.desjardins.com/ressources/images/desjardins-facebook-generique.jpg" alt="Desjardins"></div>
        <div class="sponsor__img c"><img src="https://tohu-cdn.s3.ca-central-1.amazonaws.com/staging/files/TOHU_Logo-A_Jaune.jpg" alt="Tohu"></div>
        <div class="sponsor__img d"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/0/03/Minist%C3%A8re_des_Relations_internationales_et_de_la_Francophonie_%28Qu%C3%A9bec%29.svg/1200px-Minist%C3%A8re_des_Relations_internationales_et_de_la_Francophonie_%28Qu%C3%A9bec%29.svg.png" alt="Quebec"></div>
        <div class="sponsor__img e"><img src="https://www.canada.ca/content/dam/canada/tbs-sct/migration/hgw-cgf/oversight-surveillance/communications/fip-pcim/images/spec/T130-Canada.png" alt="Canada"></div>
      </div>
    </div>
    <div class="footer">
      <div class="footer__wrapper">
        <div class="footer__logo hide_above">
          <div class="logo"><img src="https://i.imgur.com/zlLh1kK.png" alt="logo"></div>
        </div>
        <div class="footer__contact">
          <ul>
            <li>514-495-1287</li>
            <li>contact@clownssansfrontieres.ca</li>
            <li><a href="https://goo.gl/maps/iH5Vkq1M3WKGAsa5A" target="_blank">105 Ontario St E, Montreal, Quebec H2X1G9</a></li>
          </ul>
        </div>
        <div class="footer__logo hide_below">
          <div class="logo"><a href="https://www.clownssansfrontieres.ca/donner/" target="_blank"><img src="https://i.imgur.com/zlLh1kK.png" alt="logo"></a></div>
        </div>
        <div class="footer__icone">
          <div class="icone vimeo"><a href="https://vimeo.com/user2650793" target="_blank"><img src="https://i.imgur.com/KYmiXWt.png" alt="vimeo"></a></div>
          <div class="icone ig"><a href="https://www.instagram.com/clownssansfrontieres/?hl=fr-ca" target="_blank"><img src="https://i.imgur.com/XTxkOex.png" alt="ig"></a></div>
          <div class="icone fb"><a href="https://www.facebook.com/ClownsSansFrontieres/" target="_blank"><img src="https://i.imgur.com/shaEfMy.png" alt="fb"></a></div>
          <div class="icone yt"><a href="https://www.youtube.com/channel/UCQWUO8JZx69GPWRInazRPMw" target="_blank"><img src="https://i.imgur.com/np6pULK.png" alt="yt"></a></div>
          <div class="icone twt"><a href="https://twitter.com/csf_canada" target="_blank"><img src="https://i.imgur.com/1GCUrIn.png" alt="twt"></a></div>
        </div>
      </div>
    </div>
  </div>
  <!--- NOUVELLES-->
  <!--- <section>
    <div class="container">
        <div class="row"> 
          <div class="col-3">col-3</div>
          <div class="col-6">col-6</div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card">
                <div class="card-header">
                    Articles récents
                </div>
              <div class="card-body">
                <h5 class="card-title">Plan de soutien aux organismes de coopération internationale</h5>
                <p class="card-text">QUÉBEC, le 12 nov. 2020 /CNW Telbec/ – La ministre des Relations
                    internationaleset de la Francophonie et ministre de l’Immigration ...</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">Communiqué pour publication immédiate</h5>
                <p class="card-text">Montréal, le 11 novembre 2020 – Depuis plus de 25 ans, l’
                  organisme
                  Clowns Sans Frontières s’investit dansla défense des Droits de...
                  </p>
              </div>
              <div class="card-body">
                <h5 class="card-title">Journée Mondiale du nettoyage de notre planète
                </h5>
                <p class="card-text">
                  Journée mondiale du nettoyage de notre planète:
                  Succès mondial et… québécois...
                </p>
              </div>
              <div class="card-body">
                <h5 class="card-title">HAÏTI « ON EST DANS UNE CRISE HUMANITAIRE »</h5>
                <p class="card-text">Des affrontements mortels entre policiers et militaires. Des millions
                  d’habitants confrontés à l’insécurité alimentaire. Un pouvoir d’achat ...
                  </p>
              </div>
              <div class="card-body">
                <h5 class="card-title">ANNONCE: Projet de Coopération Québec-Haïti 2020
                </h5>
                <p class="card-text">ANNONCE : « Renforcer des jeunes au moyen de la culture et de
                  développement entrepreneurial » Projet de Coopération ...
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </section> -->

    <!--- DETAILS NOUVELLE 1-->

  <section>
    <div class="nouvelle">

      <div class="container__nouvelle__hero">
        <div class="row"> 
            <h1 class="titres__nouvelle"> NOUVELLE </h1>
            <div class="ligne__nouvelle"></div>
        </div>
        <div class="row">
          <div class="hero__nouvelle">
            <img src="https://image.shutterstock.com/image-vector/under-construction-industrial-sign-vector-260nw-333015377.jpg" class="image__nouvelle">
          </div>
        </div>
      </div>
      
      <div class="nouvelle__description">
        <h2> Titre </h2>
        <h3></h3>
      </div>
      
      <div class="nouvelle__pied">
        <div class="texte__debut"> </div>
          
      </div>

      <div class="nouvelle__apercu">
        <div class="card">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title">Titre</h5>
            <p class="card-text">Description</p>
          </div>
        </div>

        <button class="plus__bouton"> Voir plus</button>
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