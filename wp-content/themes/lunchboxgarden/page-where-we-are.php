<?php get_header(); ?>
    <div class="page_content">
        <?php
            $args = array('post_type' => 'location');
            $loop = new WP_Query($args);
            while( $loop->have_posts()) : $loop->the_post();
        ?>
            <div class="location">
                <h2><?php the_field('location_name') ?></h2>
                <div class="float_wrapper">
                    <img class="location_img" src="<?php echo the_field('location_image')?>"/>
                    <p class="location_addr"><?php the_field('location_address') ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>
