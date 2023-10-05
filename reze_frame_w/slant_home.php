<?php

function slant_home(array $arr){

    if(!isset($arr["title"])){
        $arr["title"]="WECOME TO CODEA 13";
    }
    if(!isset($arr["titlesub"])){
        $arr["titlesub"]="Code faster with codea 13";
    }
    if(!isset($arr["outerPaddingColor"])){
        $arr["outerPaddingColor"]="#e6e6fa";
    }
    if(!isset($arr["outerBorderColor"])){
        $arr["outerBorderColor"]="orange";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["titeColor"])){
        $arr["titleColor"]="orange";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    

    echo '

    <style>

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .completehome'.$GLOBALS["firstcard"].'{
            min-height:500px;
            background-color:'.$arr["outerBorderColor"].';
            clip-path: polygon(0 0, 100% 0%, 100% 70%, 0% 100%);
            position:relative;
        }
        .completehome_inner_div'.$GLOBALS["firstcard"].'{
            min-height:500px;
            background:url("'.$arr["image"].'");
            background-size:cover;
            background-position:50% 80%;
            clip-path: polygon(0 0, 100% 0%, 100% 60%, 0% 100%);
            position:relative;
            padding:20px 60px;
        }

        .completehome_inner_div'.$GLOBALS["firstcard"].'>*{
            transition: all 0.6s;
        }

        .heading'.$GLOBALS["firstcard"].'{
            font-size:44px;
            margin-top:100px;
            color:'.$arr["titleColor"].';
            font-family:"boldfont";
            text-shadow: 1px 1px #ffffff;
            max-width:50%;
        }
        .firstparagraph'.$GLOBALS["firstcard"].'{
            color:'.$arr["textColor"].';
            max-width:50%;
            text-shadow: 2px 2px 15px #000;
            line-height: 30px;
        }

        @media (max-width:767px) {

            .completehome_inner_div'.$GLOBALS["firstcard"].'{
                padding:20px 30px;
            }
            .heading'.$GLOBALS["firstcard"].'{
                max-width:80%;
                font-size:34px;
                margin-top:70px;
            }
            .firstparagraph'.$GLOBALS["firstcard"].'{
                max-width:90%;
            }
        }
    
        @media (max-width:450px){
            .heading'.$GLOBALS["firstcard"].'{
                margin-top:20px;
            }            
        }
    
        @media (max-width:325px){
            .heading'.$GLOBALS["firstcard"].'{
                margin-top:20px;
            }
        }
    </style>


    <div style="min-height:500px; background-color:'.$arr["outerPaddingColor"].'">
    <div class="completehome'.$GLOBALS["firstcard"].'">
        <div class="completehome_inner_div'.$GLOBALS["firstcard"].' ">
            <h1 class="heading'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">'.$arr["title"].'</h1><br>
            <p class="firstparagraph'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">'.$arr["titlesub"].'</p>
        </div>
    </div>
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