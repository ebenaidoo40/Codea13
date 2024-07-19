<?php
function image_content(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="Title Goes Here";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["content"])){
        $arr["content"]="The content of the title goes in here";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["topBackgroundColor"])){
        $arr["topBackgroundColor"]="tomato";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="blue";
    }
    if(!isset($arr["image"])){
        $arr["image"]="codea13/images/eben.webp";
    }
    if(!isset($arr["mobileImageHeight"])){
        $arr["mobileImageHeight"]="400px";
    }
    echo'
    <style>
        .mainDiv'.$GLOBALS["firstcard"].'{
            width:100%;
            overflow:hidden;
            background-color:transparent;
            position:relative;
            display:flex;
            min-height:400px;
        }
        .mainDiv'.$GLOBALS["firstcard"].'>*{
            background-color:'.$arr["backgroundColor"].';
            flex:1;
            display:flex;
            flex-direction:column;
            position:relative;
        }
        .topDiv1'.$GLOBALS["firstcard"].', .topDiv2'.$GLOBALS["firstcard"].'{
            height:120px;
            background-color:'.$arr["topBackgroundColor"].';
        }
        .floatimage'.$GLOBALS["firstcard"].'{
            position:absolute;
            height:100%;
            width:100%;
            top:0;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .image'.$GLOBALS["firstcard"].'{
            height:100%;
            object-fit:contain;
        }
        .contentbk'.$GLOBALS["firstcard"].'{
            background-color:transparent;
            padding:20px 50px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            flex:1;
        }
        .title'.$GLOBALS["firstcard"].'{
            font-size:35px;
            font-weight:bold;
            color:'.$arr["titleColor"].';
        }
        .content'.$GLOBALS["firstcard"].'{
            color:'.$arr["textColor"].';
            line-height:1.8;
        }
        @media (max-width:800px){
            .topDiv2'.$GLOBALS["firstcard"].'{
                display:none;
            }
            .mainDiv'.$GLOBALS["firstcard"].'{
                flex-direction:column;
            }
            .firstchild'.$GLOBALS["firstcard"].'{
                flex-basis:'.$arr["mobileImageHeight"].';
            }
        }
        
        
    </style>

    <div class="mainDiv'.$GLOBALS["firstcard"].'">
        <div class="firstchild'.$GLOBALS["firstcard"].'">
            <div class="topDiv1'.$GLOBALS["firstcard"].'"></div>
            <div class="floatimage'.$GLOBALS["firstcard"].'">
                <img class="image'.$GLOBALS["firstcard"].'" src="'.$arr["image"].'" />
            </div>
        </div>
        <div class="secondchild'.$GLOBALS["firstcard"].'">
            <div class="topDiv2'.$GLOBALS["firstcard"].'"></div>
            <div class="contentbk'.$GLOBALS["firstcard"].'">
                <div class="title'.$GLOBALS["firstcard"].'">'.$arr["title"].'</div>
                <div class="content'.$GLOBALS["firstcard"].'">'.$arr["content"].'</div>
            </div>
        </div>
    </div>
    

    ';

    $GLOBALS["firstcard"]++;

}
?>