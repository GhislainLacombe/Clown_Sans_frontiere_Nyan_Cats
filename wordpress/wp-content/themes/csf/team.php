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
		
<h2><?php the_title(); // Titre de la page ?></h2>
    
    <header>
      <div class="photo-groupe" id="header">

        <img src="sources/medias/equipe/group.jpg" class="card-img-top" alt="groupe">
      </div>
    </header>
    <div class="direction">
      <br>
      <h3>Notre équipe</h3>

      <div class="card-group">

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalKlefustec">
          <div class="circle circle-sea-green"><img src="sources/medias/equipe/katel_01.png" class="card-img-top" alt="katel">
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Katel Le Fustec</h4>
          <?php class="card-text-equipe1" the_content('field') ?> 
          </div>
        </div>

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalMdargenio">
          <div class="circle circle-red"><img src="sources/medias/equipe/argenio_01.png" class="card-img-top" alt="argenio">
          </div>


          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Michèle D'Argenio</h4>
            <p class="card-text-equipe1">Adjointe à la direction</p>
          </div>
        </div>


        

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalMeaubry">
          <div class="circle circle-navy"><img src="sources/medias/equipe/aubry_01.png" class="card-img-top " alt="aubry"></div>


          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Marie-Ève Aubry</h4>
            <p class="card-text-equipe1">Responsable du Comité du Réseau International</p>
          </div>
        </div>
      </div>
    </div>

      <div class="card-group">

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalHcollin">
          <div class="circle circle-red"><img src="sources/medias/equipe/collin_01.png" class="card-img-top" alt="collin"></div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Handrien Collin</h4>
            <p class="card-text-equipe1">Administrateur du site web</p>
          </div>
        </div>

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalJfpare">
          <div class="circle circle-navy"><img src="sources/medias/equipe/pare_01.png" class="card-img-top" alt="jf"></div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Jean-Françcois Paré </h4>
            <p class="card-text-equipe1">Soutien technique - information</p>
          </div>
        </div>

        <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalBilly">
          <div class="circle circle-sea-green"><img src="sources/medias/equipe/billy_01.png" class="card-img-top" alt="billy">
          </div>

          <div class="card-body">
            <div class="card__line"></div>
            <h4 class="card-title-equipe1">Billy Maude</h4>
            <p class="card-text-equipe1">Responsable du Comité du Réseau International</p>
          </div>
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
              
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
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



    <br><br>
     <h3>Conseil d'administration</h3>
 
  <div class="card-group">
    
    <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalFvoltaire">
      <div class="circle circle-sea-green"><img src="sources/medias/equipe/voltaire_01.png" class="card-img-top" alt="voltaire"></div>
  
      <div class="card-body">
        <div class="card__line"></div>
        <h4 class="card-title-equipe1">Frantz Voltaire</h4>
        <p class="card-text-equipe1">Administrateur</p>
      </div>
    </div>

    <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalJcrevier">
      <div class="circle circle-red"><img src="sources/medias/equipe/crevier_01.png" class="card-img-top" alt="crevier">
      </div>

      <div class="card-body">
        <div class="card__line"></div>
        <h4 class="card-title-equipe1">Jean Crevier</h4>
        <p class="card-text-equipe1">Secrétaire-trésorier</p>
      </div>
    </div>

    <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalRleclerc">
      <div class="circle circle-navy"><img src="sources/medias/equipe/richard_01.png" class="card-img-top " alt="leclerc"></div>

      <div class="card-body">
        <div class="card__line"></div>
        <h4 class="card-title-equipe1">Richard Leclerc</h4>
        <p class="card-text-equipe1">Administrateur-trésorier</p>
      </div>
    </div>

  </div>
 

  <div class="card-group">
    <div class="card text-center border__none" data-bs-toggle="modal" data-bs-target="#modalFferland">
      <div class="circle circle-sea-green"><img src="sources/medias/equipe/ferland_01.png" class="card-img-top" alt="ferland">
      </div>

      <div class="card-body">
        <div class="card__line"></div>
        <h4 class="card-title-equipe1">François Ferland</h4>
        <p class="card-text-equipe1">Président</p>
      </div>
    </div>

  
</div>

<div class="remerciements">
  <div class="merci-title">Merci</div> 
  <div class="merci-text"> Merci à nos précieux partenaires.<br> Nos partenaires sont précieux pour la réussite de nos activités ici et ailleurs.</div>
</div>


  <!-- modal François Ferland-->
  <div class="modal fade" id="modalFferland" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">François Ferland</h5>
      
      </div>
      <div class="modal-body">
        Avocat et médiateur - Jolicoeur Lacasse <br><br>
        Le droit des affaires domine la pratique de Me Ferland qui s'oriente avant tout auprès des entreprises d'éconimie sociale, les industries culturelles et les entreprises issues de la nouvelle économie.
      <br>
      </div>
    </div>
  </div>
</div>

<!-- modal Jean Crevier-->
<div class="modal fade" id="modalJcrevier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jean Crevier</h5>
       
      </div>
      <div class="modal-body">
        Technicien - Héroux Devtek <br><br>
Jean Crevier est impliqué dans la restruction des activités et du Conseil d'administration de Clowns Sans Frontières depuis 2008.
<br>
</div>
    </div>
  </div>
</div>

<!-- modal Richard Leclerc-->
<div class="modal fade" id="modalRleclerc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Richard Leclerc</h5>
      
      </div>
      <div class="modal-body">
        Chargé de cours à l'UDM et président et concepteur-réalisateur de publicité à Publici-Terre.
        <br>
      </div>
    </div>
  </div>
</div>

<!-- modal Frantz Voltaire -->
<div class="modal fade" id="modalFvoltaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Frantz Voltaire</h5>
        
      </div>
      <div class="modal-body">
        Directeur - Centre international de documentation et d'information Haïtienne, Caraïbéenne et Afro-Canadienne (CIDIHCA) <br><br>
Frantz Voltaire est aussi un historien et politologue qui a travaillé à la production et à la réalisation de plusieurs documentaires dont « Potoprens se pam » (1999) sur le bicentenaire de la ville de Port-au-Prince et « Les chemins de la mémoire » (2002).
        <br>
      </div>
    </div>
  </div>
</div>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>