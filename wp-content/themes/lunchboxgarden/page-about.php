<?php get_header(); ?>
    <div class="page_content">
        <h2 class="about_heading">Our Story</h2>
        <p><?php the_field('our_story') ?></p>
        <h2 class="about_heading">Our Mission</h2>
        <p><?php the_field('our_mission') ?></p>
        <h2 class="about_heading">Our Leaders</h2>
        <?php
            $args = array('post_type' => 'board_member');
            $loop = new WP_Query($args);
            while( $loop->have_posts()) : $loop->the_post();
        ?>
            <div class="board_wrapper">
                <img class="board_headshot" src="<?php echo the_field('board_member_image')?>"/>
                <p class="board_info"><?php the_field('position')?></p>
                <p class="board_info"><?php the_field('name')?></p>
            </div>
        <? endwhile; ?>
    </div>
<?php get_footer(); ?>
