<script>
var url = "codea13/jquery-3.7.1.min.js";
var script = document.createElement('script');
script.src = url;
script.onload = function() {
    console.log('Script loaded successfully.');
};
script.onerror = function() {
    console.error('Error loading script.');
};
document.head.appendChild(script);
</script>

<?php
if(!function_exists("sanitize_output")){
function sanitize_output($buffer)
{
    // Matches and temporarily stores script tags and their content
    preg_match_all('/<script\b[^>]*>(.*?)<\/script>/is', $buffer, $matches);
    $scripts = $matches[0];
    
    // Replace script content with placeholders
    foreach ($scripts as $i => $script) {
        $buffer = str_replace($script, "###SCRIPT_$i###", $buffer);
    }
    
    // Define patterns and replacements
    $search = array(
        '/\s*([>])\s*/s',     // Remove whitespace around closing angle brackets
        '/\s*([<])\s*/s',     // Remove whitespace around opening angle brackets
        '/\s{2,}/s',          // Replace multiple whitespace sequences with a single space
        '/<!--.*?-->/s'      // Remove HTML comments
    );

    $replace = array(
        '$1',                // Keep the angle brackets intact
        '$1',                // Keep the angle brackets intact
        ' ',                 // Replace multiple spaces with a single space
        ''                   // Remove comments
    );

    // Perform the replacements
    $buffer = preg_replace($search, $replace, $buffer);
    
    // Restore script tags with their original content
    foreach ($scripts as $i => $script) {
        $buffer = str_replace("###SCRIPT_$i###", $script, $buffer);
    }

    return $buffer;
}
}


ob_start("sanitize_output");

global $firstcard;
$firstcard = 1;
/*-- jQuery v3.7.1 | (c) JS Foundation and other contributors | jquery.org/license */
include_once "one_page_codea13.php";
include_once "subOnePage_codea13.php";
include_once "universal.html";
include_once "fxn.php";
include_once "navbar_codea13.php";
include_once "navbar2_codea13.php";
include_once "hardcard_codea13.php";
include_once "softcard_codea13.php";
include_once "card_container_codea13.php";
include_once "section3_codea13.php";
include_once "section4_codea13.php";
include_once "home_codea13.php";
include_once "home3_codea13.php";
include_once "navbar4_codea13.php";
include_once "mobileDropDownMenu_codea13.php";
include_once "slider_home_codea13.php";
include_once "image_section_content_codea13.php";
include_once "content_section_image_codea13.php";
include_once "image_long_block_codea13.php";
include_once "long_block_image_codea13.php";
include_once "block_image_block_codea13.php";
include_once "review_codea13.php";
include_once "footer_codea13.php";
include_once "reversed_home_codea13.php";
include_once "home2_codea13.php";
include_once "experience_codea13.php";
include_once "u_login_codea13.php";
include_once "a_login_codea13.php";
include_once "slant_home_codea13.php";
include_once "circleimage_codea13.php";
include_once "slant_block_codea13.php";
include_once "mcurve_block_codea13.php";
include_once "bcurve_block_codea13.php";
include_once "contact_us_codea13.php";
include_once "video_home_codea13.php";
include_once "slidepics_codea13.php";
include_once "two_text_codea13.php";
include_once "title_codea13.php";
include_once "split_block_codea13.php";
include_once "video_content_codea13.php";
include_once "events_codea13.php";
include_once "parallax_constant_codea13.php";
include_once "image_image_codea13.php";
include_once "form_codea13.php";
include_once "celebration_codea13.php";
include_once "displaymsg_codea13.php";
include_once "pic_con_button_codea13.php";
include_once "navbar3_codea13.php";
include_once "textbox_codea13.php";
include_once "space_codea13.php";
include_once "rectcube_codea13.php";
include_once "floatmenu_codea13.php";
include_once "pic_home_codea13.php";
include_once "content_slantPic_codea13.php";
include_once "image_content_codea13.php";
include_once "infinite_pics_codea13.php";
include_once "box_pics_codea13.php";