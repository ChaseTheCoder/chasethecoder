<?php get_header(); ?>

<div class="jumbotron spotlight row pb-5">
  <div class="col-md-6 col-12 blog-left">
    <?php if ( is_home() ) : ?>
      <img src="<?php echo get_the_post_thumbnail_url(23,'full'); ?>" alt="header" />
      <?php else  : //this is sill and need to fix ?>
        <img src="<?php echo get_the_post_thumbnail_url(23, 'full'); ?>" alt="header" />
    <?php endif; ?>
  </div>
  
  <div class="col-md-6 col-12 align-self-end blog-right">
      <p class="front-header-blog">Blog.</p>
    <div class="blog-circle"><?php get_field('page_subheader'); ?></div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4 pb-4 archive-search-col">
    <p>Search By Topic</p>
    <a class="post-search-category" href="<?php echo site_url('/blog'); ?>" >All categories</a>
    <?php $categories = get_categories();
    // get the category object for the current category
    $thisTrueCat = get_category( get_query_var( 'cat' ) );
      foreach($categories as $category) :
        if ($thisTrueCat->term_id == $category->term_id) :
          echo '<a class="post-search-category selected-category" href="' . get_category_link($category->term_id) . '" >' . $category->name . '</a>';
        else:
          echo '<a class="post-search-category" href="' . get_category_link($category->term_id) . '" >' . $category->name . '</a>';
        endif;
      endforeach;
      ?>
  </div>

  <div class="col-12 col-md-8 archive-post-col">
   <?php if(have_posts()): ?>
      <?php while(have_posts()): ?>
        <?php the_post(); ?>
          <hr/>
        <div>
          <a class="post-thumbnail" href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                  <?php echo '<img src="http://localhost:8888/chasethecoder/wp-content/uploads/2022/02/clint-patterson-dYEuFB8KQJk-unsplash-scaled.jpg" />'; ?>
            <?php endif; ?>
          </a>
          <div class="py-3">
            <a class="post-prev-title" href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
            <p class="post-prev-cat"><?php echo get_the_category_list(' '); ?></p>
            <p class="post-prev-excerpt"><?php the_excerpt(); ?></p>
            <p class="post-prev-pub">Published by <b><?php the_author(); ?></b> on <b><?php the_time('F j, Y'); ?></b></p>
          </div>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php else: ?>
        <p class="post-prev-excerpt">Posts coming soon...</p>
      <?php endif; ?>
  </div>

</div>

<?php get_footer(); ?>