<?php
function boxNotification_codea13(array $arr){
    if(!isset($arr["id"])){
        $arr["id"]="";
    }
    if(!isset($arr["topSpace"])){
        $arr["topSpace"]="50px";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    echo '
    
        <style>
            .masterCover' . $GLOBALS["firstcard"] . '{
                position:fixed;
                width:100%;
                height:100%;
                top:0;
                background:#00000080;
                display:none;
            }

            .successpop' . $GLOBALS["firstcard"] . '{
                position: fixed;
                box-sizing:border-box;
                top: -200px;
                width: 100%;
                background-color: #d7f8ed;
                color: rgb(0, 0, 0);
                font-weight: bold;
                text-align: center;
                padding: 20px;
                opacity: 1;
                transition: all 1s;
                z-index: 9999;
                left:0;
                color:'.$arr["textColor"].';
            }
            
        </style>

        <div id="'.$arr["id"].'" class="successpop' . $GLOBALS["firstcard"] . '" data-value="boxNotification">Thank you for subscribing</div>
        <div id="'.$arr["id"].'masterCover" class="masterCover' . $GLOBALS["firstcard"] . '" data-value="'.$arr["topSpace"].'"></div>
        <div></div>
    ';

    $GLOBALS["firstcard"]++;
}
?>