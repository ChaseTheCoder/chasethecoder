<?php get_header(); ?>

<?php 
  while(have_posts()){
    the_post(); ?>
    <div>
      <a class="post-thumbnail" href="<?php the_permalink(); ?>">
        <?php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          }
          else {
              echo '<img src="http://localhost:8888/chasethecoder/wp-content/uploads/2022/02/clint-patterson-dYEuFB8KQJk-unsplash-scaled.jpg" />';
        }?>
      </a>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_author(); ?></p>
      <p><?php the_time('F j, Y'); ?></p>
      <p><?php the_excerpt(); ?></p>
      <p><?php echo get_the_category_list(', '); ?></p>
    </div>
  <?php } ?>

<?php get_footer(); ?>