<?php

function bcurve_block(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="WELCOME TO USE EBEN'S FRAME WORK";
    }
    if(!isset($arr["titlesub"])){
        $arr["titlesub"]="Explore now for easy web development";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#d867ae";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["flip"])){
        $arr["flip"]="no";
    }
    if(!isset($arr["borderBackgroundColor"])){
        $arr["borderBackgroundColor"]="black";
    }
    

    echo '

    <style>
    .home'.$GLOBALS["firstcard"].'{
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        min-height:400px;
        padding:20px 60px;
        gap:60px;
        justify-content:center;
        align-items:center;
        position:relative;
        isolation:isolate;
    }

    .home'.$GLOBALS["firstcard"].'::after{
        content:" ";
        background-color:'.$arr["backgroundColor"].';
        position:absolute;
        inset:0;
        transform: skewY(0deg);
        z-index:-1;
    }

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .home'.$GLOBALS["firstcard"].'>*{
            background-color:white;
            opacity:1;
            transition: all 0.6s;
        }

        .hometitlebk'.$GLOBALS["firstcard"].'{
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:'.$arr["textColor"].';
            background-color:inherit;
            padding:50px;
        }

        .mainimg'.$GLOBALS["firstcard"].'{
            object-fit:contain;
            max-height:400px;
            background-color:inherit;
        }

        .mainblock'.$GLOBALS["firstcard"].'{
            min-height:400px;
            background-color:'.$arr["borderBackgroundColor"].';
            box-sizing:border-box;
        }

        .bk1'.$GLOBALS["firstcard"].'{
            position:relative;
            background-color:'.$arr["backgroundColor"].';
            height:50px;
            -webkit-mask-image:url("reze_frame_w/assets/bbcurve.svg");
        }

        .bk2'.$GLOBALS["firstcard"].'{
            position:relative;
            background-color:'.$arr["backgroundColor"].';
            height:50px;
            -webkit-mask-image:url("reze_frame_w/assets/bcurve.svg");
        }

        .contentblock'.$GLOBALS["firstcard"].'{
            min-height:300px;
            background-color:'.$arr["backgroundColor"].';
        }



        @media (max-width:700px){
            .hometitlebk'.$GLOBALS["firstcard"].'{
                padding:20px;
            }
            
        }

        @media (max-width:360px){
            .home'.$GLOBALS["firstcard"].'{
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                background-color:'.$arr["backgroundColor"].';
                min-height:400px;
                padding:60px 5%;
                gap:60px;
                justify-content:center;
            }
        }
    
            
    </style>
    <div class="mainblock'.$GLOBALS["firstcard"].'">
        <div class="bk1'.$GLOBALS["firstcard"].'"></div>
        <div class="home'.$GLOBALS["firstcard"].'">';

        if($arr["flip"]=="yes"){
            echo '<img class="mainimg'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'" width="100%" height="100%" src="'.$arr["image"].'" alt="image here">
                <div class="hometitlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
                    <h1 style="font-size:30px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title"].'</h1>
                    <span style="line-height:30px;">'.$arr["titlesub"].'</span>
                </div>';
            }else{
                echo '
                <div class="hometitlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
                    <h1 style="font-size:30px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title"].'</h1>
                    <span style="line-height:30px;">'.$arr["titlesub"].'</span>
                </div>
                <img class="mainimg'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'" width="100%" height="100%" src="'.$arr["image"].'" alt="image here">
                ';}
       echo '
        </div>
        <div class="bk2'.$GLOBALS["firstcard"].'"></div>
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
        threshold: 0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>

    ';

    $GLOBALS["firstcard"]++;
}

?>