<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post();?>
    <div class="jumbotron spotlight row">
      <div class="col-6">
        <h1 class="display-4">Hello, I'm Chase Sheaff</h1>
        <p class="lead">Software engineer, with strong soft skills.</p>
      </div>
      <div class="col-6">
        <img class="spotlight-image"><?php the_post_thumbnail(); ?></img>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>