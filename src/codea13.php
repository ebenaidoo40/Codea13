<script>
var url = "vendor/rezenebe/codea13/src/jquery-3.7.1.min.js";
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

global $facebookIcon_codea13, $whatsappIcon_codea13, $twitterIcon_codea13, $instagramIcon_codea13, $youtubeIcon_codea13, $tiktokIcon_codea13, $lorem;
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ad similique, labore minima dolor com";
$facebookIcon_codea13='<svg style="background-color:white;" viewBox="0 0 24 24" width="32" height="32"><path d="M15.4024 21V14.0344H17.7347L18.0838 11.3265H15.4024V9.59765C15.4024 8.81364 15.62 8.27934 16.7443 8.27934L18.1783 8.27867V5.85676C17.9302 5.82382 17.0791 5.75006 16.0888 5.75006C14.0213 5.75006 12.606 7.01198 12.606 9.32952V11.3265H10.2677V14.0344H12.606V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15.4024Z" fill="rgba(45,48,157,1)"></path></svg>';
$whatsappIcon_codea13='<svg style="background-color:white;"  viewBox="0 0 24 24" width="32" height="32"><path d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z" fill="rgba(89,178,26,1)"></path></svg>';
$twitterIcon_codea13='<svg style="background-color:black;"  viewBox="0 0 24 24" width="32" height="32"><path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z" fill="rgba(255,255,255,1)"></path></svg>';
$instagramIcon_codea13='<svg style="background-color:white;"  viewBox="0 0 24 24" width="32" height="32"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z" fill="rgba(230,52,103,0.93)"></path></svg>';
$youtubeIcon_codea13='<svg style="background-color:white; border-radius:5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(255,0,0,1)"><path d="M12.2439 4C12.778 4.00294 14.1143 4.01586 15.5341 4.07273L16.0375 4.09468C17.467 4.16236 18.8953 4.27798 19.6037 4.4755C20.5486 4.74095 21.2913 5.5155 21.5423 6.49732C21.942 8.05641 21.992 11.0994 21.9982 11.8358L21.9991 11.9884L21.9991 11.9991C21.9991 11.9991 21.9991 12.0028 21.9991 12.0099L21.9982 12.1625C21.992 12.8989 21.942 15.9419 21.5423 17.501C21.2878 18.4864 20.5451 19.261 19.6037 19.5228C18.8953 19.7203 17.467 19.8359 16.0375 19.9036L15.5341 19.9255C14.1143 19.9824 12.778 19.9953 12.2439 19.9983L12.0095 19.9991L11.9991 19.9991C11.9991 19.9991 11.9956 19.9991 11.9887 19.9991L11.7545 19.9983C10.6241 19.9921 5.89772 19.941 4.39451 19.5228C3.4496 19.2573 2.70692 18.4828 2.45587 17.501C2.0562 15.9419 2.00624 12.8989 2 12.1625V11.8358C2.00624 11.0994 2.0562 8.05641 2.45587 6.49732C2.7104 5.51186 3.45308 4.73732 4.39451 4.4755C5.89772 4.05723 10.6241 4.00622 11.7545 4H12.2439ZM9.99911 8.49914V15.4991L15.9991 11.9991L9.99911 8.49914Z"></path></svg>';
$tiktokIcon_codea13='<svg style="background-color:black; border-radius:5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(253,252,252,1)"><path d="M16 8.24537V15.5C16 19.0899 13.0899 22 9.5 22C5.91015 22 3 19.0899 3 15.5C3 11.9101 5.91015 9 9.5 9C10.0163 9 10.5185 9.06019 11 9.17393V12.3368C10.5454 12.1208 10.0368 12 9.5 12C7.567 12 6 13.567 6 15.5C6 17.433 7.567 19 9.5 19C11.433 19 13 17.433 13 15.5V2H16C16 4.76142 18.2386 7 21 7V10C19.1081 10 17.3696 9.34328 16 8.24537Z"></path></svg>';
/*-- jQuery v3.7.1 | (c) JS Foundation and other contributors | jquery.org/license */
include_once "one_page_codea13.php";
include_once "our_services_codea13.php";
include_once "video_list.php";
include_once "subscribe_codea13.php";
include_once "pullNotification_codea13.php";
include_once "boxNotification_codea13.php";
include_once "schedule_codea13.php";
include_once "footer2_codea13.php";
include_once "subOnePage_codea13.php";
include_once "universal.html";
include_once "fxn.php";
include_once "navbar_codea13.php";
include_once "navbar2_codea13.php";
include_once "navbar5_codea13.php";
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
include_once "contact_us2_codea13.php";
include_once "contact_bar_codea13.php";
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
include_once "pic_info_icon_codea13.php";
include_once "imgtxt_codea13.php";