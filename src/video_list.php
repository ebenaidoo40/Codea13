<?php

function video_list_codea13(array $arr){
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#1E356C";
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

    if(!isset($arr["numberBackgroundColor"])){
        $arr["numberBackgroundColor"]="#03dac6";
    }
    if(!isset($arr["numberColor"])){
        $arr["numberColor"]="white";
    }

    
    echo '
    <style>
            .vidservices' . $GLOBALS["firstcard"] . '{
                display: flex;
                justify-content: '.$arr["justifyContent"].';
                gap: 30px;
                flex-wrap: wrap;
                background-color:'.$arr["backgroundColor"].';
                padding:20px;
            }
            .vidservices' . $GLOBALS["firstcard"] . '>*{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .vidframe' . $GLOBALS["firstcard"] . '{
                width: 300px;
                height: 220px;
                background-color: '.$arr["frameBackgroundColor"].';
                border-radius: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-weight: bold;
                box-shadow: 0 0 3px 4px '.$arr["frameShadow"].';
                overflow:hidden;
            }

            @media (max-width:430px) {
                .vidframe' . $GLOBALS["firstcard"] . '{
                    width: min(380px, 90%);
                }
            }
        </style>

        <div class="vidservices' . $GLOBALS["firstcard"] . '" >';

        $mykeys = array_keys($arr);


        for ($i = 0; $i < sizeof($arr); $i++) {

            if (is_array($arr[$mykeys[$i]])) {

                if (!isset($arr[$mykeys[$i]]["video"])) {
                    $arr[$mykeys[$i]]["video"] = "vendor/rezenebe/codea13/src/video/codea13.mp4";
                }

                if (!isset($arr[$mykeys[$i]]["numberBackgroundColor"])) {
                    $arr[$mykeys[$i]]["numberBackgroundColor"] =$arr["numberBackgroundColor"];
                }

                if (!isset($arr[$mykeys[$i]]["numberColor"])) {
                    $arr[$mykeys[$i]]["numberColor"] =$arr["numberColor"];
                }


                $vidnum = $i + 1;

                echo '
                <div>
                    <div class="vidframe' . $GLOBALS["firstcard"] . '">
                        <video width="100%" height="100%" style="object-fit: '.$arr["objectFit"].';" controls=1 playsinline preload="auto"  muted>
                            <source src="'.$arr[$mykeys[$i]]["video"].'">
                        </video>
                    </div>
                    <div style="display: flex; justify-content:center;background-color:'.$arr[$mykeys[$i]]["numberBackgroundColor"].'; border-radius:50%; align-items:center; color:'.$arr[$mykeys[$i]]["numberColor"].'; width:40px; height:40px">'.$vidnum.'</div>
                </div>';
            }
        }
        echo '</div>';

    $GLOBALS["firstcard"]++;
}

?>