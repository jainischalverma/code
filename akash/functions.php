<?php
add_action('after_setup_theme', 'akash_setup');
function akash_setup() {
	//load_theme_textdomain('akash', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	));
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style-editor.css' );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'	=> __( 'Red', 'akash' ),
			'slug'	=> 'red',
			'color'	=> '#ED3524'
		),
		array(
			'name'	=> __( 'White', 'akash' ),
			'slug'	=> 'white',
			'color'	=> '#FFF'
		),
		array(
			'name'	=> __( 'Black', 'akash' ),
			'slug'	=> 'black',
			'color'	=> '#000'
		),
	));
	register_nav_menus(array(
		'main-menu' => esc_html__('Main Menu', 'akash')
	));
}
add_action('wp_enqueue_scripts', 'akash_load_scripts');
function akash_load_scripts() {
	wp_enqueue_style('akash-style', get_stylesheet_uri());
	wp_enqueue_script(
		'akash-functions', 
		get_stylesheet_directory_uri() . '/js/functions.js', 
		array(), 
		filemtime( get_stylesheet_directory() . '/js/functions.js' )
	);
	//wp_enqueue_script('jquery');
}
add_action('wp_footer', 'akash_footer_scripts');
function akash_footer_scripts() {
}
add_filter('document_title_separator', 'akash_document_title_separator');
function akash_document_title_separator($sep) {
	$sep = '|';
	return $sep;
}
add_filter('the_title', 'akash_title');
function akash_title($title) {
	if ($title == '') {
		return '…';
	}
	else {
		return $title;
	}
}
add_filter('the_content_more_link', 'akash_read_more_link');
function akash_read_more_link() {
	if (!is_admin()) {
		return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">…</a>';
	}
}
add_filter('excerpt_more', 'akash_excerpt_read_more_link');
function akash_excerpt_read_more_link($more) {
	if (!is_admin()) {
		global $post;
		return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">…</a>';
	}
}

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}

function content_fn($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}

add_filter('intermediate_image_sizes_advanced', 'akash_image_insert_override');
function akash_image_insert_override($sizes) {
	unset($sizes['medium_large']);
	return $sizes;
}

add_action('widgets_init', 'akash_widgets_init');
function akash_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar Widget Area', 'akash') ,
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

add_action('wp_head', 'akash_pingback_header');
function akash_pingback_header() {
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
	}
}
/*
add_action('comment_form_before', 'akash_enqueue_comment_reply_script');
function akash_enqueue_comment_reply_script() {
	if (get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
function akash_custom_pings($comment) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter('get_comments_number', 'akash_comment_count', 0);
function akash_comment_count($count) {
	if (!is_admin()) {
		global $id;
		$get_comments = get_comments('status=approve&post_id=' . $id);
		$comments_by_type = separate_comments($get_comments);
		return count($comments_by_type['comment']);
	}
	else {
		return $count;
	}
}
*/

function akash_gutenberg_scripts() {
	wp_enqueue_script(
		'akash-editor', 
		get_stylesheet_directory_uri() . '/js/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'akash_gutenberg_scripts' );
function akash_acf_blocks_init() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'cta_block',
            'title'             => __('CTA Links'),
            'description'       => __('Add multiple call-to-action links/buttons.'),
            'render_template'   => 'template-parts/blocks/cta.php',
            'category'          => 'layout',
            'keywords' => array('button', 'buttons', 'cta'),
            'post_types' => array('page'),
        ));
    }
}
add_action('acf/init', 'akash_acf_blocks_init');