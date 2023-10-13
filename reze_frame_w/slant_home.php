<?php

function slant_home(array $arr){
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["innerBorderColor"])){
        $arr["innerBorderColor"]="orange";
    }
    if(!isset($arr["outerBorderColor"])){
        $arr["outerBorderColor"]="red";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Welcome to Codea 13";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="orange";
    }
    if(!isset($arr["titlesub"])){
        $arr["titlesub"]="Welcome to Codea 13";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }

    echo '

    <style>

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .maindiv'.$GLOBALS["firstcard"].'{
            padding:100px 80px 200px 80px;
            box-sizing:border-box;
            min-height:550px;
            isolation:isolate;
            position:relative;
            background-image:url("'.$arr["image"].'");
            background-size:cover;
            background-position:center;
        }
        .basediv'.$GLOBALS["firstcard"].'{
            box-sizing:border-box;
            position:absolute;
            left:0;
            width:100%;
            bottom:0px;
            height:200px;
            background-color:'.$arr["innerBorderColor"].';
            -webkit-mask-image:url("reze_frame_w/assets/scalene.svg");
        }
        .basediv1'.$GLOBALS["firstcard"].'{
            left:0;
            box-sizing:border-box;
            position:absolute;
            width:100%;
            bottom:0px;
            height:120px;
            background-color:'.$arr["outerBorderColor"].';
            -webkit-mask-image:url("reze_frame_w/assets/right_angle_triangle.svg");
        }
        .title'.$GLOBALS["firstcard"].'{
            max-width:500px;
            font-size:44px; 
            font-family:"boldfont"; 
            color:'.$arr["titleColor"].'; 
            text-shadow:2px 2px white;
            transition: all 0.6s;
        }
        .firstparagraph'.$GLOBALS["firstcard"].'{
            max-width:500px;
            line-height:1.5;
            color:'.$arr["textColor"].';
            transition: all 0.6s;
        }

        @media (max-width:700px){
            .maindiv'.$GLOBALS["firstcard"].'{
                padding:60px 40px 200px 40px;
            }
    </style>

    <div class="maindiv'.$GLOBALS["firstcard"].'">
        <h1 class="title'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">'.$arr["title"].'</h1><br>
        <p class="firstparagraph'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">'.$arr["titlesub"].'</p>
        <div class="basediv'.$GLOBALS["firstcard"].'"></div>
        <div class="basediv1'.$GLOBALS["firstcard"].'"></div>
    </div>




    <script>
    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.remove("initialpos'.$GLOBALS["firstcard"].'");
            }else{
                entry.target.classList.add("initialpos'.$GLOBALS["firstcard"].'");
            }
        });
    },
    {
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>
    ';

    $GLOBALS["firstcard"]++;
}


?>