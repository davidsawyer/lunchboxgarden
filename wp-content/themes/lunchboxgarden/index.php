<?php get_header(); ?>
<ul class="rslides" id="slideshow">
    <?php
        $args = array('post_type' => 'slideshow_photo');
        $loop = new WP_Query($args);
        while( $loop->have_posts()) : $loop->the_post();
    ?>
    <li><img src="<?= the_attachment_link();?>"/></li>
    <?php endwhile; ?>
</ul>

<?php get_footer(); ?>
