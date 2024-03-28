<?php get_header(); ?>
<div class="container-900 container">
<main>
    <div>
       <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();?>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
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