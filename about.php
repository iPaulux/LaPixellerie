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
	</section><section class="planning">
    <h2>Le<span class="keyword"> planning</span></h2>
    <div class="pcards">
        <?php
        $recent_events = get_posts(array(
            'post_type'      => 'event',
            'posts_per_page' => 3, // Récupérer les 3 plus récents
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if (!empty($recent_events)) {
            foreach ($recent_events as $event) {
                $event_id = $event->ID;
                $event_title = get_the_title($event_id);
                $event_date = get_the_date('d/m/Y', $event_id);
                $event_excerpt = get_the_excerpt($event_id);
                $event_link = get_permalink($event_id);
                $event_image = get_the_post_thumbnail_url($event_id, 'medium'); // Récupère l’image mise en avant
                if (!$event_image) {
                    $event_image = get_template_directory_uri() . '/assets/img/image6.png'; // Image par défaut
                }
                ?>
                
                <div data-aos="zoom-out" class="pcard">
                    <img class ="cardimg" src="<?php echo esc_url($event_image); ?>" alt="<?php echo esc_attr($event_title); ?>">
                    <div class="pinfos">
                        <div class="ptop">
                            <p class="pitre"><a href="<?php echo esc_url($event_link); ?>"><?php echo esc_html($event_title); ?></a></p>
                            <p class="date"><?php echo esc_html($event_date); ?></p>
                        </div>
                        <p class="pexte"><?php echo esc_html($event_excerpt); ?></p>
                    </div>
                </div>

                <?php
            }
        } else {
            echo "<p>Aucun événement récent trouvé.</p>";
        }
        ?>
    </div>
  
</section>

	<?php
		get_footer();
	?>