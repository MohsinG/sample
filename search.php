<?php get_header(); ?>
<main>
    <div>
       <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();?>
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <a class="button" href="<?php the_permalink(); ?>">Read More</a>
        <?php 
        endwhile;
      else :
        echo '<p>No content found.</p>';
      endif;
    ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>