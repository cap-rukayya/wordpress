<?php
add_action( 'after_setup_theme', 'halloween_setup' );
function halloween_setup()
{
load_theme_textdomain( 'halloween', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'halloween' ) )
);
}
add_action( 'wp_enqueue_scripts', 'halloween_load_scripts' );
function halloween_load_scripts()
{
wp_enqueue_script( 'jquery' );
wp_register_script( 'halloween-videos', get_template_directory_uri().'/js/videos.js' );
wp_enqueue_script( 'halloween-videos' );
}
add_action( 'wp_head', 'halloween_print_custom_scripts', 99 );
function halloween_print_custom_scripts()
{
if ( !is_admin() ) {
?>
<script type="text/javascript">
jQuery(document).ready(function($){
$("#wrapper").vids();
});
</script>
<?php
}
}
add_action( 'comment_form_before', 'halloween_enqueue_comment_reply_script' );
function halloween_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'halloween_title' );
function halloween_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'halloween_filter_wp_title' );
function halloween_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'halloween_widgets_init' );
function halloween_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'halloween' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function halloween_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'halloween_comment_count', 0 );
function halloween_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}