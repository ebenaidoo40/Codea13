<?php
/**
 * @param array{
 * leftTitle,
 * rightTitle,
 * leftContent,
 * rightContent,
 * rightContentColor,
 * cardBackgroundColor,
 * background,
 * rightTitleBackgroundColor,
 * rightTitleTop,
 * } $arr
 */

function schedule_codea13(array $arr){
    $Lorem = "ipsum dolor sit amet consectetur adipisicing elit. At saepe sint quo voluptas natus odit placeat consequatur aut sit, doloremque cumque ullam eveniet labore suscipit quidem similique minus repudiandae optio!";
    if(!isset($arr["leftTitle"])){
        $arr["leftTitle"]="Left Title Here";
    }
    if(!isset($arr["rightTitle"])){
        $arr["rightTitle"]="Right Title Here";
    }
    if(!isset($arr["leftContent"])){
        $arr["leftContent"]=$Lorem;
    }
    if(!isset($arr["rightContent"])){
        $arr["rightContent"]=$Lorem;
    }
    if(!isset($arr["rightContentColor"])){
        $arr["rightContentColor"]="white";
    }
    if(!isset($arr["cardBackgroundColor"])){
        $arr["cardBackgroundColor"]=" #000000";
    }
    if(!isset($arr["background"])){
        $arr["background"]=" #f0f0ff";
    }
    if(!isset($arr["rightTitleTop"])){
        $arr["rightTitleTop"]="-15px";
    }
    if(!isset($arr["rightTitleColor"])){
        $arr["rightTitleColor"]="white";
    }
    if(!isset($arr["leftTitleColor"])){
        $arr["leftTitleColor"]="green";
    }
    if(!isset($arr["rightTitleBackgroundColor"])){
        $arr["rightTitleBackgroundColor"]=" #152043";
    }
    
    echo '
    <style>
        .mainbk' . $GLOBALS["firstcard"] . '{
            display:flex;
            padding:0 8%;
            flex-wrap:wrap;
            gap:30px;
            align-items:center;
            background:'.$arr["background"].';
        }
        .leftbk' . $GLOBALS["firstcard"] . '{
            min-width:220px;
            display:flex;
            flex-direction:column;
            flex:2
        }
        .rightbk' . $GLOBALS["firstcard"] . '{
            min-width:220px;
            flex:1;
            min-height:50px;
            background:green;
            border-radius:10px;
            position:relative;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:50px 10px;
            background-color:'.$arr["cardBackgroundColor"].';
        }
        .notetitle' . $GLOBALS["firstcard"] . '{
            position:absolute;
            top:'.$arr["rightTitleTop"].';
            width:100px;
            padding:5px;
            background-color:'.$arr["rightTitleBackgroundColor"].';
            left:50%;
            transform:translateX(-50%);
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:10px;
            color:'.$arr["rightTitleColor"].';
            text-align:center;
            
        }
    </style>

    <div class="mainbk' . $GLOBALS["firstcard"] . '">
        <div class="leftbk' . $GLOBALS["firstcard"] . '">
            <h1 style="font-size:35px; color:'.$arr["leftTitleColor"].', margin-bottom:20px">'.$arr["leftTitle"].'</h1>
            <div>'.$arr["leftContent"].'</div>
        </div>


        <div class="rightbk' . $GLOBALS["firstcard"] . '">
            <h2 class="notetitle' . $GLOBALS["firstcard"] . '">'.$arr["rightTitle"].'</h2>
            <div style="color:'.$arr["rightContentColor"].'">'.$arr["rightContent"].'</div>
        </div>
    </div>
    ';
}
?>