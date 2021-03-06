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

<hr/>

<?php $languages = [
  ['<i class="fa-brands fa-html5 language-icon"></i>', 'HTML'],
  ['<i class="fa-brands fa-css3-alt language-icon"></i>', 'CSS'],
  ['<i class="fa-brands fa-sass language-icon"></i>', 'SASS'],
  ['<i class="fa-brands fa-bootstrap language-icon"></i>', 'Bootstrap'],
  ['<i class="fa-brands fa-react language-icon"></i>', 'React'],
  ['<i class="fa-brands fa-js-square language-icon"></i>', 'JavaScript'],
  ['<i class="fa-brands fa-node language-icon"></i>', 'Node.js'],
  ['<i class="fa-brands fa-wordpress-simple language-icon"></i>', 'WordPress'],
  ['<i class="fa-brands fa-php language-icon"></i>', 'PHP']
  ] ?>
<h1 class="section-title text-center pt-4 pb-4">Tech I Use Often</h1>
<div class="row justify-content-center ">
  <?php foreach($languages as $language) : ?>
    <div class="col p-2 language-div text-center">
      <?php echo $language[0]; ?>
      <p><?php echo $language[1]; ?></p>
    </div>
    <?php endforeach; ?>
  </div>
  
  <hr id="projects"/>
  
  <?php $args = array(
    'post_type' => 'post',
    'category_name' => 'project'
  ); 
  ?>
  <?php $arr_posts = new WP_Query( $args ); ?>
  <?php if($arr_posts->have_posts()) : ?>
  <?php $num = 0; ?>

  <h1 class="section-title text-center pt-4 pb-4">Projects</h1>
  <?php while($arr_posts->have_posts()) : ?>
    <?php $arr_posts->the_post(); ?>
    <?php ++$num; ?>
    <div class="row about-section pb-5">
      <div class="col-12 col-md-6 col-lg-5">
        
        <p class="project-title"><?php echo $num++; ?>  /  <?php the_title(); ?></p>
        <p class=""><?php the_excerpt(); ?></p>
        <?php  $fields = get_fields(); ?>
        <?php if( $fields ): ?>
          <p class="post-prev-pub"><?php echo $fields['languages']; ?></p>
          
          <div class="row project-link-row">
            
            <div class="col-4">
              <a href="<?php the_permalink(); ?>" class="project-link">Read More &nbsp;&#8599;</a>
            </div>
            
            <div class="col-4">
              <?php if($fields['github_repo']): ?>
                <a href="<?php echo $fields['github_repo']; ?>" target="_blank" class="project-link">GitHub &nbsp;&#8599;</a>
                <?php else : ?>
                  <p class="private-repo">(Private Repo)</p>
              <?php endif; ?>
            </div>
                
            <div class="col-4">
              <?php if($fields['live_site']): ?>
                <a href="<?php echo $fields['live_site']; ?>" target="_blank" class="project-link">Live Site &nbsp;&#8599;</a>
              <?php endif; ?>
            </div>
                  
        <?php endif; ?>
      </div>
    </div>
              
    <div class="col-12 col-md-6 col-lg-7 pb-md-0 pb-4 project-image-column">
      <image class="project-image image" src="<?php echo the_post_thumbnail_url(); ?>" />
    </div>
      
  </div>
  <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php  $fields = get_fields(); ?>
<?php if( $fields ): ?>
  <hr id="about"/>
  <div class="row section py-5">
    <div class="col-12 col-md-6 col-lg-4 about-image-col">
      <image class="about-image image" src="<?php echo $fields['about_image']; ?>" />
    </div>
    <div class="col-12 col-md-6 col-lg-8 pb-md-0 pb-2">
      <div class="about-content">
        <h1 class="section-title"><?php echo $fields['about_title']; ?></h1>
        <p class="about-content2"><?php echo $fields['about_content']; ?></p>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>