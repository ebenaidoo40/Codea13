<?php

function card_container(array $arr){

    $boxsize = sizeof($arr);

    if(!isset($arr["top"])){
        $arr["top"]="none";
    }
    if(!isset($arr["left"])){
        $arr["left"]="none";
    }
    if(!isset($arr["right"])){
        $arr["right"]="none";
    }
    if(!isset($arr["bottom"])){
        $arr["bottom"]="none";
    }

    if(!isset($arr["width"])){
        $arr["width"]="100%";
    }
    if(!isset($arr["height"])){
        $arr["height"]="100px";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#d867ae";
    }
    if(!isset($arr["backgroundImage"])){
        $arr["backgroundImage"]="none";
    }
    if(!isset($arr["position"])){
        $arr["position"]="relative";
    }
    if(!isset($arr["padding"])){
        $arr["padding"]="10px";
    }
    if(!isset($arr["backgroundFiguresColor"])){
        $arr["backgroundFiguresColor"]="white";
    }
    

    echo '<style>
        .container'.$GLOBALS["firstcard"].'{
            top:'.$arr["top"].';
            left:'.$arr["left"].';
            right:'.$arr["right"].';
            bottom:'.$arr["bottom"].';
            min-height:'.$arr["height"].'; 
            width:'.$arr["width"].';
            background-color:'.$arr["backgroundColor"].';
            background-image:'.$arr["backgroundImage"].';
            background-size:cover;
            position:'.$arr["position"].';
            padding:'.$arr["padding"].';
            box-sizing:border-box;
        }

        @media (max-width:600px){
            .container'.$GLOBALS["firstcard"].'{
                min-height:'.$arr["height"].';
            }
    </style>


    <div class="container'.$GLOBALS["firstcard"].'">
    
    <svg style="position:absolute; top:0; right:0; width:50%; height:80%; z-index:0; opacity:0.4" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"><defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop></linearGradient></defs><path fill="'.$arr["backgroundFiguresColor"].'" d="M8.2,-12.2C14,-10.9,24.3,-15.4,27.8,-14.4C31.3,-13.3,27.9,-6.7,24.4,-2C21,2.7,17.5,5.4,14.7,7.7C12,10,9.9,11.8,7.6,18C5.3,24.2,2.6,34.7,0.9,33.1C-0.9,31.6,-1.8,18.1,-4.4,12.1C-7.1,6.1,-11.6,7.7,-13.4,6.9C-15.2,6.2,-14.3,3.1,-17.7,-2C-21.1,-7,-28.8,-14.1,-28.1,-16.7C-27.4,-19.3,-18.2,-17.5,-12.1,-18.7C-6.1,-19.8,-3,-23.9,-0.9,-22.3C1.2,-20.8,2.4,-13.5,8.2,-12.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path></svg>
    <svg style="position:absolute; bottom:0; width:50%; height:80%; z-index:0; opacity:0.4" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"> <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop></linearGradient></defs><path fill="'.$arr["backgroundFiguresColor"].'" d="M11.4,-13.4C16.6,-9.2,24,-7.4,29.6,-1.4C35.3,4.6,39.2,14.7,34.8,17.9C30.4,21.1,17.6,17.3,8.1,19.6C-1.5,22,-7.8,30.5,-13.8,31.2C-19.9,32,-25.5,25,-26.3,18C-27,10.9,-22.8,3.8,-19.7,-1.7C-16.6,-7.2,-14.6,-11.1,-11.5,-15.6C-8.4,-20.2,-4.2,-25.4,-0.6,-24.7C3.1,-24.1,6.2,-17.5,11.4,-13.4Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path></svg>';

    

    for($bcou=0; $bcou<$boxsize; $bcou++){
        if(isset($arr[$bcou])){
            $funct=$arr[$bcou];
            $funct = preg_replace('/\s\s+/', '', $funct); // this helps to remove all white space around the string
            $funct1 = explode("([", $funct);

            $funct2 = explode("])", $funct1[1]);
            $function_name=$funct1[0];
            $function_parameter=$funct2[0];

            $res = eben_str_arr($funct);

            if(is_array($res)){
                $res = $res;
            }else{
                $res = [$res];
            }
            call_user_func($function_name, $res);
        }else{}
    }
    

    echo '</div>';

    $GLOBALS["firstcard"]++;
}
?>