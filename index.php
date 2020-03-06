<?php get_header() ?>
<!-------------------------------HEADER------------------------------->
<div class="headerDiv">
    <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
            <source src="<?php echo get_bloginfo('template_directory'); ?>/images/cover_video.mp4" type="video/mp4">
            <!-- TODO: I should ad support for .webm also and mesidž for not supported browsers -->
        </video>
    </div>
    <div class="displayFlex">
        <ul class="iconsList">
            <li><a target="_blank" href="#"><i class="fa fa-facebook-square icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-instagram icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-youtube-play icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-google-plus-official icon fa-3x" aria-hidden="true"></i></a></li>
        </ul>
        <div class="headerContent">
            <h1 class="headline">Your ecological <br /> approach</h1>
            <p>Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius sit amet, mi
                . Donec id nisl. Aliquam erat volutpat. Integer fring
                illa. Duis lobortis, quam non volutpat suscipit, magna sem consequat
                libero, ac hendrerit urna ante id
            </p>
            <button class="button">Button</button>
        </div>
    </div>
</div>
<!-- --------------------- NEWEST BLOG POSTS ----------------------------------->
<div class="blogPostsDiv swiper-container">
    <h1 class="headline">Newest blog posts</h1>
    <div class="blogTagsList">
        <a class="tag" href="#">Health</a>
        <a class="tag" href="#">Health</a>
        <a class="tag activeTag" href="#">Health</a>
        <a class="tag" href="#">Health</a>
        <a class="tag activeTag" href="#">Health</a>
        <a class="tag activeTag" href="#">Health</a>
    </div>
    <div class="displayFlex swiper-wrapper">
        <!--  
            1. wp loop
            2. limitation for first 3 posts
            3. author
            4. date
            5. tag/cat
         -->
        <?php
        $the_query = new WP_Query(array(
            // 'category_name' => 'news',
            'posts_per_page' => 3,
        ));
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blogPost swiper-slide">

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
</div>

<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var delayInMilliseconds = 1000; //1 second

    setTimeout(function() {
        var swiper = new Swiper('.swiper-container', {




            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }, delayInMilliseconds);
</script>






<!--------------------- ABOUT US _--------------------------------------------->
<div class="aboutUsDiv">
    <h1 class="headline">About Us</h1>
    <div class="aboutUsRow">
        <div class="aboutUsLeft aboutUsText">
            <h3 class="headline">Tuna pojde dajaký textík určite niečo dlhšie</h3>
            <p>hasellus purus. Etiam sapien. Duis diam urna, iaculis ut,
                vehicula ac, varius sit amet, mi. Donec id nisl. Aliquam erat
                volutpat. Integer fringilla. Duis lobortis, quam non volutpat suscipit,
                magna sem consequat libero, ac hendrerit urna ante id mi. Quisque commodo facilisis tellus. Integer sodales lorem sed nisl.
                Morbi consectetuer mauris quis odio. Ut dolor lorem, viverra v
                itae, viverra eu, euismod nec, enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p><br />
            <p>hasellus purus. Etiam sapien. Duis diam urna, iaculis ut,
                vehicula ac, varius sit amet, mi. Donec id nisl. Aliquam erat
                volutpat. Integer fringilla. Duis lobortis, quam non volutpat suscipit,
                magna sem consequat libero, ac hendrerit urna ante id mi. Quisque commodo facilisis tellus. Integer sodales lorem sed nisl.
                Morbi consectetuer mauris quis odio. Ut dolor lorem, viverra v
                itae, viverra eu, euismod nec, enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p>
        </div>
        <img class="aboutUsRight" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" />
    </div>
    <div class="aboutUsRow">
        <div class="aboutUsRightText aboutUsText">
            <h3 class="headline">Tuna pojde dajaký textík určite niečo dlhšie</h3>
            <p>hasellus purus. Etiam sapien. Duis diam urna, iaculis ut,
                vehicula ac, varius sit amet, mi. Donec id nisl. Aliquam erat
                volutpat. Integer fringilla. Duis lobortis, quam non volutpat suscipit,
                magna sem consequat libero, ac hendrerit urna ante id mi. Quisque commodo facilisis tellus. Integer sodales lorem sed nisl.
                Morbi consectetuer mauris quis odio. Ut dolor lorem, viverra v
                itae, viverra eu, euismod nec, enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p><br />
            <p>hasellus purus. Etiam sapien. Duis diam urna, iaculis ut,
                vehicula ac, varius sit amet, mi. Donec id nisl. Aliquam erat
                volutpat. Integer fringilla. Duis lobortis, quam non volutpat suscipit,
                magna sem consequat libero, ac hendrerit urna ante id mi. Quisque commodo facilisis tellus. Integer sodales lorem sed nisl.
                Morbi consectetuer mauris quis odio. Ut dolor lorem, viverra v
                itae, viverra eu, euismod nec, enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit
            </p>
        </div>
        <img class="aboutUsLeft" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" />
    </div>
</div>
<!-----------------NEWSLETTER ___________________________________-->
<div class="newsletterDiv">
    <div class="newsletter">
        <div class="displayFlex">
            <div class="newsletterContent">
                <h1 class="headline">Newsletter</h1>
                <p>Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius sit amet, mi. Don
                    ec id nisl. Aliquam erat volut
                    pat. Integer fringilla. Duis lobortis, quam non volutpat suscipit, mag
                    na sem consequat libero, ac hendrerit urna ante
                </p>
                <br />
                <form action="" method="post" class="newsletterForm">
                    <input class="newsletterInput" type="text" name="email" placeholder="e-mail address" />
                    <input type="submit" value="Subscribe" class="button">
                </form>
            </div>
            <img class="newsletterImg" alt="newsletterImg" src="https://colloquiumsk.com/wp-content/uploads/2019/03/Logo_SK.svg" />
        </div>
    </div>
</div>
<!----------------------------------------CONTACT---------------------------------------->
<div class="contactDiv">
    <h1 class="headline">Contact</h1>
    <div class="displayFlex">
        <form action="" method="post" class="contactForm" id="contactForm">
            <input class="formContent" type="text" name="name" placeholder="Name" />
            <input class="formContent" type="text" name="subject" placeholder="Subject" />
            <input class="formContent" type="text" name="email" placeholder="e-mail address" />
            <textarea class="formContent" name="message" placeholder="Message"></textarea>
            <input type="submit" value="Send" class="button">
        </form>
        <ul class="iconsList">
            <li><a target="_blank" href="#"><i class="fa fa-facebook-square icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-instagram icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-youtube-play icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-google-plus-official icon fa-3x" aria-hidden="true"></i></a></li>
        </ul>
        <div class="contactText">
            <p>Phasellus purus.
                Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius sit amet,
                mi. Donec id nisl. Aliquam erat volutpat. Integer fringilla. Duis lobortis, quam non volutpat suscipi
                t, magna sem consequat libero, ac hendrerit urna ante id mi. Quisque commodo facilisi
                s tellus. Integer sodales lorem sed nisl. Morbi
                consectetuer mauris quis odio. Ut dolor
                lorem, viverra vitae, viverra eu, euismod nec, enim. Lorem ipsum dolor sit am
                et, consectetuer adipiscing eli
            </p>
            <img alt="visegrad found" src="https://colloquiumsk.com/wp-content/uploads/2019/03/Logo_SK.svg" />
        </div>
    </div>
</div>
<?php get_footer(); ?>