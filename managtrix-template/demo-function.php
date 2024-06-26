<?php

/**
 * softfind functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softfind
 */

// Enqueue Stylesheets
function softfind_theme_styles()
{

  wp_enqueue_style('stylesheet-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.3.0');
  wp_enqueue_style('stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.0');
  wp_enqueue_style('stylesheet-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
  wp_enqueue_style('stylesheet-theme', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'softfind_theme_styles');

// Enqueue Scripts
function softfind_theme_scripts()
{
  wp_enqueue_script('script-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
  wp_enqueue_script('script-main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'softfind_theme_scripts');

// Adding new features to WordPress theme 
function softfind_theme_supports()
{
  // enable the title tag
  add_theme_support('title-tag');

  // enable post thumbnails
  add_theme_support('post-thumbnails');

  // enable HTML5 support for the search form
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    )
  );

  // enable custom logo
  add_theme_support('custom-logo');

  // enable selective refresh for widgets in the Customizer
  add_theme_support('customize-selective-refresh-widgets');

  // enable automatic feed links
  add_theme_support('automatic-feed-links');

  // enable post formats
  add_theme_support(
    'post-formats',
    array(
      'aside',
      'gallery',
      'quote',
      'image',
      'video'
    )
  );

  // enable navigation menus
  register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'softfind'),
    'footer' => esc_html__('Footer Menu', 'softfind'),
  ));

  // enable responsive embeds
  add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'softfind_theme_supports');

// Add shortcode support to the_content
function softfind_add_shortcode_support()
{
  add_filter('the_content', 'do_shortcode', 11);
}
add_action('after_setup_theme', 'softfind_add_shortcode_support');

// Remove the breadcrumb schema and property from the webpage schema
add_filter('wpseo_schema_graph_pieces', 'remove_breadcrumbs_from_schema', 11, 2);
add_filter('wpseo_schema_webpage', 'remove_breadcrumbs_property_from_webpage', 11, 1);

/**
 * Removes the breadcrumb graph pieces from the schema collector.
 *
 * @param array  $pieces  The current graph pieces.
 * @param string $context The current context.
 *
 * @return array The remaining graph pieces.
 */
function remove_breadcrumbs_from_schema($pieces, $context)
{
  return \array_filter($pieces, function ($piece) {
    return !$piece instanceof \Yoast\WP\SEO\Generators\Schema\Breadcrumb;
  });
}

/**
 * Removes the breadcrumb property from the WebPage piece.
 *
 * @param array $data The WebPage's properties.
 *
 * @return array The modified WebPage properties.
 */
function remove_breadcrumbs_property_from_webpage($data)
{
  if (array_key_exists('breadcrumb', $data)) {
    unset($data['breadcrumb']);
  }
  return $data;
}

/**
 * Removes the title form the breadcrumb.
 *
 * @param array $data The WebPage's properties.
 *
 * @return array The modified WebPage properties.
 */

//   add_filter( 'wpseo_breadcrumb_links', 'exclude_post_title', 10, 1 );

//   function exclude_post_title( $links ) {
// 	if ( is_singular( 'post' ) ) {
// 		array_pop( $links ); // remove the second item from the array
// 	}
// 	return $links;
//   }


// Register widgets
add_action('widgets_init', function () {
  register_sidebar(
    array(
      'id' => 'social_icons',
      'name' => __('social_icons'),
      'description' => __('social_icons'),
      'before_widget' => '<li id="%1$s" class="list-unstyled %2$s">',
      'after_widget' => "</li>",
      'before_title' => '<div class="h4 border-bottom-3 py-3 w-100">',
      'after_title' => "</div>"
    )
  );
  register_sidebar(
    array(
      'id' => 'foot_category',
      'name' => __('foot_category'),
      'description' => __('foot_category'),
      'before_widget' => '<ul id="%1$s" class="list-unstyled %2$s">',
      'after_widget' => "</ul>",
      'before_title' => null,
      'after_title' => null
    )
  );
  register_sidebar(
    array(
      'id' => 'main_links',
      'name' => __('main_links'),
      'description' => __('main_links'),
      'before_widget' => '<li id="%1$s" class="list-unstyled %2$s">',
      'after_widget' => "</li>",
      'before_title' => '<div class="h4 border-bottom-3 py-3 w-100">',
      'after_title' => "</div>"
    )
  );
});

