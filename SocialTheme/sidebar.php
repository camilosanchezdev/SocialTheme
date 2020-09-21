<aside class="col-3 sidebar">
    <div id="logo">
        <a href="<?php echo get_site_url( )?>"><img alt="<?php bloginfo( 'name' )?>" title="<?php bloginfo( 'name' )?>" src="https://21g6p436jemo16mo9n1a25yq-wpengine.netdna-ssl.com/v6/wp-content/uploads/sites/6/2015/05/oshine-v6-logo-black.png" /></a>
    </div>
    
    <div class="list-pages">
    <ul>
    <?php wp_list_pages('title_li=') ?>
    </ul>
    </div>
    <?php if(is_active_sidebar( 'main_sidebar' )) {
        dynamic_sidebar( 'main_sidebar' );
    } else { ?>
        <div class="widget">
            <h3 class="widget-title"><?php _e('Buscar', 'apk'); ?></h3>
            <?php get_search_form(); ?>
        </div>
    <?php } ?>
</aside>