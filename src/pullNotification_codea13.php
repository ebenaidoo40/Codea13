<?php
function pullNotification_codea13(array $arr){
    if(!isset($arr["id"])){
        $arr["id"]="";
    }
    if(!isset($arr["objectFit"])){
        $arr["objectFit"]="contain";
    }
    if(!isset($arr["image"])){
        $arr["image"]="vendor/rezenebe/codea13/src/images/eben.webp";
    }
    echo '
    
        <style>
            .mainblock' . $GLOBALS["firstcard"] . '{
                width: min(350px, 80%);
                min-height:350px;
                background-color: #f0f0ff;
                border-radius: 50px;
                overflow: hidden;
                box-shadow: 0 0 4px 3px #454545;
                position: fixed;
                top: -200px;
                left:50%;
                transform:translate(-50%, -50%);
                transition: all 0.5s linear;
                opacity: 1;
                z-index:50;
                padding:20px;
            }
            .imgframe' . $GLOBALS["firstcard"] . '{
                width:100%;
                height: 300px;
            }

            .masterCover' . $GLOBALS["firstcard"] . '{
                position:fixed;
                width:100%;
                height:100%;
                top:0;
                background:#00000080;
                display:none;
            }
            
        </style>

        <div id="'.$arr["id"].'" class="mainblock' . $GLOBALS["firstcard"] . '">
            <div class="imgframe' . $GLOBALS["firstcard"] . '">
                <img width="100%" height="100%" style="object-fit: '.$arr["objectFit"].';" src="'.$arr["image"].'" alt="">
            </div>
            <div id="'.$arr["id"].'notificationmessage" style="display:flex; background-color:green; border-radius:20px; padding:10px; font-size:20px;color:white; flex:1; justify-content:center; align-items:center">Thank you for subscribing</div>
        </div>
        <div id="'.$arr["id"].'masterCover" class="masterCover' . $GLOBALS["firstcard"] . '"></div>
    ';

    $GLOBALS["firstcard"]++;
}
?>