class Site_Social extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      'site_social',
      __('Site Social', 'softfind'),
      array('description' => __('Site Social', 'softfind'),)
    );
  }

  public function widget($args, $instance)
  {
    echo $args['before_widget'];
    if (!empty($instance['title'])) {
      echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
    }
    if (!empty($instance['text'])) {
      echo '<p>' . $instance['text'] . '</p>';
    }
    echo $args['after_widget'];
  }

  public function form($instance)
  {
    $title = !empty($instance['title']) ? $instance['title'] : __('New title', 'softfind');
    $text = !empty($instance['text']) ? $instance['text'] : '';
?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text:'); ?></label>
      <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_attr($text); ?></textarea>
    </p>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
    $instance['text'] = (!empty($new_instance['text'])) ? sanitize_textarea_field($new_instance['text']) : '';
    return $instance;
  }
}

function my_register_widget()
{
  register_widget('Site_Social');
}
add_action('widgets_init', 'my_register_widget');

function site_social_shortcode($atts)
{
  ob_start();
  the_widget('site_social', $atts);
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}
add_shortcode('site_social', 'site_social_shortcode');

// Removes the filter that sanitizes HTML tags from the user bio field
remove_filter('pre_user_description', 'wp_filter_kses');

// Modifies the title displayed on the archive page based on the type of page being displayed
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_tax()) { //for custom post types
    $title = sprintf(__('%1$s'), single_term_title('', false));
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  }
  return $title;
});

// Remove unwanted SVG filter injection in WordPress (like wp-duotone) and remove the WordPress emoji code
function remove_unwanted_scripts()
{
  remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
  remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'remove_unwanted_scripts');

// Add custom classes to wp_nav_menu <li> and <a> elements
function custom_menu_classes($classes, $item, $args, $depth)
{
  $classes[] = 'nav-item';
  $args->link_class = 'nav-link';
  return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_classes', 10, 4);
add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
  $atts['class'] = isset($args->link_class) ? $args->link_class : '';
  return $atts;
}, 10, 4);

/**
 * Additional Helper Functions
 */

// Get authors details
function get_authors()
{
  $authors = get_users(array(
    'has_published_posts' => true,
    'orderby' => 'display_name',
    'order' => 'ASC',
    'exclude' => array(1),
  ));

  $output = array();
  foreach ($authors as $author) {
    $author_id = $author->ID;
    $author_name = $author->display_name;
    $author_link = get_author_posts_url($author_id);
    $author_avatar = get_avatar_url($author_id);
    $author_content = get_the_author_meta('description', $author_id);
    $first_paragraph = wp_strip_all_tags(get_extended($author_content)['main']);
    if (!empty($author_content) && empty($first_paragraph)) {
      $first_paragraph = wp_strip_all_tags($author_content);
    }
    // $first_paragraph = wpautop( strip_tags( $author_content ) );
    // $first_paragraph = substr( $first_paragraph, 0, strpos( $first_paragraph, '</p>' ) + 4 );
    $word_count = str_word_count(strip_tags($first_paragraph));
    $social_links = array();

    preg_match_all('/(https?:\/\/(?:www\.)?(?:facebook|fb)\.com\/\S+)|(https?:\/\/(?:www\.)?twitter\.com\/\S+)|(https?:\/\/(?:www\.)?linkedin\.com\/\S+)|(https?:\/\/(?:www\.)?instagram\.com\/\S+)/i', $author_content, $matches);

    if (!empty($matches[0])) {
      foreach ($matches[0] as $match) {
        $social_links[] = $match;
      }
    }

    $output[] = array(
      'name' => $author_name,
      'uri' => $author_link,
      'avatar' => $author_avatar,
      'description' => ($word_count <= 9 && $word_count !== 0 ? $first_paragraph : ''),
      'social links' => array_map(function ($link) {
        $network = (strpos($link, 'facebook.com') !== false) ? 'facebook' : ((strpos($link, 'twitter.com') !== false) ? 'twitter' : ((strpos($link, 'linkedin.com') !== false) ? 'linkedin' : 'instagram'));
        return array(
          'name' => $network,
          'uri' => $link
        );
      }, $social_links),
    );
  }

  return $output;
}

// Calculate estimated reading time for a post
function calculate_reading_time($post_id, $words_per_minute = 200)
{
  $content = get_post_field('post_content', $post_id);
  $word_count = str_word_count(strip_tags($content));
  $minutes = floor($word_count / $words_per_minute);
  $seconds = floor(($word_count % $words_per_minute) / ($words_per_minute / 60));
  $est = $minutes . ' min' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' sec' . ($seconds == 1 ? '' : 's');
  return $est;
}

function get_fact_author($fact_auth)
{
  $author_nickname = explode(" ", $fact_auth)[0];
  global $wpdb;
  $author_id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->users WHERE user_login LIKE %s", $author_nickname . '%'));

  if ($author_id) {
    return '
            <div class="auth-at d-flex align-items-center me-5 mt-md-0 mt-3">
                <div class="auth-img me-3 mt-1 ">
                    <a href="' . get_author_posts_url($author_id) . '">
                        ' . get_avatar($author_id, null, null, $author_nickname, array('class' => array('img-fluid, rounded-circle'))) . '
                    </a>
                </div>
                <div class="author-info">Checked by
                    <a href="' . get_author_posts_url($author_id) . '">
                        ' . $fact_auth . '
                    </a>
                </div>
            </div>
        ';
  }
}

