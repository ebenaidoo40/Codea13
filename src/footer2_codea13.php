<?php

function footer2_codea13(array $arr){
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#1E356C";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="#18BE13";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["justifyContentDesktop"])){
        $arr["justifyContentDesktop"]="center";
    }
    if(!isset($arr["justifyContentMobile"])){
        $arr["justifyContentMobile"]="flex-start";
    }
    if(!isset($arr["maxWidth"])){
        $arr["maxWidth"]="500";
    }
    echo '
        <style>
            .footer2' . $GLOBALS["firstcard"] . '{
                display: flex;
                gap: 50px;
                min-height: 100px;
                padding: 0 40px;
                flex-wrap: wrap;
                background-color: '.$arr["backgroundColor"].';
                justify-content: '.$arr["justifyContentDesktop"].';
            }
            .footer2' . $GLOBALS["firstcard"] . '>*{
                max-width: 250px;
                height: 100%;
            }
            .footerheading' . $GLOBALS["firstcard"] . '{
                color: '.$arr["titleColor"].';
                font-size: 18px;
                margin-bottom: 15px;
            }
            .footersub' . $GLOBALS["firstcard"] . '{
                color: '.$arr["textColor"].';
                line-height: 2;
            }
            @media (max-width:'.$arr["maxWidth"].'px) {
                .footer2' . $GLOBALS["firstcard"] . '{
                    justify-content: '.$arr["justifyContentMobile"].';
                }
            }
        </style>

        <div class="footer2' . $GLOBALS["firstcard"] . '">';
        $somekeys = array_keys($arr);

        for($i=0; $i<sizeof($arr); $i++){
            if(is_array($arr[$somekeys[$i]])){
                echo '<div>';
                for($j=0; $j<sizeof($arr[$somekeys[$i]]); $j++){
                    if($j==0){
                        echo '<h2 class="footerheading' . $GLOBALS["firstcard"] . '">'.$arr[$somekeys[$i]][$j].'</h2>';
                    }else{
                        echo '<div class="footersub' . $GLOBALS["firstcard"] . '">'.$arr[$somekeys[$i]][$j].'</div>';
                    }
                }
                echo '</div>';
            }
        }
        echo '</div>';

    $GLOBALS["firstcard"]++;
}
?>