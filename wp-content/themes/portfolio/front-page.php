<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post();?>
    <div class="jumbotron spotlight row">
      <div class="col-md-6 col-12 align-self-end spotlight-left">
        <div class="front-spotlight-text">
          <p class="front-header">Hello, I'm </br>Chase Sheaff</p>
          <p class="front-subheader">Software engineer with strong soft skills to learn any hard skill required.</p>
        </div>
        <div class="front-circle"></div>
      </div>
      <div class="col-md-6 col-12 spotlight-right">
        <img class="spotlight-image" src="<?php the_post_thumbnail();"" ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>