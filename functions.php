<?php add_theme_support('post-thumbnails'); ?>
<?php
// Navigation Menus
register_nav_menus(array(
    'menu' => __('menu'),
));
function na_get_gallery_image_urls( $post_id ) {
    $post = get_post($post_id);
    // Make sure the post has a gallery in it
    if( ! has_shortcode( $post->post_content, 'gallery' ) )
        return;
    // Retrieve all galleries of this post
    $galleries = get_post_galleries_images( $post );
    // Loop through all galleries found
    foreach( $galleries as $gallery ) {
        // Loop through each image in each gallery
        foreach( $gallery as $image ) {
            echo '<img src="'.$image.'">';
        }
    }
 }
