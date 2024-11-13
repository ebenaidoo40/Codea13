<?php
function pic_home_codea13(array $arr)
{
    if (!isset($arr["image1"])) {
        $arr["image1"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["image2"])) {
        $arr["image2"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["image3"])) {
        $arr["image3"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["backgroundImage"])) {
        $arr["backgroundImage"] = "none";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#f0f0ff";
    }
    if (!isset($arr["title"])) {
        $arr["title"] = "Title Here";
    }
    if (!isset($arr["content"])) {
        $arr["content"] = "Content goes here";
    }
    if (!isset($arr["titleSize"])) {
        $arr["titleSize"] = "8vw";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "#000000";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "#000000";
    }
    if (!isset($arr["picRadius"])) {
        $arr["picRadius"] = "30%";
    }
    if (!isset($arr["flip"])) {
        $arr["flip"] = "off";
    }
    if (isset($arr["flip"])) {
        if ($arr["flip"] == "on") {
            $flipVal = "row-reverse";
        } else {
            $flipVal = "none";
        }
    }

    if (isset($arr["firstImageMobileVisibility"])) {
        if ($arr["firstImageMobileVisibility"] == "off") {
            $firstImageMobileVisibility = "none";
        } else {
            $firstImageMobileVisibility = "block";
        }
    } else {
        $firstImageMobileVisibility = "block";
    }
    echo '
        <style>
            .pichomeblock' . $GLOBALS["firstcard"] . '{
                min-height:600px;
                background-color:' . $arr["backgroundColor"] . ';
                display:flex;
                justify-content:center;
                padding:20px;
                box-sizing:border-box;
                gap:10px;
                background-image: url("' . $arr["backgroundImage"] . '");
                flex-direction:' . $flipVal . ';
            }
            .pichomeblock' . $GLOBALS["firstcard"] . '>*{
                background-color:#00000000;
            }

            .homechild' . $GLOBALS["firstcard"] . ':first-child{
                border-radius:' . $arr["picRadius"] . ';
                width:25%;
                height:fit-content;
            }
            .homechild' . $GLOBALS["firstcard"] . ':nth-child(2){
                width:50%;
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
            }
            .homechild' . $GLOBALS["firstcard"] . ':nth-child(3){
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
            }
            
            .homechild' . $GLOBALS["firstcard"] . ':last-child{
                border-radius:' . $arr["picRadius"] . ';
                width:25%;
                height:fit-content;
                align-self:flex-end;
            }

            .title' . $GLOBALS["firstcard"] . '{
                text-align:center;
                color:' . $arr["titleColor"] . ';
                font-size:' . $arr["titleSize"] . ';
                font-weight:bold;
            }

            @media (max-width:850px){
                .homechild' . $GLOBALS["firstcard"] . ':first-child{
                    align-self:flex-end;
                    width:40%;
                    display:' . $firstImageMobileVisibility . ';
                }
                .homechild' . $GLOBALS["firstcard"] . ':nth-child(2){
                    width:80%;
                    align-self:center;
                }
                .homechild' . $GLOBALS["firstcard"] . ':last-child{
                    width:40%;
                    align-self:flex-start;
                }
                .pichomeblock' . $GLOBALS["firstcard"] . '{
                    flex-direction:column;
                    min-height:400px;
                }
            }


        </style>

        <div class="pichomeblock' . $GLOBALS["firstcard"] . '">
        
        <div class="homechild' . $GLOBALS["firstcard"] . '"><img style="width:100%; object-fit:contain;border-radius:' . $arr["picRadius"] . '; " src="' . $arr["image1"] . '"></div>
        <div class="homechild' . $GLOBALS["firstcard"] . '"><img style="width:100%; object-fit:contain;border-radius:' . $arr["picRadius"] . '; " src="' . $arr["image2"] . '"></div>
        
        <div class="homechild' . $GLOBALS["firstcard"] . '">
            <h1 class="title' . $GLOBALS["firstcard"] . '">' . $arr["title"] . '</h1>
            <div style=" text-align:center; line-height:1.5; color:' . $arr["textColor"] . '">' . $arr["content"] . '</div>
        </div>
        
        <div class="homechild' . $GLOBALS["firstcard"] . '"><img style="width:100%; object-fit:contain;border-radius:' . $arr["picRadius"] . '; " src="' . $arr["image3"] . '"></div>    

            
        </div>';
    $GLOBALS["firstcard"]++;
}