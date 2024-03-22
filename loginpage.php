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
            "logo"=>"reze_frame_w/c_flags/gh.svg",
            "tabs"=>["Tour with us"=>"", "Accomodation Reservation"=>"", "Car Rentals"=>"", "Airport Pickup"=>"", ],
            "image"=>"../../myghtour/images/roadtrip2.webp",
        ]);
        
        form([
            "input1"=>["id"=>"phoneww", "type"=>"tel", "label"=>"Tel", "required"=>"required"],

            "input2"=>["id"=>"dd", ],
            "input3"=>["id"=>"phonew", "type"=>"password", "label"=>"Secret Key"],
            "input4"=>["id"=>"phone", "type"=>"tel", "label"=>"Tel phone", "caution"=>"this is me doing it again"],
        ])


    ?>
</body>

</html>