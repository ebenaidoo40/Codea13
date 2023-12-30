<?php

function events(array $arr){

    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="slateblue";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["ContentColor"])){
        $arr["ContentColor"]="black";
    }
    if(!isset($arr["dateColor"])){
        $arr["dateColor"]="black";
    }

    if(!isset($arr["backgroundImage"])){
        $backgroundImageSlider3 = "url(\"reze_frame_w/images/blackStarBackground.webp\")";
    }else{
        if($arr["backgroundImage"]=="none"){
            $backgroundImageSlider3 = "none";
        }else {
            $backgroundImageSlider3="url(".$arr["backgroundImage"].")";
        }
    }

    if(!isset($arr["marquee"])){
        $arr["marquee"]="marquee";
    }else{
        if($arr["marquee"]=="no"){
            $arr["marquee"]="div";
        }else{
            $arr["marquee"]="marquee";
        }
    }


    echo '
        <style>
            .eventblock{
                width:100%;
                min-height:200px;
                background-color:'.$arr["backgroundColor"].';
                background-image:'.$backgroundImageSlider3.';
                background-size:cover;
                overflow-x:scroll;
                padding:20px 0px;
                position:relative;
                white-space: nowrap;
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
                box-sizing:border-box;
            }

            

            .eventblock::-webkit-scrollbar {
                display: none;
              }

            .eventblockchild{
                display:inline-block;
                width:min(300px, 80%);
                aspect-ratio:3/2;
                margin:20px;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 8px 1px black;
                background-color:white;
            }
        </style>

        <div class="eventblock"><'.$arr["marquee"].' class="eventblock">';

        $mykeys = array_keys($arr);

        
        for ($i=0; $i <sizeof($arr) ; $i++) { 

            if(is_array($arr[$mykeys[$i]])){
            if(!isset($arr[$mykeys[$i]]["date"])){
                $arr[$mykeys[$i]]["date"]="Coming Soon";
            }
            if(!isset($arr[$mykeys[$i]]["body"])){
                $arr[$mykeys[$i]]["body"]="";
            }
            echo '
            <div class="eventblockchild">
                <div style="font-size:22px; white-space:wrap; font-weight:bold; padding:10px; background-color:#00000020; color:'.$arr["titleColor"].'">'.$mykeys[$i].'</div><br>
                <div style="white-space:wrap; color:'.$arr["ContentColor"].'">'.$arr[$mykeys[$i]]["body"].'</div><br>
                <div style="white-space:wrap; font-weight:bold; color:'.$arr["dateColor"].'">Date:<br>'.$arr[$mykeys[$i]]["date"].'</div>
            </div>';
            }
        }

        echo '</'.$arr["marquee"].'></div>

    ';
}
?>