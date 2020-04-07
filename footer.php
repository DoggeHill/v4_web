 <footer>
     <div class="displayFlex footerLogosDiv">
         <div class="footerLogo"></div>
         <div class="footerLogo"></div>
         <div class="footerLogo"></div>
         <div class="footerLogo"></div>
         <div class="footerLogo"></div>
     </div>
     <div class="displayFlex footerContent">
         <div class="footerAbout footerElement">
             <h2 class="headline">About project:</h2>
             <p>
                 Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius
                 sit amet, mi. Donec id nisl. Aliquam erat volutpat. Integer fringilla. Duis lobortis,
                 quam non iverra eu, euismod nec, enim. Lorem
                 ipsum dolor sit amet, consectetuer adipiscing elit.
             </p>
         </div>
         <ul class="iconsList footerIconsList footerElement">
             <li><a target="_blank" href="#"><i class="fa fa-facebook-square icon fa-3x" aria-hidden="true"></i></a></li>
             <li><a target="_blank" href="#"><i class="fa fa-instagram icon fa-3x" aria-hidden="true"></i></a></li>
             <li><a target="_blank" href="#"><i class="fa fa-youtube-play icon fa-3x" aria-hidden="true"></i></a></li>
             <li><a target="_blank" href="#"><i class="fa fa-google-plus-official icon fa-3x" aria-hidden="true"></i></a></li>
         </ul>
         <div class="footerMenu footerElement">
             <h2 class="headline">Menu:</h2>
            <ul>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
            </ul>
         </div>
         <div class="footerCategories footerElement">
             <h2 class="headline">Cats:</h2>
             <ul>
                 <li><a href="#">category</a></li>
                 <li><a href="#">category</a></li>
                 <li><a href="#">category</a></li>
                 <li><a href="#">category</a></li>
                 <li><a href="#">category</a></li>
             </ul>
         </div>
     </div>
     <p class="footerRights">
         Phasellus purus. Etiam sapien. Duis diam urna, iaculis ut, vehicula ac, varius.
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