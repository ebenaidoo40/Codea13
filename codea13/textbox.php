<?php


function textbox(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="Title Here";
    }

    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="purple";
    }
    if(!isset($arr["titleBackgroundColor"])){
        $arr["titleBackgroundColor"]="#cccccc";
    }

    if(!isset($arr["outerBackgroundColor"])){
        $arr["outerBackgroundColor"]="#ffffff";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#ffffff";
    }

    if(!isset($arr["content"])){
        $arr["content"]="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis maxime aut ipsum dolorem voluptate saepe quia ea illo, quasi in minima officiis laborum ipsa consequuntur sint quas dolores impedit necessitatibus.";
    }

    echo '
    <style>
        .mainblocky'.$GLOBALS["firstcard"].'{
            padding:0px 40px;
            box-sizing:border-box;
            width:70%;
            display:relative;
            background-color:'.$arr["outerBackgroundColor"].';           
        }
        .mainblock'.$GLOBALS["firstcard"].'{
            width:100%;
            min-height:200px;
            border:1px solid grey;
            box-sizing:border-box;
            background-color:'.$arr["backgroundColor"].';
            
        }
        .titleblock'.$GLOBALS["firstcard"].'{
            min-height:50px;
            display:flex;
            align-items:center;
            padding: 0 40px;
            box-sizing:border-box;
            background-color:'.$arr["titleBackgroundColor"].';
            color:'.$arr["titleColor"].';
            font-size:20px;
            font-weight:bold;
        }
        .contentblock'.$GLOBALS["firstcard"].'{
            padding:10px 40px;
            line-height:2;
            box-sizing:border-box;
        }

        @media (max-width:900px){
            .mainblocky'.$GLOBALS["firstcard"].'{
                width:100%;
                padding:0 10px;
            }
            
        }
    </style>

    <div class="mainblocky'.$GLOBALS["firstcard"].'">
        <div class="mainblock'.$GLOBALS["firstcard"].'">
            <div class="titleblock'.$GLOBALS["firstcard"].'">'.$arr["title"].'</div>
            <div class="contentblock'.$GLOBALS["firstcard"].'">'.$arr["content"].'</div>
        </div>
    </div>
    ';
    $GLOBALS["firstcard"]++;
}

?>