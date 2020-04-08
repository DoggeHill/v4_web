<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="singleDiv">
            <p>
                < <a href="<?php echo home_url() . '/blog';  ?>">Blog</a>
                    < <?php
                        $category = get_the_category();
                        echo '<a href="' . get_category_link($category[0]->cat_ID) . '">' . $category[0]->cat_name . '</a>';
                        ?> < <a href="#"><?php echo the_title(); ?></a>
            </p>
            <div class="singleContent">
                <div class="singleMain">
                    <h1 class="headline"><?php the_title(); ?></h1>
                    <p><?php the_date(); ?></p>
                    <div class="blogTagsList">
                        <?php
                        $tags = get_tags();
                        foreach ($tags as $tag) {
                            $tag_link = get_tag_link($tag->term_id);
                        ?>
                            <a class="tag activeTag" href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a>
                        <?php
                        }
                        ?>
                    </div>
                    <br />
                    <p>
                        <?php
                        the_content();
                        ?>
                    </p>
                    <hr />
                    <div class="singleNav">
                        <?php previous_post_link('%link', 'Previous post'); ?>
                        <?php next_post_link('%link', 'Next post'); ?>
                    </div>
                    <br />
                    <h1 class="headline">Post a comment</h1>
                    <form>
                        <textarea class="formContent" name="comment" placeholder="Comment"></textarea>
                        <div class="formContentSmallDiv">
                            <input class="formContent formContentSmall" type="text" name="name" placeholder="Name" />
                            <input class="formContent formContentSmall" type="text" name="email" placeholder="E-mail address" />
                        </div>
                        <input type="submit" value="Send" class="button animated">
                    </form>
                </div>
        <?php
    endwhile;
endif;
        ?>
        <div class="singleSidebar">
            <h2>Tags</h2>
            <div class="blogTagsList">

                <?php $wpdb->show_errors(); ?>
                <?php
                global $wpdb;
                $term_ids = $wpdb->get_col("
            SELECT term_id FROM $wpdb->term_taxonomy
            INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
            INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
            WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

                if (count($term_ids) > 0) {

                    $tags = get_tags(array(
                        'orderby' => 'count',
                        'order'   => 'DESC',
                        'number'  => 28,
                        'include' => $term_ids,
                    ));

                    foreach ((array) $tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '" rel="tag" class="tag activeTag">' . $tag->name . '</a>';
                    }
                }
                ?>
            </div>
            <h2>Categories</h2>
            <div class="blogTagsList">
                <?php $categories = get_categories( 'echo=0&number=5&show_count=1&orderby=count&order=DESC');
                foreach ($categories as $category) {
                    echo '<a class="tag" href="' . $category->term_id . '">' . $category->name . "</a>";
                }
               
                ?>
            </div>
            <br />
            <h2>Newsletter</h2>
            <form>
                <input class="formContent" type="text" name="email" placeholder="E-mail address" />
                <input type="submit" value="Subscribe" class="button animated">
            </form>
            <br />
            <h2>Share</h2>
            <ul class="iconsList">
                <li><a target="_blank" href="#"><i class="animate fa fa-facebook-square icon fa-3x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="#"><i class="animate fa fa-instagram icon fa-3x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="#"><i class="animate fa fa-youtube-play icon fa-3x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="#"><i class="animate fa fa-google-plus-official icon fa-3x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
            </div>
        </div>
        <?php get_footer(); ?>