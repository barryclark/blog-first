<?php

    // Show all errors, without needing to go back to wp-config.php
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');

    // Settings page
    require_once "admin/settings.php";

    register_sidebar(array('sidebar1' => 'Sidebar 1'));

    /**
     * Set the content width based on the theme's design and stylesheet.
    */
    if ( ! isset( $content_width ) )
        $content_width = 601.6;

     // Add support
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('automatic-feed-links');

    // If page needs pagination nav, return true
    function show_posts_nav() {
    	global $wp_query;
    	return ($wp_query->max_num_pages > 1);
    }


    // Modifies the default excerpt [...] to say something a little more useful.
    function new_excerpt_more($more) {
        global $post;
        return '&nbsp;<a href="'. get_permalink($post->ID) . '">' . 'Read more' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
    

    // Add first & last classes to wp_nav_menu menus
    function add_first_and_last($output) {
        $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
        $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
        return $output;
    }
    add_filter('wp_nav_menu', 'add_first_and_last');
     

    // Add featured image to feeds
    // http://app.kodery.com/s/1314
    function insertThumbnailRSS($content) {
        global $post;
        if (has_post_thumbnail($post->ID)){
            $content = '' . get_the_post_thumbnail($post->ID, 'thumbnail', array('alt' => get_the_title(), 'title' => get_the_title(), 'style' => 'float:right;')) . '' . $content;
        }
        return $content;
    }
    add_filter('the_excerpt_rss', 'insertThumbnailRSS');
    add_filter('the_content_feed', 'insertThumbnailRSS');


    // Make search prefix pretty
    function fb_change_search_url_rewrite() {
        if (is_search() && ! empty($_GET['s'])) {
            wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
            exit();
        }
    }
    if (get_option('permalink_structure') !== '') {
        add_action('template_redirect', 'fb_change_search_url_rewrite');
    }


    // Gets the page content by ID, useful if you're trimming it down
    function get_the_content_by_id($gcbid) {
        $my_postid = $gcbid; //This is page id or post id
        $content_post = get_post($my_postid);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        return $content;
    }


    // Trim a string by words, so words don't get cut up
    function trim_by_words($string, $count, $ellipsis = false){
        $words = explode(' ', $string);
        if (count($words) > $count){
            array_splice($words, $count);
            $string = implode(' ', $words);
            if (is_string($ellipsis)){
                $string .= $ellipsis;
            } elseif ($ellipsis){
                $string .= '...';
            }
        }
        return $string;
    }

    
    // Callback for wp_list_comments() in comments.php
    function blogfirst_comment($comment, $args, $depth ) { 
            
        $GLOBALS['comment'] = $comment; ?>

        <li class="comment-item">
            <a class="comment-item-gravatar" href="<?php comment_author_url(); ?>"><?php echo get_avatar($comment, 80); ?></a>
            <div class="comment">
                <span class="author"><?php comment_author_link() ?> - <?php comment_date('F jS, Y') ?></span>
                <div class="comment-text"><?php if ($comment->comment_approved == '0') : ?>
                <p>Your comment is awaiting moderation.</p>
                <?php endif; ?>
                <?php comment_text() ?>
            </div>
            </div>
        </li>
    <?php }