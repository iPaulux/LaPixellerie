<?php
//Template Name: about
	get_header();
?>
	<section id="hero">
		<h1>Qui sommes <span class="keyword">nous</span> ? </h1>
		<h3>On vous leak tout sur nous !</h3>
	</section>
	<section class="pres">
		<img data-aos="fade-right" src="<?php bloginfo('template_url') ?>/assets/img/lesgrosgeek.png">
		<p data-aos="fade-left">La <span class="boldword">Pixellerie</span>, c’est <span class="keyword">l’association des passionnés</span> de jeux vidéo qui souhaitent aller au-delà du simple plaisir de jouer pour se plonger dans la création. Développeurs, designers, scénaristes, musiciens ou simples curieux : ici, chaque talent trouve sa place pour imaginer et concevoir ensemble des univers uniques et captivants.</p>
	</section>
	<section class="planning">
		<h2>Le<span class="keyword"> planning</span></h2>
		<div class="pcards">
			<div data-aos="zoom-out" class="pcard">
				<img src="<?php bloginfo('template_url') ?>/assets/img/image6.png">
				<div class="pinfos">
					<div class="ptop">
						<p class="pitre">Game Jam</p>
						<p class="date">10/01/25</p>
					</div>
					<p class="pexte">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt earum animi nam aperiam. </p>
				</div>
			</div>
			<div data-aos="zoom-out" class="pcard">
				<img src="<?php bloginfo('template_url') ?>/assets/img/image6.png">
				<div class="pinfos">
					<div class="ptop">
						<p class="pitre">Game Jam</p>
						<p class="date">10/01/25</p>
					</div>
					<p class="pexte">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt earum animi nam aperiam. </p>
				</div>
			</div>
			<div data-aos="zoom-out" class="pcard">
				<img src="<?php bloginfo('template_url') ?>/assets/img/image6.png">
				<div class="pinfos">
					<div class="ptop">
						<p class="pitre">Game Jam</p>
						<p class="date">10/01/25</p>
					</div>
					<p class="pexte">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt earum animi nam aperiam. </p>
				</div>
			</div>
		</div>
		<a href="PXLR/contact">Voir plus</a>
		
	</section>
	<section class="team">
		<div data-aos="fade-right" class="cardteam">
			<img src="<?php bloginfo('template_url') ?>/assets/img/image10.png">
			<p class="nom">Patrogon Quick</p>
			<p class="role">Fondateur</p>
		</div>
		<div data-aos="fade-left" class="cardteam">
			<img src="<?php bloginfo('template_url') ?>/assets/img/image9.png">
			<p class="nom">Guillaume leGoat</p>
			<p class="role">Co-Fondateur</p>
		</div>
	</section>
	<?php
		get_footer();
	?>