function toc_generate_table_of_contents()
{
  global $post;

  $content = $post->post_content;

  $output = '<div class="table-of-content">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    <p class="accordion-header" id="headingone">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                        data-bs-target="#tablecollapse" aria-expanded="false" aria-controls="collapseOne">
                        ' . __('Table of Contents', 'toc') . '
                        </button>
                    </p>
                    <div id="tablecollapse" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">';
  $output .= '<ul>';

  if (preg_match_all('/<h([2-3]).*?>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER)) {

    $current_level = 0;
    $counter = array(0, 0, 0, 0, 0, 0);
    $sublist_open = false;

    foreach ($matches as $match) {
      $level = $match[1];
      $title = $match[2];
      $slug = sanitize_title_with_dashes($title);
      $counter[$level - 1]++;

      if ($level > $current_level) {
        if ($sublist_open) {
          $output .= '<ol class="toc-sublist">';
        }
      } elseif ($level < $current_level) {
        for ($i = $current_level; $i > $level; $i--) {
          $output .= '</ol>';
          $sublist_open = false;
        }
      }
      $current_level = $level;

      $output .= '<li><a href="#' . $slug . '">' . $title . '</a></li>';

      if ($level > 1) {
        $sublist_open = true;
      }
    }

    while ($current_level > 0) {
      $output .= '</ul>';
      $current_level--;
    }
  }
  $output .= '</div>
                    </div>
                </div>
                </div>
                </div>';
  return $output;
}

function toc_add_to_content($content)
{
  global $post;

  $content = preg_replace_callback('/<h([2-3]).*?>(.*?)<\/h\1>/', function ($matches) {
    $level = $matches[1];
    $title = $matches[2];
    $slug = sanitize_title_with_dashes($title);
    return "<h$level id='$slug'>$title</h$level>";
  }, $content);

  return $content;
}

add_filter('the_content', 'toc_add_to_content');

add_filter('body_class', function (array $classes) {
  if (in_array('author', $classes)) {
    unset($classes[array_search('author', $classes)]);
  }
  return $classes;
});

/**
 * Modify Yoast SEO breadcrumbs to display multiple post categories.
 *
 * @param array $crumbs Breadcrumbs array.
 * @return array Modified breadcrumbs array.
 */

function sf_sort_categories($a, $b)
{
  return $a->parent - $b->parent;
}

add_filter('wpseo_breadcrumb_output', 'softfind_yoast_breadcrumbs', 10, 1);
function softfind_yoast_breadcrumbs($output)
{
  if (is_single()) {
    // Get the post categories for the current post
    $categories = get_the_category();

    // Create category
    usort($categories, "sf_sort_categories");

    if (!empty($categories)) {
      $breadcrumbs = '<span>';
      foreach ($categories as $category) {
        $cat_link = get_category_link($category->term_id);
        $breadcrumbs .= '<span><a href="' . esc_url($cat_link) . '">' . esc_html($category->name) . '</a>
				</span>';
      }
      $breadcrumbs = rtrim($breadcrumbs, ''); // Remove the trailing slash and space
      $breadcrumbs .= '</span>';
      return $breadcrumbs;
    }
  }

  return $output;
};



/**
 * This function disables rel links in Yoast SEO and handles pagination on the front page.
 *
 * @param WP_Query $query The main WordPress query.
 */
function escape_pagination_on_front_page($query)
{

  // Add the filters to disable rel links in Yoast SEO.
  add_filter('wpseo_next_rel_link', '__return_false');
  add_filter('wpseo_prev_rel_link', '__return_false');

  if ($query->is_main_query() && is_front_page() && !is_admin()) {
    if ($query->is_paged()) {
      // Check if the request URL matches the pattern /page/page_number
      if (preg_match('/^\/page\/\d+\/?$/', $_SERVER['REQUEST_URI'])) {
        $query->set_404();
        status_header(404);
        get_template_part(404); // You can customize the 404 template if needed
        exit();
      }
    }
  }
}
add_action('pre_get_posts', 'escape_pagination_on_front_page');

add_filter('upload_mimes', 'mime_types_support');
function mime_types_support($mimes)
{
  // Add support for additional image file types
  $mimes['svg'] = 'image/svg+xml';
  $mimes['webp'] = 'image/webp';
  $mimes['bmp'] = 'image/bmp';
  $mimes['tiff'] = 'image/tiff';

  return $mimes;
};
