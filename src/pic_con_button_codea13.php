<?php
/**
 * @param array{
 * image,
 * title,
 * content,
 * titleColor,
 * textColor,
 * mainBackgroundColor,
 * backgroundColor,
 * backgroundBorderColor,
 * contentSub1,
 * contentSub2,
 * buttonSwitch,
 * buttonBackgroundColor,
 * buttonHoverBackgroundColor,
 * buttonName,
 * buttonTextColor,
 * buttonHoverTextColor,
 * buttonLink,
 * downloadSwitch
 * } $arr
 */

function pic_con_button_codea13(array $arr)
{

    if (!isset($arr["image"])) {
        $arr["image"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["buttonName"])) {
        $arr["buttonName"] = "Book Me";
    }

    if (!isset($arr["buttonLink"])) {
        $arr["buttonLink"] = "";
    }

    if (!isset($arr["buttonSwitch"])) {
        $arr["buttonSwitch"] = "on";
    }

    if (!isset($arr["downloadSwitch"])) {
        $arr["downloadSwitch"] = "";
    }
    if ($arr["downloadSwitch"] == "on") {
        $arr["downloadSwitch"] = "Download";
    } else {
        $arr["downloadSwitch"] = "";
    }


    if (!isset($arr["title"])) {
        $arr["title"] = "Title Here";
    }
    if (!isset($arr["content"])) {
        $arr["content"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit soluta culpa itaque earum, ipsam dicta maxime sint repellendus laudantium facere quod? Dolor iure ipsum illum officia id provident quidem sunt.";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "purple";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "white";
    }
    if (!isset($arr["mainBackgroundColor"])) {
        $arr["mainBackgroundColor"] = "white";
    }
    if (!isset($arr["backgroundBorderColor"])) {
        $arr["backgroundBorderColor"] = "tomato";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "black";
    }
    if (!isset($arr["contentSub1"])) {
        $arr["contentSub1"] = "Price from:";
    }

    if (!isset($arr["contentSub2"])) {
        $arr["contentSub2"] = "$5000";
    }

    if (!isset($arr["buttonBackgroundColor"])) {
        $arr["buttonBackgroundColor"] = "purple";
    }
    if (!isset($arr["buttonHoverBackgroundColor"])) {
        $arr["buttonHoverBackgroundColor"] = "brown";
    }
    if (!isset($arr["buttonTextColor"])) {
        $arr["buttonTextColor"] = "white";
    }
    if (!isset($arr["buttonHoverTextColor"])) {
        $arr["buttonHoverTextColor"] = "white";
    }



    echo '
        <style>
            .masterblock' . $GLOBALS["firstcard"] . '{
                background-color:' . $arr["mainBackgroundColor"] . ';
                padding: 30px 60px;
            }
            .mainblock' . $GLOBALS["firstcard"] . '{
                box-sizing:border-box;
                display:flex;
                justify-content:center;
                padding:5px;
                background-color:' . $arr["backgroundBorderColor"] . ';
                box-shadow: 0 0 5px 3px #334;
            }
            .mainblock' . $GLOBALS["firstcard"] . '>*{
                background-color:' . $arr["backgroundColor"] . ';
                padding:20px;
                display:flex;
                flex-direction:column;  
                box-sizing:border-box;
                flex-grow:1;
            }
            .imageleft' . $GLOBALS["firstcard"] . '{
                width:100%;
                object-fit:cover;
                height:200px;
            }
            .button' . $GLOBALS["firstcard"] . '{
                padding:8px 25px;
                background-color:' . $arr["buttonBackgroundColor"] . ';
                color:' . $arr["buttonTextColor"] . ';
                cursor:pointer;
                font-size:20px;
            }
            .button' . $GLOBALS["firstcard"] . ':hover{
                background-color:' . $arr["buttonHoverBackgroundColor"] . ';
                color:' . $arr["buttonHoverTextColor"] . ';
            }
            .contentblock' . $GLOBALS["firstcard"] . '{
                width:40%;
                border-right:2px solid ' . $arr["backgroundBorderColor"] . ';
            }
            .imageblock' . $GLOBALS["firstcard"] . '{
                width:25%;
                justify-content:center;
                align-items:center;
                border-right:2px solid ' . $arr["backgroundBorderColor"] . ';
            }
            .rightblock' . $GLOBALS["firstcard"] . '{
                justify-content:center; 
                align-items:center;
            }


            @media (max-width:900px){
                .mainblock' . $GLOBALS["firstcard"] . '{
                    flex-direction:column;
                }
                .imageblock' . $GLOBALS["firstcard"] . ', .contentblock' . $GLOBALS["firstcard"] . ', .rightblock' . $GLOBALS["firstcard"] . '{
                    width:100%;
                    border-right:none;
                }
                .imageleft' . $GLOBALS["firstcard"] . '{
                    object-fit:cover;
                }
                
            }

            @media(max-width:600px){
                
                .imageleft' . $GLOBALS["firstcard"] . '{
                    object-fit:contain;
                    height:fit-content;
                }

                .masterblock' . $GLOBALS["firstcard"] . '{
                    padding:30px 15px;
                }
            }
            

            

        </style>
        
        <div class="masterblock' . $GLOBALS["firstcard"] . '">
         <div class="mainblock' . $GLOBALS["firstcard"] . '">

            <div class="imageblock' . $GLOBALS["firstcard"] . '"><img class="imageleft' . $GLOBALS["firstcard"] . '" src="' . $arr["image"] . '" ></div>

            <div class="contentblock' . $GLOBALS["firstcard"] . '">
                <h2 style="font-size:25px; color:' . $arr["titleColor"] . '">' . $arr["title"] . '</h2><br>
                <div style="text-align: justify; line-height:1.8; color:' . $arr["textColor"] . '">' . $arr["content"] . '</div>
            </div>

            <div class="rightblock' . $GLOBALS["firstcard"] . '">
                <h2 style="font-size:25px; text-align:center; margin-bottom:10px">' . $arr["contentSub1"] . '</h2>
                <h2 style="font-size:25px; margin-bottom:20px">' . $arr["contentSub2"] . '</h2>';

    if ($arr["buttonSwitch"] == "on") {
        echo '<a href="' . $arr["buttonLink"] . '" ' . $arr["downloadSwitch"] . '><button class="button' . $GLOBALS["firstcard"] . '" type="button">' . $arr["buttonName"] . '</button></a>';
    }

    echo '</div>

         </div></div>
    ';

    $GLOBALS["firstcard"]++;
}