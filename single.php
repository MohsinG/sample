<?php get_header(); ?>
<main>
    <div>
       <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();?>
          <h3><?php the_title(); ?></h3>
          <p class="post-info">

            <?php 
                echo "Written by: " . get_the_author(); 
                echo " <br /> "; 
                echo "Published on " . get_the_date();
            ?>
    
            </p>
            <div class="post-featured-image">

                <?php the_post_thumbnail("large"); ?>

            </div>
        <?php 
        endwhile;
      else :
        echo '<p>No content found.</p>';
      endif;
    ?>
    </div>
</main>

<?php get_footer(); ?>