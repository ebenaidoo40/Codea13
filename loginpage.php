<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "reze_frame_w/a_e_xiii_library_1.0.1.php";

        navbar3([
            "tabs"=>["Tour with us"=>"", "Accomodation Reservation"=>"", "Car Rentals"=>"", "Airport Pickup"=>"", ],
            "image"=>"../../myghtour/images/roadtrip2.webp",
        ]);
        
        /*displayMsg([
            "heading"=>"Completed",
            "content"=>"We will call you soon",
            "link"=>" "  // a link after clicking alright
        ]) */

        


        pic_home([
            "backgroundColor"=>"#00aaee",
            "entry1"=>["image"=>"../vdc/images/eben.webp", "textBackgroundColor"=>"green",],
            "entry2"=>["image"=>"../vdc/images/eben.webp", "textBackgroundColor"=>"green",],
            "entry3"=>["image"=>"../vdc/images/eben.webp", "textBackgroundColor"=>"green",],
        ])


    ?>
</body>
</html>