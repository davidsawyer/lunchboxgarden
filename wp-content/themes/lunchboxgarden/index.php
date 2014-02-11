<?php get_header(); ?>
<div class="slideshow_container">
    <ul class="rslides rslides1_nav next" id="slideshow">
        <?php
            $args = array('post_type' => 'slideshow_photo');
            $loop = new WP_Query($args);
            while( $loop->have_posts()) : $loop->the_post();
        ?>
        <li><img src="<?= the_field('photo') ?>"></li>
        <?php endwhile; ?>
    </ul>
</div>

<?php get_footer(); ?>
