<?php

// Main css + Bootstrap css

function apk_load_styles(){
    //wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    //wp_enqueue_style('theme_style');
}

add_action('wp_enqueue_scripts', 'apk_load_styles');


// JS from Bootstrap
function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');



// Add .class navbar list

function wp_list_pages_filter($output) {
  $output = str_replace('page_item', 'page_item nav-item', $output);
  return $output;
}
add_filter('wp_list_pages', 'wp_list_pages_filter');




function apk_register_sidebars() {

  register_sidebar( array (
    'name' => __('Sidebar principal', 'apk'), 
    'id' => 'main_sidebar',
    'description' => __('Este es el sidebar principal', 'apk'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
   ) );

}
add_action( 'widgets_init','apk_register_sidebars' );

// Add thumbnails

add_theme_support( 'post-thumbnails' );








// SHARE BUTTONS

// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular() || is_home()){
    
        // Get current page URL 
        $sb_url = urlencode(get_permalink());
 
        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());
        
        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
 
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        // $bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
        // $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
        // $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

      //  if(!empty($sb_thumb)) {
      //       $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
      //   }
      //   else {
      //       $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
      //   }
 
        // Based on popular demand added Pinterest too
        // $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        // $gplusURL ='https://plus.google.com/share?url='.$sb_title.'';
 
        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box"><div class="social-btn">';
        $content .= '<a class="col-6 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span>Share on twitter</span></a>';
        $content .= '<a class="col-6 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span>Share on facebook</span></a>';
        // $content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span>WhatsApp</span></a>';
        // $content .= '<a class="col-2 sbtn s-googleplus" href="'.$googleURL.'" target="_blank" rel="nofollow"><span>Google+</span></a>';
        // $content .= '<a class="col-2 sbtn s-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank" rel="nofollow"><span>Pin It</span></a>';
        // $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span>LinkedIn</span></a>';
        // $content .= '<a class="col-2 sbtn s-buffer" href="'.$bufferURL.'" target="_blank" rel="nofollow"><span>Buffer</span></a>';
        $content .= '</div></div>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
// Enable the_content if you want to automatically show social buttons below your post.

 add_filter( 'the_time', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');



?>
