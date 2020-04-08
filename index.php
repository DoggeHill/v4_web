<?php get_header() ?>
<!-------------------------------HEADER------------------------------->
<div class="headerDiv">
    <div class="displayFlex">
        <ul class="iconsList">
            <li><a target="_blank" href="#"><i class="animate fa fa-facebook-square icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="animate fa fa-instagram icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="animate fa fa-youtube-play icon fa-3x" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="#"><i class="animate fa fa-google-plus-official icon fa-3x" aria-hidden="true"></i></a></li>
        </ul>
        <div class="headerContentDiv">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="headerContent">
                            <h1 class="headline text-center">This is your ecological approach</h1>
                            <p class="headline-text text-center">Find your ecological inspiration here [...]
                            </p>
                        </div>
                        <div class="header-button">
                            <p class="text-center"> <button class="animated button">Want to learn more!</button></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="headerContent">
                            <h1 class="headline text-center">This is your ecological site</h1>
                            <p class="headline-text text-center">Share your own vision about ecology with us [...]
                            </p>
                        </div>
                        <div class="header-button">
                            <p class="text-center"> <button class="animate button">Start writing!</button></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="headerContent">
                            <h1 class="headline text-center">Stay informed</h1>
                            <p class="headline-text text-center">Stay informed and await the latest green news from us [...]
                            </p>
                        </div>
                        <div class="header-button">
                            <p class="text-center"> <button class="animate button">Be informed</button></p>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
                <!-- If we need scrollbar -->
            </div>
        </div>
    </div>
</div>
<div class="bg-video">
    <video class="bg-video__content" autoplay muted loop>
        <source src="<?php echo get_bloginfo('template_directory'); ?>/images/cover_video.mp4" type="video/mp4">
        <!-- TODO: I should ad support for .webm also and mesidž for not supported browsers -->
    </video>
</div>
</div>
<!-- --------------------- NEWEST BLOG POSTS ----------------------------------->
<div class="blogPostsDiv ">
    <h1 class="headline">Newest blog posts</h1>
    <div class="blogTagsList">
        <?php
        $tags = get_tags();
        $html = '<div class="blogTagsList">';
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag activeTag'>";
            $html .= "{$tag->name}</a>";
        }
        $html .= '</div>';
        echo $html;
        ?>
    </div>
    <div class="card-carousel">
        <?php
        $the_query = new WP_Query(array(
            // 'category_name' => 'news',
            'posts_per_page' => 3,
        ));
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blogPost my-card">
                    <?php if (has_post_thumbnail(the_post())) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <!-- <div id="custom-bg" style="background-image: url('<?php // echo $image[0];
                                                                                ?>')">
								                            </div> -->
                        <div class="blogImg" style=" background-image: url('<?php echo $image[0]; ?>')"></div>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="blogHeadline"> <?php the_title(); ?></h3>
                    </a>
                    <p class="subBlogHeadline"><?php echo get_the_date(); ?></p>
                    <?php the_excerpt(); ?>
                    <br />
                    <div class="blogTagsList">
                        <?php
                        $tags = get_tags();
                        $html = '';
                        foreach ($tags as $tag) {
                            $tag_link = get_tag_link($tag->term_id);
                            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag activeTag'>";
                            $html .= "{$tag->name}</a>";
                        }
                        echo $html;
                        ?>
                        <!-- the_tags('Tags: ', ', ', '<br />'); ?> -->
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php echo ('No News'); ?></p>
        <?php endif;
        ?>
    </div>
    <!--
            1. wp loop
            2. limitation for first 3 posts
            3. author
            4. date
            5. tag/cat
         -->
    <div class="text-center callToAction">
        <h1 class="headline">Let's start tellng your own story!</h1>
        <button class="animated button">I want to contribute!</button>
    </div>
</div>
<!--
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>-->
<!-- Initialize Swiper -->
<!--
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
-->
<!------------------------------- IMAGE GRID -------------------------------->
<div class="imageGridDiv">
    <div class="displayFlex customImageGridFlex">
        <?php wp_reset_postdata(); ?>
        <?php
        $the_query2 = new WP_Query(array(
            // 'category_name' => 'news',
            'posts_per_page' => 10,
        ));
        ?>
        <?php if ($the_query2->have_posts()) : ?>
            <?php while ($the_query2->have_posts()) : $the_query2->the_post(); ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                ?>
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front" style=" background-image: url('<?php echo $image[0]; ?>')">
                        </div>
                        <div class="flip-card-back">
                            <a href="#">
                                <h3><?php the_title(); ?></h3>
                                <p> <?php echo substr(get_the_excerpt(), 0, 100) . "…";
                                    ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<!--------------------- ABOUT US _--------------------------------------------->
