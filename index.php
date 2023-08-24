<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <title>Trip home</title>
</head>



<body>
    
   <?php 
        include "reze_frame_w/a_e_xiii_library_1.0.1.php";

       navbar([
        "logo"=>"favicon-32x32.png",
        "title"=>"IDEAL COLLEGE",
        "titleBackgroundColor"=>"purple",
        "backgroundColor"=>"purple",
        "dropDownSwitch"=>"on",
        "dropDown"=>"Programs",
        "tabNumber"=>3,
        "dropDownTabsNumber"=>5,
        "dropTabs"=>["SAT"=>"", "TOEFL"=>"", "IELTS"=>"", "GRE"=>"", "GMAT"=>"",],
        "tabs"=>["Registration"=>"", "Forms"=>"", "About Us"=>""],
       ]);

       home([
        "title"=>"STUDY ABROAD",
        "buttonSwitch"=>"on",
        "buttonName"=>"Enroll Now",
        "buttonTextColor"=>"white",
        "buttonBackgroundColor"=>"#81007f",
        "titlesub"=>"International programs like <span style=\"color:#00aaee; font-weight:bolder;\">GMAT, GRE, TOEFL, SAT, IELTS </span>are needed for the entry of some institution abroad. We have mastered all the details about these programs and are able to assist students to persue their dream institution. Enroll with us now.",
       ]);

       card_container([
          "hardcard([
            align=>left;
            title=>Study Abroad;
            content=>Studing abroad is the dream of a lot of students in Africa but how do they even start with this process? Stay with us to understand how to get it right.;

          ])",
          "hardcard([
            align=>right;
            title=>Get Student Loan;
          ])",
       ]); 

       image_section_content([
        "title"=>"The SAT",
        "titlesub"=>"The SAT is a standardised test organised by college board to access high school students where most universities have adopted it as a way checking if students qualify to read a specific program. It is written four times in a year three months interval",
       ]);

       long_block_image([
        "title"=>"Our Services"
       ]);

       content_section_image([
        "titlesub"=>"The SAT is a standardised test organised by college board to access high school students where most universities have adopted it as a way checking if students qualify to read a specific program. It is written four times in a year three months interval",
       ]);

       image_long_block([
        "firstListNumber"=>2,
        "secondListNumber"=>2,
        "firstList1"=>"Ebeneaer",
        "ringColor"=>"#0a3242",
       ]);

       section3([]);

       section4([]);

       image_section_content([
        "title"=>"The SAT",
        "titlesub"=>"The SAT is a standardised test organised by college board to access high school students where most universities have adopted it as a way checking if students qualify to read a specific program. It is written four times in a year three months interval",
       ]);

       block_image_block([]);




        


        

        

   ?> 

</body>

</html>