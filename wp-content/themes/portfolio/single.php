<?php get_header(); ?>

<?php
  while(have_posts()){
    the_post(); ?>
    <div class="single-blog"> 
        <a class="post-thumbnail" href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <?php echo '<img src="http://localhost:8888/chasethecoder/wp-content/uploads/2022/02/clint-patterson-dYEuFB8KQJk-unsplash-scaled.jpg" />'; ?>
          <?php endif; ?>
        </a>
        <a class="post-prev-title pt-3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php  $fields = get_fields(); ?>
        <?php if( $fields ): ?>
          <p class="post-prev-pub"><?php echo $fields['languages'] ?></p>
          <?php endif; ?>
          <p class="post-prev-cat"><?php echo get_the_category_list(' '); ?></p>
          <p class="post-prev-excerpt"><?php the_content(); ?></p>
          <p class="post-prev-pub">Published by <b><?php the_author(); ?></b> on <b><?php the_time('F j, Y'); ?></b></p>
      </div>
<?php } ?>

<p><a href="javascript:history.go(-1)"><- Back</a></p>

<?php get_footer(); ?>