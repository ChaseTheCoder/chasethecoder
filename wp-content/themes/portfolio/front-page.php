<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post();?>
    <div class="jumbotron spotlight row pb-5">
      <div class="col-md-6 col-12 align-self-end spotlight-left">
          <p class="front-header">Hello, I'm </br>Chase Sheaff.</p>
          <p class="front-subheader">Software engineer with strong soft skills to learn any hard skill required.</p>
        <div class="front-circle"></div>
      </div>
      <div class="col-md-6 col-12 spotlight-right">
        <?php the_post_thumbnail();?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php  $fields = get_fields(); ?>
<?php if( $fields ): ?>
  <hr/>
  <div class="row section about-section py-5">
    <div class="col-12 col-md-6 col-sm-push-6 col-lg-4">
      <image class="about-image image" src="<?php echo $fields['about_image']; ?>" />
    </div>
    <div class="col-12 col-md-6 col-sm-pull-6 col-lg-8 pb-md-0 pb-2">
      <div class="about-content">
        <h1 id="#about" class="about-title"><?php echo $fields['about_title']; ?></h1>
        <p class="about-content2"><?php echo $fields['about_content']; ?></p>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php get_footer(); ?>