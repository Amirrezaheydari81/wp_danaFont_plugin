<?php
/**
 * Plugin Name:       Dana Font online
 * Plugin URI:        https://clarotm.ir
 * Description:       add font dana in head website in free
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Amirreza Heydari
 * Author URI:        http://amirreza-heydari.clarotm.ir/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */
 
 function head_danafont(){
    ?>
     
     <head>
         <style>
     @font-face {
       font-family: danapro;
       src: url("https://waregint.sirv.com/iseokar.ir/fonts/Dana-Regular.woff2") format("woff2");
       font-weight: 100;
       font-style: normal;
     }

     body,h1,h2,h3,h4,h5,h6,p,li,ul,tr,th,table,div {
       font-family: danapro !important;
     }
         </style>
     </head>
     
<?php
 }
 
 
 
 add_action( 'wp_body_open', 'head_danafont' );