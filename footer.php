 <footer>
     <p>
         Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius
         sit amet, mi. Donec id nisl. Aliquam erat volutpat. Integer fringilla. Duis lobortis,
         quam non volutpat suscipit, magna sem consequat libero, ac hendrerit urna ante id mi. Qu
         isque commodo facilisis tellus. Integer sodales lorem sed nisl. Morbi consectetuer ma
         uris quis odio. Ut dolor lorem, viverra vitae, viverra eu, euismod nec, enim. Lorem
         ipsum dolor sit amet, consectetuer adipiscing elit.
     </p>
 </footer>
 <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
 <script src="<?php echo get_bloginfo('template_directory'); ?>/js/navigation.js"></script>
 <script>
     var mySwiper = new Swiper ('.swiper-container', {
         // Optional parameters
         direction: 'horizontal',
         loop: true,
         speed: 1200,
         setWrapperSize: false,
         autoplay: {
             delay: 5000,
         },

         // If we need pagination

         // Navigation arrows
         navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
         },

         // And if we need scrollbar
     })
 </script>
 <script src="js/slider.js"></script>
 </body>

 </html>