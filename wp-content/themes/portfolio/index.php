<?php get_header(); ?>

<div class="jumbotron spotlight row pb-5">
  <div class="col-md-6 col-12 blog-left">
    <?php if ( is_home() ) : ?>
      <img src="<?php echo get_the_post_thumbnail_url(23,'full'); ?>" alt="header" />
      <?php else  : ?>
        <img src="<?php echo get_the_post_thumbnail_url('full'); ?>" alt="header" />
    <?php endif; ?>
  </div>
  <div class="col-md-6 col-12 align-self-end blog-right">
      <p class="front-header-blog">Blog.</p>
    <div class="front-circle"><?php get_field('page_subheader'); ?></div>
  </div>
</div>

<hr/>

<div class="row">
  <div class="col-4 search-by">
    <p>Search By Topic</p>
    <p>career change, anchor chart</p>
  </div>
  <div class="col-8">
   <?php 
    while(have_posts()):
      the_post(); ?>
      <div>
        <a class="post-thumbnail" href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <?php echo '<img src="http://localhost:8888/chasethecoder/wp-content/uploads/2022/02/clint-patterson-dYEuFB8KQJk-unsplash-scaled.jpg" />'; ?>
          <?php endif; ?>
        </a>
        <a class="post-prev-title" href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
        <p class="post-prev-excerpt"><?php the_excerpt(); ?></p>
        <p class="post-prev-pub">Published by <b><?php the_author(); ?></b> on <b><?php the_time('F j, Y'); ?></b></p>
        <p class="post-prev-cat"><?php echo get_the_category_list(' '); ?></p>
      </div>
      <hr/>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>