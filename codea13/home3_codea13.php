<?php
function home3_codea13(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="TITLE HERE";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["image"])){
        $arr["image"]="codea13/images/codea13.png";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#181818";
    }
    if(!isset($arr["background"])){
        $arr["background"]=$arr["backgroundColor"];
    }
    if(!isset($arr["boxShadow"])){
        $arr["boxShadow"]="0 0 3px 2px #59606F";
    }
    if(!isset($arr["content"])){
        $arr["content"]="This is the content of this block";
    }
    echo '
        <style>
            .home' . $GLOBALS["firstcard"] . '{
                width:100%;
                overflow-x:hidden;
                background:'.$arr["background"].';
                background-color:'.$arr["backgroundColor"].';
                padding:40px 6%;
                box-sizing:border-box;
            }
            
            .homeInnerbk' . $GLOBALS["firstcard"] . '{
                display:flex;
                box-shadow: '.$arr["boxShadow"].';
                min-height:200px;
            }
            .homeInnerbk' . $GLOBALS["firstcard"] . '>*{
                flex:1;
            }
            .homeInnerChild' . $GLOBALS["firstcard"] . ':first-child{
                display:flex;
                flex-direction:column;
                justify-content:center;
                padding: 20px;
                align-items:flex-start;
                box-sizing:border-box;
            }
            
            .title' . $GLOBALS["firstcard"] . '{
                font-size:35px;
                color:'.$arr["titleColor"].';
                font-weight:bold;
            }
            .content' . $GLOBALS["firstcard"] . '{
                color:'.$arr["textColor"].';
                line-height:2;
            }

            @media (max-width:600px){
                .homeInnerbk' . $GLOBALS["firstcard"] . '{
                    flex-direction:column;
                }
                
            }


        </style>

        <div class="home' . $GLOBALS["firstcard"] . '">
            <div class="homeInnerbk' . $GLOBALS["firstcard"] . '">
                <div class="homeInnerChild' . $GLOBALS["firstcard"] . '">
                    <div class="title' . $GLOBALS["firstcard"] . '">'.$arr["title"].'</div>
                    <div class="content' . $GLOBALS["firstcard"] . '">'.$arr["content"].'</div>
                </div>
                <div class="homeInnerChild' . $GLOBALS["firstcard"] . '"><img object-fit="cover" width="100%", height="100%" src="'.$arr["image"].'"></div>
            </div>
        </div>
    ';
    $GLOBALS["firstcard"]++;
}
?>