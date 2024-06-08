<?php

function image_section_content(array $arr)
{
    if (!isset($arr["title"])) {
        $arr["title"] = "WELCOME TO USE EBEN'S FRAME WORK";
    }
    if (!isset($arr["titlesub"])) {
        $arr["titlesub"] = "Explore now for easy web development";
    }
    if (!isset($arr["image"])) {
        $arr["image"] = "codea13/images/codea13.png";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#f0f0ff";
    }
    if (!isset($arr["innerBackgroundColor"])) {
        $arr["innerBackgroundColor"] = "none";
    }
    if (!isset($arr["z-index"])) {
        $arr["z-index"] = "-1";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "black";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "purple";
    }
    if (!isset($arr["rotate"])) {
        $arr["rotate"] = "0deg";
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
        z-index:' . $arr["z-index"] . ';
        background-color:' . $arr["innerBackgroundColor"] . ';
    }

    .home' . $GLOBALS["firstcard"] . '::after{
        content:" ";
        background-color:' . $arr["backgroundColor"] . ';
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
            object-fit:contain;
            max-height:400px;
            background-color:inherit;
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
    
    <div class="home' . $GLOBALS["firstcard"] . '">

    <img class="mainimg' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '" width="100%" height="100%" src="' . $arr["image"] . '" alt="image here">
    
        <div class="hometitlebk' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
            <h1 style="font-size:30px; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title"] . '</h1>
            <span style="line-height:30px;">' . $arr["titlesub"] . '</span>
        </div>
    </div>

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
        threshold: 0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>

    ';

    $GLOBALS["firstcard"]++;
}
