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
    

    echo '<style>
        .container'.$GLOBALS["firstcard"].'{
            top:'.$arr["top"].';
            left:'.$arr["left"].';
            right:'.$arr["right"].';
            bottom:'.$arr["bottom"].';
            min-height:'.$arr["height"].'; 
            width:'.$arr["width"].';
            background-color:'.$arr["backgroundColor"].';
            backgound-image:'.$arr["backgroundImage"].';
            position:'.$arr["position"].';
            padding:'.$arr["padding"].';
            box-sizing:border-box;
        }

        @media (max-width:600px){
            .container'.$GLOBALS["firstcard"].'{
                min-height:'.$arr["height"].';
            }
    </style>


    <div class="container'.$GLOBALS["firstcard"].'">';

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