<?php
/**
 * @param array{
 * title,
 * titleColor,
 * backgroundColor,
 * image,
 * flip,
 * bkType,
 * content,
 * animation,
 * buttonSwitch,
 * buttonName,
 * buttonLink,
 * buttonTextColor,
 * buttonBackgroundColor,
 * buttonBackgroundHoverColor
 * } $arr
 */

function content_slantPic_codea13(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="TITLE GOES HERE";
    }
    if(!isset($arr["image"])){
        $arr["image"]="vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="purple";
    }
    
    if(!isset($arr["flip"])){
        $arr["flip"]="no";
    }
    if(!isset($arr["bkType"])){
        $arr["bkType"]="5";
    }
    if(!isset($arr["content"])){
        $arr["content"]="Content of this block goes in here";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if (!isset($arr["buttonName"])) {
        $arr["buttonName"] = "button";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#2ECCAE80";
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
    if (!isset($arr["downloadSwitch"])) {
        $arr["downloadSwitch"] = "";
    }
    if ($arr["downloadSwitch"] == "on") {
        $arr["downloadSwitch"] = "Download";
    } else {
        $arr["downloadSwitch"] = "";
    }
    echo '
        <style>
            .mainBlock' . $GLOBALS["firstcard"] . '{
                min-height:400px;
                background-color:'.$arr["backgroundColor"].';
                padding:0 10%;
            }
            .masterBlock' . $GLOBALS["firstcard"] . '{
                background: url("vendor/rezenebe/codea13/src/images/bk'.$arr["bkType"].'.png");
            }

            .mainBlock' . $GLOBALS["firstcard"] . '{
                display:flex; 
            }

            .initialpos' . $GLOBALS["firstcard"] . '{
                transform: ' . $arr["animation"] . ';
            }
                
            .textBk' . $GLOBALS["firstcard"] . '{
                background-color:transparent;
                flex:1;
                display:flex;
                flex-direction:column;
                justify-content:center;
                transition: all 0.6s;
            }
            .textBkf' . $GLOBALS["firstcard"] . '{
                background-color:transparent;
                flex:1;
                display:flex;
                flex-direction:column;
                justify-content:center;
                padding:50px;
                transition: all 0.6s;
            }
            .imgdiv' . $GLOBALS["firstcard"] . '{
                flex:1;
                clip-path: polygon(15% 0, 100% 0,100% 100%,0% 100%);
                background-color:transparent;
            }
            .imgdivf' . $GLOBALS["firstcard"] . '{
                flex:1;
                clip-path: polygon(0 0, 85% 0,100% 100%,0% 100%);
                background-color:transparent;
            }

            .mainImg' . $GLOBALS["firstcard"] . '{
                width:100%;
                height:100%;
                object-fit:cover;
            }
            .title' . $GLOBALS["firstcard"] . '{
                font-size:35px;
                font-weight:bold;
                color:'.$arr["titleColor"].';
            }

            .buttonpressbk' . $GLOBALS["firstcard"] . '{
                max-width: 300px;
                position: relative;
            }
                
        .buttonpress' . $GLOBALS["firstcard"] . '{
            padding: 10px;
            width: 100%;
            background-color: ' . $arr["buttonBackgroundColor"] . ';
            border-radius: 5px;
            cursor:pointer;
            color:' . $arr["buttonTextColor"] .';
            border:1px solid white;
            transition: all 0.6s;
            margin-top:10px;
        }
        .buttonpress' . $GLOBALS["firstcard"] . ':hover{
            background-color: ' . $arr["buttonBackgroundHoverColor"] . ';
        }

        @media (max-width:780px){
            .mainBlock' . $GLOBALS["firstcard"] . '{
                display:flex;
                flex-direction:column; 
            }
            .textBk' . $GLOBALS["firstcard"] . ', .textBkf' . $GLOBALS["firstcard"] . '{
                padding:20px 5%;
            }
        }



        </style>

        <div class="masterBlock' . $GLOBALS["firstcard"] . '">';

        if($arr["flip"]=="yes"){
            echo '
                <div class="mainBlock' . $GLOBALS["firstcard"] . '">
                    <div class="textBk' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                        <div class="title' . $GLOBALS["firstcard"] . '">'.$arr["title"].'</div>
                        <div class="content' . $GLOBALS["firstcard"] . '">'.$arr["content"].'</div>';

                        if ($arr["buttonSwitch"] == "on") {
                            echo '<a style="max-width: 300px;"  href="' . $arr["buttonLink"] . '" ' . $arr["downloadSwitch"] . '><div class="buttonpressbk' . $GLOBALS["firstcard"] . '"><button class="buttonpress' . $GLOBALS["firstcard"] . '">' . $arr["buttonName"] . '</button></div></a>';
                        } else {
                        }

                    echo ' 
                    </div>

                    <div class="imgdiv' . $GLOBALS["firstcard"] . '">
                        <img class="mainImg' . $GLOBALS["firstcard"] . '" src="'.$arr["image"].'" alt="image here">
                    </div>
                </div>           
            ';
        }else{
            echo '
                <div class="mainBlock' . $GLOBALS["firstcard"] . '">
                    <div class="imgdivf' . $GLOBALS["firstcard"] . '">
                        <img class="mainImg' . $GLOBALS["firstcard"] . '" src="'.$arr["image"].'" alt="image here">
                    </div>

                    <div class="textBkf' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                        <div class="title' . $GLOBALS["firstcard"] . '">'.$arr["title"].'</div>
                        <div class="content' . $GLOBALS["firstcard"] . '">'.$arr["content"].'</div>';

                        if ($arr["buttonSwitch"] == "on") {
                            echo '<a style="max-width: 300px;"  href="' . $arr["buttonLink"] . '" ' . $arr["downloadSwitch"] . '><div class="buttonpressbk' . $GLOBALS["firstcard"] . '"><button class="buttonpress' . $GLOBALS["firstcard"] . '">' . $arr["buttonName"] . '</button></div></a>';
                        } else {
                        }

                    echo ' 
                    </div>
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

    </script>
    ';
    $GLOBALS["firstcard"]++;
}
?>