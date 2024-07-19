<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0,maximum-scale=1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include_once "codea13/codea13.php";
        
        navbar4([
            "title"=>"<div style=\"font-family:boldfont; font-size:25px; color:white;\">CastyHouse</div>",
            "titleBackgroundColor"=>"#E53653",
            "tap1"=>["name"=>"Services", "type"=>"dropdown", "list"=>["Digital Voting"=>"", "Casting Movies"=>""]],
            "tap4"=>["name"=>"Events"],
            "tap2"=>["name"=>"About us"] ,
            "tap3"=>["name"=>"Contact us"],
        ]);

        home3([
            "title"=>"<div style=\"margin-bottom:20px;font-size:35px; font-weight:bold\">THE BEST ONLINE VOTING PLATFORM</div>",
            "content"=>"CastyHouse is a voting platform for voting. This is purposeley designed for events that needs viewers and friends to join vote for a particular contestant to be crowned the winner."
        ]);
        mobileDropDownMenu([
            "title"=>"<div style=\"font-family:boldfont; font-size:25px; color:white;\">CastyHouse</div>",
            "backgroundColor"=>"#CA94A0",
            "titleBackgroundColor"=>"#E53653",
            "tap2"=>["name"=>"About us"] ,
            "tap3"=>["name"=>"Contact us"],
            "tap1"=>["name"=>"Services", "type"=>"dropdown", "list"=>["Digital Voting"=>"", "Casting Movies"=>""]],
            "tap4"=>["name"=>"Events"],
        ]);

        card_container([
            "backgroundColor"=>"#E53653",
            "hardcard([
                backgroundColor=>#181818;;
                content=>;;
                title=>THE MASTERS OF ONLINE VOTING AND PROFESSIONALISM IN OUR WORK. LET US GET INTO THE EVENT;;
                titleAlign=>center;;
                lineColor=>#00000000;;
                titleColor=>white;;
                width=>100%;;
            ])",
        ]);

        

        content_slantPic([
            "flip"=>"on",
            "backgroundColor"=>"#181818",
            "image"=>"../images/drde.webp",
            "titleColor"=>"white",
            "content"=>"<div style=\"color:white\">This is where we put all the unwanted staffs about what we aare capable of doing here for easy allocating of what exactly you want to do</div>",
        ]);

        long_block_image([
            "titleColor"=>"#E13553",
            "textColor"=>"white",
            "backgroundColor"=>"#242424",
            "image"=>"../images/ike2.webp",
            "firstListNumber"=>0,
            "secondListNumber"=>0,
        ]);

        image_content([
            "topBackgroundColor"=>"#242424",
            "backgroundColor"=>"#0A3242",
            "image"=>"../images/drde.webp",
        ]);
        
    ?>

</body>

</html>