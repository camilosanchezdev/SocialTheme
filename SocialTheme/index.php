<?php get_header(); ?>
<!-- <nav class="navbar navbar-dark bg-dark">
   Navbar content
   <ul class="navbar-nav mr-auto">
   <?php//wp_list_pages('title_li=') ?>
  </ul>
</nav> -->
<div class="container">

<div class="featured">
<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="post-content">
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    
      <div class="img-thumb">
      <a href="<?php the_permalink() ?>"><img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo get_the_post_thumbnail_url() ?>" style="width:100%; height:100%;"></a>
      </div>
      
</div>
   
<?php endwhile; endif; ?>
</div> <!-- en featured -->
<div class="row">


<div class="col-9 posts">
<h2>More Stories</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
    <div class="post-content">
      <div class="img-thumb">
        <a href="<?php the_permalink() ?>"><img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo get_the_post_thumbnail_url() ?>" style="width:100%; height:250px;"></a>
      </div>
      <div class="post-head">
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <small class="meta"> <?php the_category( ', ') ?></small>
      </div>
      
      
      </div>
    </article>
  <?php endwhile; else : ?>
    <article class="post resume">
      <h2><?php _e('No hay contenidos disponibles', 'apk') ?></h2>
     
      <div class="post-content">
        <p><?php _e('No hay contenido que corresponda con esta página, por favor realiza una búsqueda para encontrar lo que deseas ver', 'apk') ?></p>
        <?php get_search_form() ?>
      </div>
    </article>
  
  <?php endif; ?>


</div>
<?php  get_sidebar()  ?>

<?php if(get_next_post_link() || get_previous_post_link()) { ?>
  <div class="post-nav">
    <?php next_posts_link(__('&larr; Anteriores', 'apk')); ?>
    <?php previous_posts_link(__('Siguientes &rarr;', 'apk')); ?>
  </div>

<?php } ?>
<!-- Cierre row -->
</div>
<!-- Cierre container -->
</div>

<?php get_footer(); ?>