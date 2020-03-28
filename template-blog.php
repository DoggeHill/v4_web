<?php /* Template Name: Blog */ ?>
<?php get_header() ?>

<div class="blogTop">
    <div class="blogSlider">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <?php
                $the_query = new WP_Query(array(
                    // 'category_name' => 'news',
                    'posts_per_page' => 3,
                ));
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide">

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blogImg ">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php else : ?>
                                <!--<img class="blogImg" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" />-->
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>">
                                <h1 class="blogHeadline"> <?php the_title(); ?></h1>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php echo ('No News'); ?></p>
                <?php endif; ?>


            </div>
            <!-- If we need pagination -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>
    <div class="blogTopPost">

    </div>
</div>
    <div class="blogDiv">
        <div class="blogMain">
            <?php
            $the_query = new WP_Query(array(
                // 'category_name' => 'news',
                'posts_per_page' => 10,
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="blogMainPost blogPost">

                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blogImg ">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php else : ?>
                            <img class="blogImg" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" />
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

        <div class="blogRight">
            <div class="blogMostRead">

            </div>
            <div class="blogCategories">

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
