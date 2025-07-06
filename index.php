<?php get_header(); ?>

<div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="property">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php 
            // WordPress automatically adds loading="lazy"
            the_post_thumbnail('large', [
              'class' => 'property-image'
            ]); 
          ?>
        <?php endif; ?>

        <h2 class="property-title"><?php the_title(); ?></h2>
        <p class="property-excerpt"><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