<script>
    $(document).ready(function() {
        var background_image = "";
        $background = $('.aboutUsDiv');
        $('.navigation_fancy__checkbox').hover(function() {
            //$background.fadeIn().addClass('navigation_fancy__background');
            $('.navigation_fancy__checkbox').addClass('none');
            $(this).removeClass('none');
            $(this).find('.navigation_fancy__nav').css('opacity', '1');
            $(this).css('background-size', '0');
            $(this).find('.navigation_fancy__checkbox').css('background-image', 'none');
        });
        $('.navigation_fancy__checkbox').mouseleave(function() {
            $(this).css('background-size', '100%');
            $('.navigation_fancy__checkbox').removeClass('none');
            $background.removeClass('navigation_fancy__background');
            $(this).find('.navigation_fancy__nav').css('opacity', '0');
        });
    });
</script>
<div class="aboutUsDiv">
    <div class="">&nbsp;
    </div>
    <h1 class="headline">About Us</h1>
    <div class="aboutUsRow navigation_fancy">
        <div class="first navigation_fancy__checkbox">
            <nav class="navigation_fancy__nav">
                <ul class="navigation_fancy__list">
                    <li class="navigation_fancy__item">
                        <a href="#" class="navigation_fancy__link"><span>01</span>Czech Republic + description</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="second navigation_fancy__checkbox">
            <nav class="navigation_fancy__nav">
                <ul class="navigation_fancy__list">
                    <li class="navigation_fancy__item">
                        <a href="#" class="navigation_fancy__link"><span>01</span>Poland + description</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="aboutUsRow middleRow navigation_fancy">
        <div class="middle navigation_fancy__checkbox">
            <nav class="navigation_fancy__nav">
                <ul class="navigation_fancy__list">
                    <li class="navigation_fancy__item">
                        <a href="#" class="navigation_fancy__link"><span>01</span>Visegrad + description</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="aboutUsRow navigation_fancy">
        <div class="third navigation_fancy__checkbox">
            <nav class="navigation_fancy__nav">
                <ul class="navigation_fancy__list">
                    <li class="navigation_fancy__item">
                        <a href="#" class="navigation_fancy__link"><span>01</span>Slovakia + description</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="forth navigation_fancy__checkbox">
            <nav class="navigation_fancy__nav">
                <ul class="navigation_fancy__list">
                    <li class="navigation_fancy__item">
                        <a href="#" class="navigation_fancy__link"><span>01</span>Hungary + description </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-----------------NEWSLETTER ___________________________________-->
<div class="newsletterDiv">
    <div class="newsletter">
        <div class="displayFlex">
            <div class="newsletterWrapper newsletterImg" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/newsletter.png')">
                <div class=" newsletterContent">
                    <h1 class="headline">Newsletter</h1>
                    <p>Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius sit amet, mi. Don
                        ec id nisl. Aliquam erat volut
                        pat. Integer fringilla. Duis lobortis, quam non volutpat suscipit, mag
                        na sem consequat libero, ac hendrerit urna ante
                    </p>
                </div>
            </div>
            <div class="newsletterWrapper">
                <div class="newsletterContent">
                    <form action="post" method="post" class="newsletterForm">
                        <input class="newsletterInput" type="text" name="name" placeholder="Name" />
                        <input class="newsletterInput" type="text" name="email" placeholder="e-mail address" />
                        <input type="submit" value="Subscribe" class="button animated">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------CONTACT---------------------------------------->
<div class="contactDiv">
    <h1 class="headline">Contact</h1>
    <div class="displayFlex">
        <form action="post" method="post" class="contactForm" id="contactForm">
            <input class="formContent" type="text" name="name" placeholder="Name" />
            <input class="formContent" type="text" name="subject" placeholder="Subject" />
            <input class="formContent" type="text" name="email" placeholder="e-mail address" />
            <textarea class="formContent" name="message" placeholder="Message"></textarea>
            <input type="submit" value="Send" class="button animated">
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
<script>
    $num = $('.my-card').length;
    $even = $num / 2;
    $odd = ($num + 1) / 2;
    if ($num % 2 == 0) {
        $('.my-card:nth-child(' + $even + ')').addClass('active');
        $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $even + ')').next().addClass('next');
    } else {
        $('.my-card:nth-child(' + $odd + ')').addClass('active');
        $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
    }
    $('.my-card').click(function() {
        $slide = $('.active').width();
        console.log($('.active').position().left);
        if ($(this).hasClass('next')) {
            $('.card-carousel').stop(false, true).animate({
                left: '-=' + $slide
            });
        } else if ($(this).hasClass('prev')) {
            $('.card-carousel').stop(false, true).animate({
                left: '+=' + $slide
            });
        }
        $(this).removeClass('prev next');
        $(this).siblings().removeClass('prev active next');
        $(this).addClass('active');
        $(this).prev().addClass('prev');
        $(this).next().addClass('next');
    });
    // Keyboard nav
    $('html body').keydown(function(e) {
        if (e.keyCode == 37) { // left
            $('.active').prev().trigger('click');
        } else if (e.keyCode == 39) { // right
            $('.active').next().trigger('click');
        }
    });
</script>
<?php get_footer(); ?>