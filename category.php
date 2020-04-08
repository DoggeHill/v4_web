<?php get_header() ?>

<!---------------------------------CONTNET --------------------------------->
<div class="blogPostsDiv">
    <h1 class="headline">Most read posts</h1>
    <br />
    <div class="blogPosts">
        <?php
        $the_query = new WP_Query(array(
            'posts_per_page' => 3,
        ));
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blogMainPost blogPost">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        ?>



                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blogImg ">
                            <div class="" style=" background-image: url('<?php echo $image[0]; ?>')">
                            </div>
                        </a>
                    <?php else : ?>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>">
                        <h3 class="blogHeadline"> <?php the_title(); ?></h3>
                    </a>
                    <p class="subBlogHeadline"><?php echo get_the_date(); ?></p>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <br />
                    <div class="blogTagsList">
                        <a class="tag activeTag" href="#">Health</a>
                        <a class="tag activeTag" href="#">Health</a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php echo ('No News'); ?></p>
        <?php endif; ?>
    </div>
    <br />
    <h1 class="headline">Newest blog posts</h1>
    <br />
    <div class="blogPosts">
        <?php
        $the_query = new WP_Query(array(
            // 'category_name' => 'news',
            'posts_per_page' => 3,
        ));
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blogMainPost blogPost">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blogImg ">
                            <div class="" style=" background-image: url('<?php echo $image[0]; ?>')">
                            </div>
                        </a>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>">
                        <h3 class="blogHeadline"> <?php the_title(); ?></h3>
                    </a>
                    <p class="subBlogHeadline"><?php echo get_the_date(); ?></p>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <br />
                    <div class="blogTagsList">
                        <a class="tag activeTag" href="#">Health</a>
                        <a class="tag activeTag" href="#">Health</a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php echo ('No News'); ?></p>
        <?php endif; ?>
    </div>
    <a href="#" class="blogPostsBottomNav">1 , 2 , 3 ,4 ..... more posts </a>
</div>

<?php get_footer() ?>