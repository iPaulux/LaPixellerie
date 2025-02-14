<?php
//Template Name: project
	get_header();
?>
	<section id="hero">
		<h1>Nos <span class="keyword">project<span></h1>
		<h3>Les réalisations de nos petits cracks</h3>
	</section>
	<section class="projects">
        <div class="events">
    <?php
    $recent_projects = get_posts(array(
        'post_type'      => 'projet', // Changement de "event" à "projet"
        'posts_per_page' => 3, // Récupérer les 3 plus récents
        'orderby'        => 'date',
        'order'          => 'DESC'
    ));

    if (!empty($recent_projects)) {
        foreach ($recent_projects as $project) {
            $project_id = $project->ID;
            $project_title = get_the_title($project_id);
            $project_date = get_the_date('d/m/Y', $project_id);
            $project_excerpt = get_the_excerpt($project_id);
            $project_link = get_permalink($project_id);
            $project_image = get_the_post_thumbnail_url($project_id, 'medium');
            $project_link = get_post_meta($project_id, 'Link', true); // Récupération du champ personnalisé "link"
            

            // Image par défaut si pas d'image mise en avant
            if (!$project_image) {
                $project_image = get_template_directory_uri() . '/assets/img/image5.png';
            }

            // Lien par défaut si "link" est vide
            if (!$project_link) {
                $project_link = '#';
            }
            

            // Image par défaut si pas d'image mise en avant
            if (!$project_image) {
                $project_image = get_template_directory_uri() . '/assets/img/image5.png';
            }
            ?>
            
            <div data-aos="zoom-out" class="event">
                <img class="pimg" src="<?php echo esc_url($project_image); ?>" alt="<?php echo esc_attr($project_title); ?>">
                <div class="pinfos2">
                    <div class="ptop">
                        <p class="pitre"><?php echo esc_html($project_title); ?></p>
                        <p class="date"><?php echo esc_html($project_date); ?></p>
                    </div>
                    <p class="pexte"><?php echo esc_html($project_excerpt); ?></p>
                    <a class="ebutton" href="<?php echo esc_html($project_link); ?>">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.3335 11.6667V28.3334H11.6668" stroke="#7A4ECE" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.6668 11.6667L28.3335 28.3334" stroke="#7A4ECE" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="elink" >Voir le projet</p>
                    </a>
                </div>
            </div>

            <?php
        }
    } else {
        echo "<p>Aucun projet récent trouvé.</p>";
    }
    ?>
</section>




	<?php
		get_footer();
	?>