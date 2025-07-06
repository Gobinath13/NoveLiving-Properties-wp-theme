<?php get_header(); ?>

<main>
    <section>
        <h2></h2>
        <p></p>
    </section>

    <section>
        <h3></h3>
        <?php
        $testimonials = new WP_Query(array('post_type' => 'testimonial'));
        if ($testimonials->have_posts()) :
            while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <div class="testimonial">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No testimonials found.</p>';
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
