<?php

function title(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="ENTER YOUR TITLE HERE";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["titleSize"])){
        $arr["titleSize"]="30px";
    }
    if(!isset($arr["titleWeight"])){
        $arr["titleWeight"]="bold";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="green";
    }

    if(!isset($arr["titleAlignment"])){
        $arr["titleAlignment"]="center";
    }



    echo '
        <style>
            .title'.$GLOBALS["firstcard"].'{
                text-align:'.$arr["titleAlignment"].'; 
                padding:20px;
                font-size:'.$arr["titleSize"].';
                font-weight:'.$arr["titleWeight"].';
                background-color:'.$arr["backgroundColor"].';
                color:'.$arr["titleColor"].';
            }
        </style>

        <div class="title'.$GLOBALS["firstcard"].'">'.$arr["title"].'</div>
    ';
}