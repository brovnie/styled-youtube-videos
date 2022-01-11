<?php
// This file handles all admin code

/*
Plan:

1.Get data from form
2. Validate youtube link
3. Save as shortcode
*/
?>
<?php
add_action('admin_menu', 'styled_youtube_videos_plugin_setup_menu');
 
function styled_youtube_videos_plugin_setup_menu(){
    add_menu_page( 
        'Styled Youtube Videos', //page title
        'Video Styler', //menu title
        'manage_options', //capability
        'styled-youtube-videos', //slug
        'styled_videos_home' //callback
    );
    
    add_submenu_page(
        'styled-youtube-videos', // parent slug
        'All Videos', //page title
        'All Videos', //menu title
        'manage_options', //capability
        'styled_youtube_videos_all', //slug
        'styled_youtube_videos_all' //callback
    );

    add_submenu_page(
        'styled-youtube-videos', // parent slug
        'Add Video', //page title
        'Add Video', //menu title
        'manage_options', //capability
        'styled_youtube_videos_add', //slug
        'styled_youtube_videos_add' //callback
    );
    /*
     * Removes default submenu item created by add menu page function
     */
    remove_submenu_page("styled-youtube-videos", "styled-youtube-videos"); 
 }
  
function styled_youtube_videos_add() {
    ?>
    <h1>Add new video</h1>
    <div class="add-video">
         <form action="post">
         <div class="field field-video">
            <label for="video">Title</label>
            <input type="text" name="video-title" id="video-title">
        </div>
        <div class="field field-video">
            <label for="video">Paste link to youtube video</label>
            <input type="text" name="video" id="video">
        </div>
        <div class="field-group input-style">
            <div class="field field-style1">
                <label for="style-1">Style 1</label>
                <input type="radio" name="style" id="style-1">
            </div>
            <div class="field field-style2">
                <label for="style-2">Style 2</label>
                <input type="radio" name="style" id="style-2">
            </div>
            <div class="field field-style3">
                <label for="style-3">Style 1</label>
                <input type="radio" name="style" id="style-3">
            </div>
            <div class="field field-style4">
                <label for="style-4">Style 1</label>
                <input type="radio" name="style" id="style-4">
            </div>
        </div>
        <input type="submit" value="Add video">
        </form>
     </div>
    <?php
}

function styled_youtube_videos_all() {
?>
<div class="title">
    <h1>All Videos</h1>
</div>
<div>
    <table>
        <tr>
            <th>Title</th>
            <th>Shortcode</th>
            <th></th>
            <th></th>
        </tr>

    </table>
</div>

<?php }

 function styled_videos_home(){
     ?>
     <h1>Welcome to styled Youtube Videos</h1>
     <p>This plugin allows you to add custom style to your youtube video.</p>
 <?php } ?>