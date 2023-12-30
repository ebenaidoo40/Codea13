<?php
function parallax_effect_wrapper(array $arr){

    if(!isset($arr["height"])){
        $arr["height"]="80dvh";
    }
    if(!isset($arr["backgroundImage"])){
        $backgroundImage4 = "url(\"reze_frame_w/images/eben.webp\")";
    }else{
        if($arr["backgroundImage"]=="none"){
            $backgroundImage4 = "url(\"reze_frame_w/images/eben.webp\")";
        }else {
            $backgroundImage4="url(".$arr["backgroundImage"].")";
        }
    }

    if(!isset($arr["backgroundSize"])){
        $arr["backgroundSize"]="cover";
    }

    if(!isset($arr["scaleNumber"])){
        $arr["scaleNumber"]=3;
    }

    
    echo '

        <style>
            .wrapper'.$GLOBALS["firstcard"].'{
                width: 100%;
                height: '.$arr["height"].';
                position: absolute;
                background: '.$backgroundImage4.' no-repeat top center;
                background-size: '.$arr["backgroundSize"].';
                transform: translateZ(-1px) scale('.$arr["scaleNumber"].');
                overflow: hidden;
                z-index: -1000;
            }
        </style>
        
        <div class="wrapper'.$GLOBALS["firstcard"].'"></div>';
}