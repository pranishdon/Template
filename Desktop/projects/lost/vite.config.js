import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

            'resources/css/core.css',

           'resources/css/shortcode/default.css',
           'resources/css/shortcode/header.css',
           'resources/css/shortcode/footer.css',
           'resources/css/shortcode/slider.css',
                'resources/css/shortcode/shortcodes.css',




            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/css/bootstrap.min.css',
            'resources/css/owl.carousel.min.css',
            'resources/css/owl.theme.default.min.css',
            
          
            'resources/css/style.css',
            'resources/css/responsive.css',
            'resources/css/custom.css',
            'resources/css/animation.css',
            'resources/css/animate.css',


            'resources/js/jquery-3.2.1.min.js',
            'resources/js/bootstrap.js',
             'resources/js/plugins.js',
           'resources/js/slick.min.js',
            'resources/js/owl.carousel.min.js',
            'resources/js/waypoints.min.js',
            'resources/js/main.js',
            'resources/js/modernizr-3.5.0.min.js',
            
         
               ],
            refresh: true,
        }),
    ],


});
