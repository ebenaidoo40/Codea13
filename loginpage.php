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

        pic_con_button([
            "backgroundColor"=>"#f0f0ff",
            "backgroundBorderColor"=>"red",
        ]);

        pic_con_button([]);

    ?>
</body>
</html>