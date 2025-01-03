<?php
/**
 * @param array{
 * image,
 * background,
 * objectFit,
 * objectPosition,
 * padding,
 * title,
 * titleColor,
 * justifyContent,
 * height
 * } $arr
 */

function imgtxt_codea13(array $arr){
    if(!isset($arr["height"])){
        $arr["height"]="30vh";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Title";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["background"])){
        $arr["background"]="#00000080";
    }
    if(!isset($arr["padding"])){
        $arr["padding"]="0 40px";
    }
    if(!isset($arr["justifyContent"])){
        $arr["justifyContent"]="center";
    }
    if(!isset($arr["objectPosition"])){
        $arr["objectPosition"]="center";
    }
    if(!isset($arr["objectFit"])){
        $arr["objectFit"]="cover";
    }
    if(!isset($arr["image"])){
        $arr["image"]="vendor/rezenebe/codea13/src/images/codea13.png";
    }
    echo '
    <style>
        .mainbk' . $GLOBALS["firstcard"] . '{
            width:100%;
            height: '.$arr["height"].';
            position:relative;
        }
        .mainimg' . $GLOBALS["firstcard"] . '{
            width:100%;
            height:100%;
            object-fit:'.$arr["objectFit"].';
            object-position:'.$arr["objectPosition"].';
        }
        
        .coverbk' . $GLOBALS["firstcard"] . '{
            width:100%;
            height:100%;
            position:absolute;
            top:0;
            background:'.$arr["background"].';
            display:flex;
            padding:'.$arr["padding"].';
            justify-content:'.$arr["justifyContent"].';
            align-items:center;
            font-size:25px;
            color:'.$arr["titleColor"].';
            box-sizing:border-box;
        }
    </style>


    <div class="mainbk' . $GLOBALS["firstcard"] . '">
        <img class="mainimg' . $GLOBALS["firstcard"] . '" src="'.$arr["image"].'">
        <div class="coverbk' . $GLOBALS["firstcard"] . '">'.$arr["title"].'</div>
    </div>
    ';
    $GLOBALS["firstcard"]++;
}
?>