<?php

function hardcard(array $arr){
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam illum veniam libero velit laborum aut et dolorum dicta, iusto eius enim, at minus, tenetur ipsam labore quo inventore expedita!";

    if(!isset($arr["height"])){
        $arr["height"]="auto";
    }else{
        $arr["height"]=$arr["height"];
    }
    if(!isset($arr["title"])){
        $arr["title"]="Title";
    }
    if(!isset($arr["content"])){
        $arr["content"]=$lorem;
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#f0f0ff";
    }


    if(!isset($arr["align"])){
        $arr["transform"]="none";
        $arr["left"]="0px";
        $arr["right"]="none";
        $arr["top"]="0px";
        $arr["bottom"]="none";
    }else{
        if($arr["align"]=="left"){
            $arr["left"]="0%";
            $arr["right"]="none";
            $arr["top"]="0px";
            $arr["bottom"]="none";
            $arr["transform"]="translate(0%,0%)";            
        }
        else if($arr["align"]=="center"){
            $arr["left"]="calc(50% - 10px)";
            $arr["right"]="none";
            $arr["top"]="0px";
            $arr["bottom"]="none";
            $arr["transform"]="translate(-50%,0%)";            
        }
        else if($arr["align"]=="right"){
            $arr["left"]="calc(100% - 20px)";
            $arr["right"]="none";
            $arr["top"]="0px";
            $arr["bottom"]="none";
            $arr["transform"]="translate(-100%,0%)";            
        }
        
        else if(is_array($arr["align"])){

            if(!isset($arr["align"]["left"])){
                $arr["left"]="none";
            }else{$arr["left"]=$arr["align"]["left"]; }

            if(!isset($arr["align"]["right"])){
                $arr["right"]="none";
            }else{$arr["right"]=$arr["align"]["right"];}

            if(!isset($arr["align"]["top"])){
                $arr["top"]="none";
            }else{$arr["top"]=$arr["align"]["top"];}

            if(!isset($arr["align"]["bottom"])){
                $arr["bottom"]="none";
            }else{$arr["bottom"]=$arr["align"]["bottom"];}
            
            $arr["transform"]="none";
        }
    }

    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }
    if(!isset($arr["width"])){
        $arr["width"]="600px";
    }else{
        $arr["width"]="calc(".$arr["width"]." - 20px)";
    }

    echo '<style>
        .firstcard'.$GLOBALS["firstcard"].'{
            max-width:'.$arr["width"].';
            height:'.$arr["height"].';
            background-color:'.$arr["backgroundColor"].';
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            padding:20px;
            box-sizing:border-box;
            display:flex;
            flex-direction:column;
            position:relative;
            top:'.$arr["top"].';
            left:'.$arr["left"].';
            right:'.$arr["right"].';
            bottom:'.$arr["bottom"].';
            transform:'.$arr["transform"].';
            color:'.$arr["textColor"].';
            overflow-y:hidden;
            margin:10px;
            line-height:25px;
            font-family:"mainfont";
            font-size:15px;
        }

        .firstcard'.$GLOBALS["firstcard"].'::after{
            content: "";
            position: absolute;
            top:10px;
            left:10px;
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            background-color: transparent;
            box-shadow: inset -5px -5px 9px rgba(255,255,255,0.45), inset 5px 5px 9px rgba(94,104,121,0.3);
          }

        .card-h3'.$GLOBALS["firstcard"].'{
            color:'.$arr["titleColor"].';
            font-size:22px;
        }

            @media (max-width:600px){
                .firstcard'.$GLOBALS["firstcard"].'{
                    max-width: '.$arr["width"].';
                }.
            }

    </style>';
    echo '<div class="firstcard'.$GLOBALS["firstcard"].'">
            <h3 class="card-h3'.$GLOBALS["firstcard"].'">'.$arr["title"].'</h3>
            <p>'.$arr["content"].'</p>
    </div>';

    $GLOBALS["firstcard"]++;
}

?>