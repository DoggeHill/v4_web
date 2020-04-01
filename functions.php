<?php add_theme_support('post-thumbnails'); ?>
<?php add_theme_support('title-tag'); ?>
<?php
// Navigation Menus
register_nav_menus(array(
    'menu' => __('menu'),
));
function na_get_gallery_image_urls($post_id)
{
    $post = get_post($post_id);
    // Make sure the post has a gallery in it
    if (!has_shortcode($post->post_content, 'gallery'))
        return;
    // Retrieve all galleries of this post
    $galleries = get_post_galleries_images($post);
    // Loop through all galleries found
    foreach ($galleries as $gallery) {
        // Loop through each image in each gallery
        foreach ($gallery as $image) {
            echo '<img src="' . $image . '">';
        }
    }
}

if (is_home() || is_front_page()) {
}

function addcssAndScripts()
{
    if (is_home() || is_front_page()) {
        wp_enqueue_style("HomepageCss",  get_template_directory_uri() . "/customCss/frontPage.css ");
    }
}
add_action('wp_enqueue_scripts', 'addcssAndScripts');
