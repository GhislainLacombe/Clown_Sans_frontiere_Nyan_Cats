<?php 
/**
 * 	Template Name: À propos
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
		<section>
  <title><?php the_title(); // Titre de la page ?></title>
      
  <div class='propos'>
    <h3>Notre Mission</h3>
    <p>Depuis 1994, l’association artistique et humanitaire Clowns Sans Frontières organise des spectacles et des ateliers gratuits pour offrir <mark>un soutien moral et émotionnel</mark> aux populations victimes de la guerre, de la misère ou de l’exclusion. Sans discrimination politique, ethnique ou religieuse, les artistes apportent des moments de rire et de rêve dans les camps de réfugiés, les bidonvilles, les centres de détention pour mineurs, les orphelinats, les communautés autochtones, les centre jeunesse et autres lieux où la culture peine à respirer. <br><br> Clowns Sans Frontières regroupe des artistes professionnels de plusieurs disciplines (comédiens, musiciens, clowns, danseurs, jongleurs, marionnettistes, acrobates, etc.) qui s’engagent à titre bénévole créant ainsi des moments positifs et un certain espace de liberté à des populations en grande situation de précarité. Les interventions de Clowns Sans Frontières sont toujours en lien avec des associations locales et des ONG internationales.<br><br>Clowns Sans Frontières est à la fois une ONG artistique, humanitaire, de développement et de plaidoyer. 
    </p><br><br>
    <ul class="mission">
  <li class="mision">Elle est <p3>artistique</p3> puisqu’elle développe des actions autour du spectacle vivant.</li> <br>
  <li class="mission">Elle est <p3>humanitaire</p3> puisqu’elle travaille dans des pays en conflits ou victimes de catastrophes</li><br>
  <li class="mission">Elle est de <p3>développement</p3> puisqu’elle offre de la formation auprès des enfants et des éducateurs. Elle structure des réseaux d’artistes locaux et met en synergie des organisations locales.</li><br>
       <li class="mission">Elle est de <p3>plaidoyer</p3> puisqu’elle agit en faveur des droits de l’enfant. Les artistes ont également le devoir de témoigner sur les réalités du terrain. </li>
      </ul> <br><br>
    
    <p>Nourris des rires de milliers d’enfants et d’adultes captivés par ses spectacles, Clowns Sans Frontières se bat pour préserver <mark>le droit à l’enfance</mark>. Sa force est d’aller où personne ne va afin de redonner le goût aux enfants et à leur entourage de sourire et de se reconstruire.</p><br><br>
    <h4>Prix et distinctions</h4>
    <p>Depuis 2015, Clowns Sans Frontières est membre associé de l’UNESCO.<br><br>
En 2000, Clowns Sans Frontières reçoit la « Médaille de la Paix » décerné par le YMCA du Grand Montréal.<br><br>
En 1997, Clowns Sans Frontières reçoit le prix « Artiste pour la Paix » par l’organisme québécois Les Artistes pour la Paix.<br><br></p>
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