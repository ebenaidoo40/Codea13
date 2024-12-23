<?php

function our_services_codea13(array $arr){
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

    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="#1E356C";
    }

    if(!isset($arr["objectFit"])){
        $arr["objectFit"]="contain";
    }

    
    echo '
        <style>
            .services' . $GLOBALS["firstcard"] . '{
                display: flex;
                justify-content:'.$arr["justifyContent"].';
                flex-wrap: wrap;
                gap: 30px;
                padding: 0 50px;
                background-color: '.$arr["backgroundColor"].';
            }

            .services' . $GLOBALS["firstcard"] . '>*{
                width: 150px;
                background-color: inherit;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .imgframeser' . $GLOBALS["firstcard"] . '{
                width: inherit;
                height: inherit;
                background-color: '.$arr["frameBackgroundColor"].';
                box-shadow: 0 0 3px 4px '.$arr["frameShadow"].';
                border-radius: 20px;
                text-align: center;
                margin-bottom: 8px;
            }

            .servicesimg' . $GLOBALS["firstcard"] . '{
                width: 95%;
                height: 150px;
                object-fit: '.$arr["objectFit"].';
                border-radius: 20px;
            }

            .iconlabel' . $GLOBALS["firstcard"] . '{
                font-weight: bold;
                color:'.$arr["titleColor"].';
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
                    $arr[$mykeys[$i]]["image"] = "image here";
                    $writehere = "image here";
                }else{
                    $writehere="";
                }

                if (!isset($arr[$mykeys[$i]]["serviceType"])) {
                    $arr[$mykeys[$i]]["serviceType"] = "service";
                }

                echo '
                <div>
                    <div class="imgframeser' . $GLOBALS["firstcard"] . '"><img class="servicesimg' . $GLOBALS["firstcard"] . '" src="'.$arr[$mykeys[$i]]["image"].'" alt="">'.$writehere.'</div>
                    <div class="iconlabel' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["serviceType"].'</div>
                </div>';
            }
        }
        echo '</div>';

    $GLOBALS["firstcard"]++;
}

?>