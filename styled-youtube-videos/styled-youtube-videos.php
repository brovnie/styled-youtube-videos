<?php
   /*
   Plugin Name: Styled Youtube Videos
   Plugin URI: https://brovnie.be
   description: a plugin to create add custom style to youtube video made by brovnie
   Version: 1.0
   Author: brovnie.be
   Author URI: https://brovnie.be
   License: GPL2
   */
?>
<?php 


/**
 * Include required files
 *
 * */
include_once  plugin_dir_path( __FILE__ ) . '/admin/admin.php'; 
?>
<?php 


add_shortcode('njengah_contact_form' , 'display_video_on_frontend');

function display_video_on_frontend($attrs){ ?>
<div class="video-container">
<p>Hello test Test</p>

</div>
<?php
// Generate id
$attr = shortcode_atts(array(
    'id' => '4'
), $attrs);
return $attr['id'];
}
?>


