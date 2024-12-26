<?php

function pic_info_icon_codea13(array $arr){
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="white";
    }

    if(!isset($arr["justifyContent"])){
        $arr["justifyContent"]="space-around";
    }

    if(!isset($arr["frameBackgroundColor"])){
        $arr["frameBackgroundColor"]="white";
    }

    if(!isset($arr["frameShadow"])){
        $arr["frameShadow"]="rgb(152, 171, 219)";
    }


    if(!isset($arr["objectFit"])){
        $arr["objectFit"]="contain";
    }

    if(!isset($arr["linkOnEach"])){
        $arr["linkOnEach"]="off";
    }

    if(!isset($arr["onePage"])){
        $arr["onePage"]="off";
    }

    
    echo '
        <style>
            .services' . $GLOBALS["firstcard"] . '{
                display: flex;
                justify-content:'.$arr["justifyContent"].';
                flex-wrap: wrap;
                gap: 30px;
                padding: 0 30px;
                background-color: '.$arr["backgroundColor"].';
            }

            .services' . $GLOBALS["firstcard"] . '>*{
                width: 250px;
                background-color: '.$arr["frameBackgroundColor"].';
                display: flex;
                flex-direction: column;
                align-items: center;
                padding:60px 30px;
                box-shadow: 0 0 23px 4px '.$arr["frameShadow"].';
                position:relative;
                margin-top:70px;
            }


            .imgframeser' . $GLOBALS["firstcard"] . '{
                width: 100px;
                height: 100px;
                background-color: '.$arr["frameBackgroundColor"].';
                box-shadow: 0 0 3px 4px '.$arr["frameShadow"].';
                border-radius: 50%;
                text-align: center;
                margin-bottom: 8px;
                position:absolute;
                top:-50px;
                overflow:hidden;
            }

            .servicesimg' . $GLOBALS["firstcard"] . '{
                width: 100%;
                height: 100%;
                object-fit: '.$arr["objectFit"].';
                border-radius: 20px;
            }

            .iconlabel' . $GLOBALS["firstcard"] . '{
                position:absolute;
                bottom:-25px;
                width:50px;
                height:50px;
                border-radius:50%;
                background-color:inherit;
                display:flex;
                justify-content:center;
                align-items:center;
                box-shadow: 0 0 3px 4px '.$arr["frameShadow"].';
            }

            @media (max-width:430px) {
                .services' . $GLOBALS["firstcard"] . '>*{
                    width: min(280px, 100%);
                    background-color: inherit;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
            }
        </style>

        <div class="services' . $GLOBALS["firstcard"] . '">';

        $mykeys = array_keys($arr);


        for ($i = 0; $i < sizeof($arr); $i++) {

            if (is_array($arr[$mykeys[$i]])) {

                if (!isset($arr[$mykeys[$i]]["image"])) {
                    $arr[$mykeys[$i]]["image"] = "vendor/rezenebe/codea13/src/images/codea13.png";
                    $writehere = "image here";
                }else{
                    $writehere="";
                }

                if (!isset($arr[$mykeys[$i]]["icon"])) {
                    $arr[$mykeys[$i]]["icon"] = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="currentColor"><path d="M1.99974 12.9999L1.9996 11L15.5858 11V5.58582L22 12L15.5858 18.4142V13L1.99974 12.9999Z"></path></svg>';
                }

                if (!isset($arr[$mykeys[$i]]["content"])) {
                    $arr[$mykeys[$i]]["content"] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, fugit et? Atque delectus quia quae quos esse maxime ne";
                }

                if($arr["linkOnEach"]=="on"){
                    if (!isset($arr[$mykeys[$i]]["link"])) {
                        $arr[$mykeys[$i]]["link"] = "";
                    }else{}
                    if($arr["onePage"]=="on"){
                        echo '
                        <div style="cursor:pointer" onclick="codea13SupperLoader(\''.$arr[$mykeys[$i]]["link"].'\')">
                            <div class="imgframeser' . $GLOBALS["firstcard"] . '"><img class="servicesimg' . $GLOBALS["firstcard"] . '" src="'.$arr[$mykeys[$i]]["image"].'" alt="">'.$writehere.'</div>
                            <div class="maininfo' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["content"].'</div>
                            <div class="iconlabel' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["icon"].'</div>
                        </div>
                        ';
                    }else{
                        echo '
                        <a style="cursor:pointer" href="'.$arr[$mykeys[$i]]["link"].'">
                            <div class="imgframeser' . $GLOBALS["firstcard"] . '"><img class="servicesimg' . $GLOBALS["firstcard"] . '" src="'.$arr[$mykeys[$i]]["image"].'" alt="">'.$writehere.'</div>
                            <div class="maininfo' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["content"].'</div>
                            <div class="iconlabel' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["icon"].'</div>
                        </a>
                        ';
                    }
                    
                }else{
                    echo '
                        <div>
                            <div class="imgframeser' . $GLOBALS["firstcard"] . '"><img class="servicesimg' . $GLOBALS["firstcard"] . '" src="'.$arr[$mykeys[$i]]["image"].'" alt="">'.$writehere.'</div>
                            <div class="maininfo' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["content"].'</div>
                            <div class="iconlabel' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["icon"].'</div>
                        </div>
                        ';
                    
                }

                
            }
        }
        echo '</div>';

    $GLOBALS["firstcard"]++;
}

?>