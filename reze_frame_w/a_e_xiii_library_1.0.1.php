<?php
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '> ',
        ' <',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

$firstcard=1;
echo "<script src=\"reze_frame_w/jquery-3.6.1.min.js\"></script>";
include_once "universal.html";
include_once "fxn.php";
include_once "navbar.php";
include_once "navbar2.php";
include_once "hardcard.php";
include_once "softcard.php";
include_once "card_container.php";
include_once "section3.php";
include_once "section4.php";
include_once "home.php";
include_once "image_section_content.php";
include_once "content_section_image.php";
include_once "image_long_block.php";
include_once "long_block_image.php";
include_once "block_image_block.php";
include_once "review.php";
include_once "footer.php";
include_once "reversed_home.php";
include_once "home2.php";
include_once "experience.php";
include_once "u_login.php";
include_once "a_login.php";
include_once "slant_home.php";
include_once "circleimage.php";
include_once "slant_block.php";
include_once "mcurve_block.php";
include_once "bcurve_block.php";
include_once "contact_us.php";
include_once "video_home.php";
include_once "slidepics.php";
include_once "two_text.php";
include_once "title.php";
include_once "split_block.php";
include_once "iframe_content.php";
include_once "events.php";
include_once "parallax_constant.php";
include_once "image_image.php";
include_once "form.php";
include_once "celebration.php";
include_once "displaymsg.php";
include_once "pic_con_button.php";
include_once "navbar3.php";
include_once "textbox.php";
include_once "space.php";
include_once "rectcube.php";
include_once "floatmenu.php";
include_once "pic_home.php";
include_once "infinite_pics.php";
include_once "box_pics.php";
?>