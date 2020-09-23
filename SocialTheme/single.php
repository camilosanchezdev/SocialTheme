<?php get_header(); ?>

<div class="container">

<div class="row">



<div class="col-8">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article class="post resume">
      <div class="title-sp">
      <div class="category"><?php the_category( ', ') ?></div>
        <h1><?php the_title() ?></h1>
      </div>
      
      <div class="meta"><p><?php the_time( get_option( 'date_format' ) ) ?></p> </div>
      <div class="post-content">
      <?php the_post_thumbnail(); ?>
        <?php the_content() ?>
      </div>
    </article>
  <?php endwhile; endif;?>
    
  <div id="comments-area">
    <?php comments_template() ?>
  </div>
  </div> <!-- Cierre col-9  -->
  <?php  get_sidebar()  ?>


<!-- Cierre row -->
</div>
<!-- Cierre container -->
</div>

<?php get_footer(); ?>