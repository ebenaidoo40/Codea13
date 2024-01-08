<?php
function parallax_constant(array $arr){

    
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

    

    
    echo '

        <style>
            .wrapper'.$GLOBALS["firstcard"].'{
                width: 100%;
                height: 100dvh;
                position: fixed;
                top:0;
                left:0;
                background: '.$backgroundImage4.' no-repeat top center;
                background-size: '.$arr["backgroundSize"].';
                overflow: hidden;
                z-index: -1000;
            }
        </style>
        
        <div class="wrapper'.$GLOBALS["firstcard"].'">asdfadf</div>';
}