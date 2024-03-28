<?php get_header(); ?>
<main>
    <div>
    <h1>Blog:</h1>
       <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();?>
          <h3><?php the_title(); ?></h3>
          <p class="post-info">
          <!--test comment -->
            <?php 
                echo "Written by: " . get_the_author(); 
                echo " <br /> "; 
                echo "Published on " . get_the_date();
            ?>
    
            </p>
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