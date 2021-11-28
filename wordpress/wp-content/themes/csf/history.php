<?php 
/**
 * 	Template Name: Histoire
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
  <div class='histoire'>
    <h4>Notre histoire</h4>
    <p>Clowns Sans Frontières est né de l’initiative du clown catalan <mark>Tortell Poltrona</mark>. En 1993, des enfants d’une école de Barcelone en contact avec des enfants d’une « école » dans un camp de réfugiés en Croatie demandent à l’artiste d’aller jouer dans ce pays. Ils aimeraient que leurs correspondants vivent un moment de magie et de rêve pour oublier quelque peu leur quotidien. Le clown fait valoir que c’est loin … les enfants rétorquent qu’il n’a qu’à faire un plein d’essence ! <br><br>C’est ainsi que s’organise, en plein conflit yougoslave, la première mission de Payasos Sin Fronteras (Clowns Sans Frontières – Espagne) dans les camps de réfugiés de Veli Joseph. La réaction des enfants du camp démontre que le cirque et la poésie sont un remède et une thérapie humaine spectaculaire. Une deuxième expédition s’impose. Des équipes artistiques espagnoles (marionnettistes, danseurs, magiciens, musiciens et clowns) invitent des artistes du circuit international à se joindre pour cette deuxième mission en ex-Yougoslavie. <br><br>
    Quelques mois plus tard, la balle est lancée et Clowns Sans Frontières Canada prend son envol. Au milieu du chaos en Bosnie-Herzégovine, la première mission humanitaire canadienne, accompagnée d’artistes français, se déroule dans des conditions extrêmes alors que le conflit est en cours (Sarajevo, Tuzla et Mostar). </p><br><br>
    <p2>Officiellement, Clowns Sans Frontières Canada né le 22 décembre 1994 et sa première mission internationale fait suite à l’invitation de FENIX – Bosnia and Herzegovia for Children.</p2>
  </div>
</section>
		<body>

     
 
</body>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>