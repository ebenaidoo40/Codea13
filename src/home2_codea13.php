<?php
/**
 * @param array{
 * id,
 * backgroundGradient,
 * backgroundImage,
 * title,
 * titlesub,
 * titleColor,
 * titlesubColor,
 * titleBlockBackgroundColor,
 * image,
 * buttonSwitch,
 * buttonName,
 * buttonBackgroundColor,
 * buttonBackgroundHoverColor,
 * buttonTextColor,
 * buttonLink,
 * downloadSwitch,
 * animation
 * } $arr
 */

function home2_codea13(array $arr)
{
    if (!isset($arr["title"])) {
        $arr["title"] = "CODEA 13 FRAME WORK";
    }
    if (!isset($arr["titlesub"])) {
        $arr["titlesub"] = "Explore now for easy web development";
    }
    if (!isset($arr["image"])) {
        $arr["image"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "white";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#00000000";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "black";
    }
    if (!isset($arr["titlesubColor"])) {
        $arr["titlesubColor"] = "black";
    }
    if (!isset($arr["titleBackgroundColor"])) {
        $arr["titleBackgroundColor"] = "none";
    }
    if (!isset($arr["backgroundImage"])) {
        $arr["backgroundImage"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["buttonName"])) {
        $arr["buttonName"] = "button";
    }
    if (!isset($arr["buttonTextColor"])) {
        $arr["buttonTextColor"] = "black";
    }
    if (!isset($arr["buttonSwitch"])) {
        $arr["buttonSwitch"] = "off";
    }
    if (!isset($arr["buttonLink"])) {
        $arr["buttonLink"] = "";
    }

    if (!isset($arr["buttonBackgroundColor"])) {
        $arr["buttonBackgroundColor"] = "none";
    }
    if (!isset($arr["buttonBackgroundHoverColor"])) {
        $arr["buttonBackgroundHoverColor"] = $arr["buttonBackgroundColor"];
    }
    if (!isset($arr["backgroundGradient"])) {
        $arr["backgroundGradient"] = "linear-gradient(90deg, rgba(255,255,255,0.9023984593837535) 49%, rgba(150,235,242,0.4906337535014006) 75%, rgba(149,247,235,0.06766456582633051) 100%)";
    }
    if (!isset($arr["downloadSwitch"])) {
        $arr["downloadSwitch"] = "";
    }
    if ($arr["downloadSwitch"] == "on") {
        $arr["downloadSwitch"] = "Download";
    } else {
        $arr["downloadSwitch"] = "";
    }
    if (!isset($arr["id"])) {
        $arr["id"] = "";
    }
    if (!isset($arr["titleBlockBackgroundColor"])) {
        $arr["titleBlockBackgroundColor"] = "#00000000";
    }


    echo '

    <style>
        .home' . $GLOBALS["firstcard"] . '{
            background-image:url("' . $arr["backgroundImage"] . '");
            background-color:' . $arr["backgroundColor"] . ';
            background-size:cover;
            background-position:center;
            min-height:500px;
        }

        .home2gradient' . $GLOBALS["firstcard"] . '{
            box-sizing:border-box;
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 600px));
            min-height:500px;
            padding:60px;
            gap:60px;
            justify-content:left;
            background: ' . $arr["backgroundGradient"] . ';
        }


        .initialpos' . $GLOBALS["firstcard"] . '{
            transform: ' . $arr["animation"] . ';
        }

        .home' . $GLOBALS["firstcard"] . '>*>*{
            background-color:inherit;
            transition: all 0.6s;
        }

        .hometitlebk' . $GLOBALS["firstcard"] . '{
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:' . $arr["textColor"] . ';
            background-color:' . $arr["titleBlockBackgroundColor"] . ';
            padding:20px;
        }

        .mainimg' . $GLOBALS["firstcard"] . '{
            max-height:100%;
            min-width:100%;
            object-fit:contain;
            background-color: ' . $arr["titleBlockBackgroundColor"] . ';
        }

        .buttonpressbk' . $GLOBALS["firstcard"] . '{
            max-width: 300px;
            position: relative;
            
        }
        .buttonpress' . $GLOBALS["firstcard"] . '{
            padding: 10px;
            width: 100%;
            background-color: ' . $arr["buttonBackgroundColor"] . ';
            border-radius: 50px;
            cursor:pointer;
            color:' . $arr["buttonTextColor"] . ';
            border:1px solid white;
            transition:all 0.6s;
        }
        .buttonpress' . $GLOBALS["firstcard"] . ':hover{
            background-color: ' . $arr["buttonBackgroundHoverColor"] . ';
        }

        @media (max-width:600px){
            .home' . $GLOBALS["firstcard"] . '{
                gap:30px;
            }
            .home2gradient' . $GLOBALS["firstcard"] . '{
                padding:30px;
            }
        }

        
    
            
    </style>
    
    <div id="' . $arr["id"] . '" class="home' . $GLOBALS["firstcard"] . '">

        <div class="home2gradient' . $GLOBALS["firstcard"] . '">

            <div class="hometitlebk' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                <h1 style="font-size:40px;background-color:' . $arr["titleBackgroundColor"] . '; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title"] . '</h1>
                <span style="color:' . $arr["titlesubColor"] . '; line-height:30px">' . $arr["titlesub"] . '</span><br>';
    if ($arr["buttonSwitch"] == "on") {
        echo '<a style="max-width: 300px;" href="' . $arr["buttonLink"] . '" ' . $arr["downloadSwitch"] . '><div class="buttonpressbk' . $GLOBALS["firstcard"] . '"><button class="buttonpress' . $GLOBALS["firstcard"] . '">' . $arr["buttonName"] . '</botton></div></a>';
    } else {
    }

    echo '</div>

            
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
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>
    ';

    $GLOBALS["firstcard"]++;
}