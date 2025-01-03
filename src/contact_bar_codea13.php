<?php
/**
 * @param array{
 * backgroundColor,
 * justifyContent,
 * frameBackgroundColor,
 * frameShadow,
 * textSize,
 * entry1:[]
 * } $arr
 */

function contact_bar_codea13(array $arr){
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
    if(!isset($arr["textSize"])){
        $arr["textSize"]="12px";
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
                width: 270px;
                background-color: '.$arr["frameBackgroundColor"].';
                display: flex;
                align-items: center;
                padding:10px 10px;
                box-shadow: 0 0 5px 4px '.$arr["frameShadow"].';
                position:relative;
                margin-top:10px;
                border-radius:20px;
                overflow:hidden;
            }


            .maininfo' . $GLOBALS["firstcard"] . '{
                flex:4;
                height: 100%;
                background-color: '.$arr["frameBackgroundColor"].';
                display:flex;
                align-items:center;
                padding:0 5px;
                font-size:'.$arr["textSize"].';
            }

            .iconlabel' . $GLOBALS["firstcard"] . '{
                flex:1;
                width:50px;
                height:100%;
                background-color:inherit;
                display:flex;
                justify-content:center;
                align-items:center;
            }

            @media (max-width:675px) {
                .services' . $GLOBALS["firstcard"] . '>*{
                    width:100%;
                    background-color: inherit;
                    display: flex;
                    align-items: center;
                }
            }
        </style>

        <div class="services' . $GLOBALS["firstcard"] . '">';

        $mykeys = array_keys($arr);


        for ($i = 0; $i < sizeof($arr); $i++) {

            if (is_array($arr[$mykeys[$i]])) {


                if (!isset($arr[$mykeys[$i]]["icon"])) {
                    $arr[$mykeys[$i]]["icon"] = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="currentColor"><path d="M1.99974 12.9999L1.9996 11L15.5858 11V5.58582L22 12L15.5858 18.4142V13L1.99974 12.9999Z"></path></svg>';
                }

                if (!isset($arr[$mykeys[$i]]["content"])) {
                    $arr[$mykeys[$i]]["content"] = "Lorem ipsum, dolor sit amet consectetur";
                }

                
                echo '
                    <div>
                        <div class="iconlabel' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["icon"].'</div>
                        <div class="maininfo' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["content"].'</div>
                    </div>
                    ';  
            }
        }
        echo '</div>';

    $GLOBALS["firstcard"]++;
}

?>