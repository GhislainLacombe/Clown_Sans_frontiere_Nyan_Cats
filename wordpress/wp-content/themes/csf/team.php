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
		
		
		<?php the_content(); // Contenu principal de la page ?>
		<div class="equipe"> 
		
    <title><?php the_title(); // Titre de la page ?></title>
    
    <header>
      <div class="photo-groupe" id="header">

        <img src="sources/medias/equipe/group.jpg" class="card-img-top" alt="groupe">
      </div>
    </header>
    <div class="direction">
      <br>
      <h3>Direction & Bénévoles</h3>

      <div class="card-group ">
        <div class="card text-center border__none" data-toggle="modal" data-target="#modalKlefustec">
          <div class="circle circle-sea-green"><img src="sources/medias/equipe/katel_01.png" class="card-img-top" alt="katel">
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Katel Le Fustec</h4>
            <p class="card-text-equipe">Directrice générale & artistique</p>
          </div>
        </div>

        <div class="card text-center border__none" data-toggle="modal" data-target="#modalMdargenio">
          <div class="circle circle-red"><img src="sources/medias/equipe/argenio_01.png" class="card-img-top" alt="argenio">
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Michèle D'Argenio</h4>
            <p class="card-text-equipe">Adjointe à la direction</p>
          </div>
        </div>

        <div class="card text-center border__none" data-toggle="modal" data-target="#modalMeaubry">
          <div class="circle circle-navy"><img src="sources/medias/equipe/aubry_01.png" class="card-img-top " alt="aubry"></div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Marie-Ève Aubry</h4>
            <p class="card-text-equipe">Responsable du Comité du Réseau International</p>
          </div>
        </div>
      </div>



      <div class="card-group">

        <div class="card text-center border__none" data-toggle="modal" data-target="#modalHcollin">
          <div class="circle circle-red"><img src="sources/medias/equipe/collin_01.png" class="card-img-top" alt="collin"></div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Handrien Collin</h4>
            <p class="card-text-equipe">Administrateur du site web</p>
          </div>
        </div>

        <div class="card text-center border__none" data-toggle="modal" data-target="#modalJfpare">
          <div class="circle circle-navy"><img src="sources/medias/equipe/pare_01.png" class="card-img-top" alt="jf"></div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Jean-Françcois Paré </h4>
            <p class="card-text-equipe">Soutien technique - information</p>
          </div>
        </div>

        <div class="card text-center border__none" data-toggle="modal" data-target="#modalBilly">
          <div class="circle circle-sea-green"><img src="sources/medias/equipe/billy_01.png" class="card-img-top" alt="billy">
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe">Billy Maude</h4>
            <p class="card-text-equipe">Responsable du Comité du Réseau International</p>
          </div>
        </div>
      </div>



      <!-- Button trigger modal 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>
    -->

      <!-- modal Kartel Le Fustec-->
      <div class="modal fade" id="modalKlefustec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kartel Le Fustec</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>

      <!-- modal Michèle D'Argenio-->
      <div class="modal fade" id="modalMdargenio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Michèle D'Argenio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>

      <!-- modal Marie-Ève Aubry-->
      <div class="modal fade" id="modalMeaubry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Marie-Ève Aubry</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>

      <!-- modal j-f paré -->
      <div class="modal fade" id="modalHcollin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Handrien Collin</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>

      <!-- modal j-f paré -->
      <div class="modal fade" id="modalJfpare" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Jean-François Paré</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>

      <!-- modal billy -->
      <div class="modal fade" id="modalBilly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Billy Maude</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
              <br>
            </div>
          </div>
        </div>
      </div>


    </div>
    <br><br>
    
    <h3>Conseil d'administration</h3>
    <div class="conseil">
      <div class="conseil-admin">

        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="sources/medias/equipe/ferland.png" class="img-fluid rounded-start" alt="ferland_portrait">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-title-equipe">François Ferland</div>
                <div class="card-sub-title-equipe">Président</div>
                <div class="card-role-title-equipe">Avocat et médiateur - Jolicoeur Lacasse</div>
                <div class="card-text-equipe">Le droit des affaires domine la pratique de Me Ferland qui s'oriente avant
                  tout auprès des entreprises d'éconimie sociale, les industries culturelles et les entreprises issues
                  de la nouvelle économie.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="sources/medias/equipe/crevier.png" class="img-fluid rounded-start" alt="crevier_portrait">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-title-equipe">Jean Crevier</div>
                <div class="card-sub-title-equipe">Secrétaire-trésorier</div>
                <div class="card-role-title-equipe">Technicien - Héroux Devtek</div>
                <div class="card-text-equipe">Jean Crevier est impliqué dans la restruction des activités et du Conseil
                  d'administration de Clowns Sans Frontières depuis 2008.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="sources/medias/equipe/leclerc.jpg" class="img-fluid rounded-start" alt="leclerc_portrait">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-title-equipe">Richard Leclerc</div>
                <div class="card-sub-title-equipe">Administrateur-trésorier</div>
                <div class="card-text-equipe">Chargé de cours à l'UDM et président et concepteur-réalisateur de
                  publicité à Publici-Terre.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="sources/medias/equipe/aubry.jpg" class="img-fluid rounded-start" alt="aubry_portrait">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-title-equipe">Marie-Eve Aubry</div>
                <div class="card-sub-title-equipe">Administratrice</div>
                <div class="card-text-equipe">Marie-Eve Aubry évolue dans la domaine de l'enfance et des communications.
                  Au cours des années 2000, elle a été émue par l'action de Clowns Sans Frontières en effectuant un
                  reportage sur l'organisme.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 720px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="sources/medias/equipe/voltaire.png" class="img-fluid rounded-start" alt="voltaire_portrait">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="card-title-equipe">Frantz Voltaire</div>
                <div class="card-sub-title-equipe">Administrateur</div>
                <div class="card-role-title-equipe">Directeur - Centre international de documentation et d'information
                  Haïtienne, Caraïbéenne et Afro-Canadienne (CIDIHCA) </div>
                <div class="card-text-equipe">Frantz Voltaire est aussi un historien et politologue qui a travaillé à la
                  production et à la réalisation de plusieurs documentaires dont « Potoprens se pam » (1999) sur le
                  bicentenaire de la ville de Port-au-Prince et « Les chemins de la mémoire » (2002). </div>
              </div>
            </div>
          </div>
        </div>

        <div class="remerciements">
          <div class="merci-title">Merci</div> <br>
          <div class="merci-text"> Merci à nos précieux partenaires.<br> Nos partenaires sont précieux pour la réussite
            de nos activités ici et ailleurs.</div>
        </div>

      </div>
    </div>
  </div>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>