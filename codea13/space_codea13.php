<?php
function space_codea13(array $arr){
    if(!isset($arr["width"])){
        $arr["width"]="100%";
    }
    if(!isset($arr["id"])){
        $arr["id"]="";
    }
    if(!isset($arr["height"])){
        $arr["height"]="50px";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="white";
    }

    echo '
    <style>
        .spaceme'.$GLOBALS["firstcard"].'{
            width:'.$arr["width"].';
            height:'.$arr["height"].';
            background-color:'.$arr["backgroundColor"].';
            position:relative;
            z-index:-1;
        }
    </style>    
    <div id="'.$arr["id"].'" class="spaceme'.$GLOBALS["firstcard"].'"></div>
   
    ';
    $GLOBALS["firstcard"]++;
    }
?>