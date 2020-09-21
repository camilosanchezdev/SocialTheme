<?php get_header(); ?>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <ul class="navbar-nav mr-auto">
    <?php wp_list_pages('title_li=') ?>
  </ul>
</nav>
<div class="container">

<div class="row">


<div class="col-8">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article class="post resume">
      <h1><?php the_title() ?></h1>
      
      <div class="post-content">
        <?php the_content() ?>
      </div>
    </article>
  <?php endwhile; endif;?>
    
  <?php  get_sidebar()  ?>

<!-- Cierre row -->
</div>
<!-- Cierre container -->
</div>

<?php get_footer(); ?>