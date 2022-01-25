<?php get_header(); ?>

<p><a href="javascript:history.go(-1)"><- Back</a></p>

<?php
  while(have_posts()){
    the_post(); ?>
    <div>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
      <p><?php the_author(); ?></p>
      <p><?php the_time('F j, Y'); ?></p>
      <hr>
      <p><?php the_content(); ?></p>
    </div>
<?php } ?>

<?php get_footer(); ?>