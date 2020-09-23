<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( ' | ', true, 'right' )?><?php bloginfo( 'name' )?></title>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" 
      type="image/png" 
      href="<?php echo get_home_url(); ?>/wp-content/themes/SocialTheme/assets/faviconsocial.png"> 
</head>
<body>
    <header>
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_home_url(); ?>/wp-content/themes/SocialTheme/assets/logo.png" alt=""></a>
    </header> 
    <nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
  <?php wp_list_categories('title_li' ); ?> 
  <script>
jQuery(document).ready(function($) {
    $('li.cat-item').addClass('nav-item');
}); 
</script>
</ul>

  </div>
</nav>