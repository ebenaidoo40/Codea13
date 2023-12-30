<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codea-13</title>
</head>



<body>
    
   <?php 
        include "reze_frame_w/a_e_xiii_library_1.0.1.php";
        
        navbar2([
            "backgroundColor"=>"black",
            "baseShadow"=>"#aaa",
        ]);
        home2([
            "buttonSwitch"=>"on",
        ]);
        
        slidepics([
            "dPicFit"=>"cover",
        ]);

        content_section_image([
            "backgroundColor"=>"white",
            "rotate"=>"0deg",
            "z-index"=>"-1",
        ]);

        title([
            "titleColor"=>"black",
            "backgroundColor"=>"#aaeebb"
        ]);

        two_text([
            "buttonSwitch1"=>"on",
            "buttonSwitch2"=>"on",
            "buttonName1"=>"click here",
            "buttonName2"=>"Download",
            "buttonBackgroundHoverColor"=>"slateblue",
            "buttonBackgroundColor"=>"purple",
            "buttonTextColor"=>"white",
        ]);

        iframe_content([
        ]);

        split_block([
            
        ]);

        title([
            "title"=>"Upcoming Events >>",
            "titleColor"=>"white",
            "backgroundColor"=>"black"
        ]);

        events([
            "marquee"=>"no",
            "titleColor"=>"purple",
            "Dance Competition"=>["body"=>"The most thing has already happened",],
            "Prom"=>["body"=>"The most thing has already happened", "date"=>"23rd Dec 2023"],
            "Chilling Party"=>["body"=>"The most thing has already happened", "date"=>"23rd Dec 2023"],
            "Afcon"=>["body"=>"The most thing has already happened", "date"=>"23rd Dec 2023"],
            "EPL"=>["body"=>"The most thing has already happened", "date"=>"23rd Dec 2023"], 
        ]);

        parallax_effect_wrapper([]);
        iframe_content([
            "backgroundImage"=>"none",
            "backgroundColor"=>"#00aaee50",
        ]);

        footer([]);
  
   ?> 

</body>

</html>