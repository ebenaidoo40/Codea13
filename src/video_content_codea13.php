<?php
/**
 * @param array{
 * video,
 * title,
 * titlesub,
 * titleColor,
 * textColor,
 * backgroundColor,
 * innerBackgroundColor,
 * backgroundImage,
 * flip,
 * rotate,
 * animation
 * } $arr
 */

function video_content_codea13(array $arr)
{
    if (!isset($arr["title"])) {
        $arr["title"] = "WELCOME TO USE EBEN'S FRAME WORK";
    }
    if (!isset($arr["titlesub"])) {
        $arr["titlesub"] = "Explore now for easy web development";
    }
    if (!isset($arr["video"])) {
        $arr["video"] = "vendor/rezenebe/codea13/src/video/codea13.mp4";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#f0f0ff";
    }
    if (!isset($arr["innerBackgroundColor"])) {
        $arr["innerBackgroundColor"] = "none";
    }
    if (!isset($arr["z-index"])) {
        $arr["z-index"] = "0";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "white";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "white";
    }
    if (!isset($arr["rotate"])) {
        $arr["rotate"] = "0deg";
    }
    if (!isset($arr["flip"])) {
        $arr["flip"] = "off";
    }
    if (!isset($arr["videoFit"])) {
        $arr["videoFit"] = "cover";
    }

    if (!isset($arr["backgroundImage"])) {
        $backgroundImageSlider2 = "url(\"vendor/rezenebe/codea13/src/images/blackStarBackground.webp\")";
    } else {
        if ($arr["backgroundImage"] == "none") {
            $backgroundImageSlider2 = "none";
        } else {
            $backgroundImageSlider2 = "url(" . $arr["backgroundImage"] . ")";
        }
    }

    echo '

    <style>
    .home' . $GLOBALS["firstcard"] . '{
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        min-height:400px;
        padding:60px;
        gap:60px;
        justify-content:center;
        align-items:center;
        position:relative;
        isolation:isolate;
        background-color:' . $arr["innerBackgroundColor"] . ';
        z-index:' . $arr["z-index"] . ';
    }

    .home' . $GLOBALS["firstcard"] . '::after{
        content:" ";
        background-color:' . $arr["backgroundColor"] . ';
        background-image:' . $backgroundImageSlider2 . ';
        background-position:center;
        background-size:cover;
        position:absolute;
        inset:0;
        transform: skewY(' . $arr["rotate"] . ');
        z-index:-1;
    }

        .initialpos' . $GLOBALS["firstcard"] . '{
            transform: ' . $arr["animation"] . ';
        }

        .home' . $GLOBALS["firstcard"] . '>*{
            background-color:white;
            opacity:1;
            transition: all 0.6s;
        }

        .hometitlebk' . $GLOBALS["firstcard"] . '{
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:' . $arr["textColor"] . ';
            background-color:inherit;
            padding:50px;
        }

        .mainimg' . $GLOBALS["firstcard"] . '{
            width:100%;
            object-fit:' . $arr["videoFit"] . ';
            aspect-ratio:16/9;
            background-color:inherit;
            border:1px solid white;
            padding:2px;
        }



        @media (max-width:700px){
            .hometitlebk' . $GLOBALS["firstcard"] . '{
                padding:20px;
            }
            
        }

        @media (max-width:360px){
            .home' . $GLOBALS["firstcard"] . '{
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                background-color:' . $arr["backgroundColor"] . ';
                min-height:400px;
                padding:60px 5%;
                gap:60px;
                justify-content:center;
            }
        }
    
            
    </style>
    
    <div class="home' . $GLOBALS["firstcard"] . '">';

    if ($arr["flip"] == "on") {
        echo '        
        <div class="hometitlebk' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
            <h1 style="font-size:30px; font-weight:bolder;color:' . $arr["titleColor"] . ' ">' . $arr["title"] . '</h1>
            <span style="line-height:30px">' . $arr["titlesub"] . '</span>
        </div>

        <video class="mainimg' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '" src="' . $arr["video"] . '" controls=1 playsinline preload="auto" autoplay muted>
            <source src="' . $arr["video"] . '">
        </video>';
    } else {
        echo '
        <video class="mainimg' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '" src="' . $arr["video"] . '" controls=1 playsinline preload="auto" autoplay muted>
            <source src="' . $arr["video"] . '">
        </video>
        

        <div class="hometitlebk' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
            <h1 style="font-size:30px; font-weight:bolder;color:' . $arr["titleColor"] . ' ">' . $arr["title"] . '</h1>
            <span style="line-height:30px">' . $arr["titlesub"] . '</span>
        </div>
        ';
    }


    echo '</div>



    <script>
    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.remove("initialpos' . $GLOBALS["firstcard"] . '");
            }else{
                entry.target.classList.add("initialpos' . $GLOBALS["firstcard"] . '");
            }
        });
    },
    {
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
    hiddenElements.forEach((el)=>observer.observe(el));


    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                
            }else{
                entry.target.pause();
            }
        });
    },
    {
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll("video");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>
    ';

    $GLOBALS["firstcard"]++;
}