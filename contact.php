<?php
//Template Name: contact
	get_header();
?>
	<section id="hero" class="maincontact">
		<h1>Envie de nous <span class="keyword"><br>rejoindre ?<span></h1>
		<h3>On vous accueil bras ouvert dans la squad !</h3>
	</section>
	<section class="coord">
		<div data-aos="fade-right" class="map"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=43%20rue%20quaie%20de%20juillet%20caen+(La%20Pixellerie)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
		<div data-aos="fade-left" class="cinfos">
			<h2>Nos <span class="keyword">horaires</span></h2>
			<div class="horaire">
				<div class="days">
					<div class="day">
						<p>Mardi</p>
						<p class="keyword">19 H - 21H</p>
					</div>
					<div class="day">
						<p>Mercredi</p>
						<p class="keyword">17 H - 19H</p>
					</div>
				</div>
				
			</div>
			<h2>Nous <span class="keyword">contactez</span></h2>
			<div class="contact">
				
				<div class="mail">
					<svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M50 10H10C7.23858 10 5 12.2386 5 15V45C5 47.7614 7.23858 50 10 50H50C52.7614 50 55 47.7614 55 45V15C55 12.2386 52.7614 10 50 10Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M55 17.5L32.575 31.75C31.8032 32.2336 30.9108 32.49 30 32.49C29.0892 32.49 28.1968 32.2336 27.425 31.75L5 17.5" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<a href="mailto:contact@lapixellerie.fr">contact@lapixellerie.fr</a>
				</div>
				<div class="linkedin">
					<svg width="40" height="40" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M36.6667 18.8334C40.3135 18.8334 43.8108 20.282 46.3895 22.8607C48.9681 25.4393 50.4167 28.9366 50.4167 32.5834V48.625H41.2501V32.5834C41.2501 31.3678 40.7672 30.202 39.9077 29.3425C39.0481 28.4829 37.8823 28 36.6667 28C35.4512 28 34.2854 28.4829 33.4258 29.3425C32.5663 30.202 32.0834 31.3678 32.0834 32.5834V48.625H22.9167V32.5834C22.9167 28.9366 24.3654 25.4393 26.944 22.8607C29.5227 20.282 33.02 18.8334 36.6667 18.8334Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M13.7499 21.125H4.58325V48.625H13.7499V21.125Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9.16659 14.25C11.6979 14.25 13.7499 12.198 13.7499 9.66671C13.7499 7.1354 11.6979 5.08337 9.16659 5.08337C6.63528 5.08337 4.58325 7.1354 4.58325 9.66671C4.58325 12.198 6.63528 14.25 9.16659 14.25Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<a href="https://www.linkedin.fr">La Pixellerie Association</a>
				</div>
			</div>
		</div>
	</section>
	<h2 id="midp">Le <span class="keyword" >planning</span></h2>
	<section class="rdv">
		
		<div data-aos="zoom-out" class="event">
				<img src="<?php bloginfo('template_url') ?>/assets/img/image5.png">
				<div class="einfos">
					<div class="etop">
						<p class="etitle">Game Jam</p>
						<p class="edate">10/01/25</p>
					</div>
					<p class="edesc">Week-end intense et convivial où développeurs, graphistes, musiciens et scénaristes unissent leurs talents pour concevoir un jeu vidéo en temps limité.</p>
					
				</div>
			</div>
	</section>
	<?php
		get_footer();
	?>