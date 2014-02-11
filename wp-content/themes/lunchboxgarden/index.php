<?php get_header(); ?>
<div id="slideshow_container">
    <ul class="rslides" id="slideshow">
        <?php
            $args = array('post_type' => 'slideshow_photo');
            $loop = new WP_Query($args);
            while( $loop->have_posts()) : $loop->the_post();
        ?>
        <li><img src="<?= the_field('photo') ?>"></li>
        <?php endwhile; ?>
    </ul>
    <a href="#" class="rslides1_nav prev"><p id="back" class="slider_nav">&#10094;</p></a>
    <a href="#" class="rslides1_nav next"><p id="forward" class="slider_nav">&#10095;</p></a>
</div>

<?php get_footer(); ?>
