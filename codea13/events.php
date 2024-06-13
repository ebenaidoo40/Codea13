<?php

function events(array $arr)
{

    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "white";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "black";
    }
    if (!isset($arr["titleBackgroundColor"])) {
        $arr["titleBackgroundColor"] = "#00000020";
    }
    if (!isset($arr["contentColor"])) {
        $arr["contentColor"] = "black";
    }
    if (!isset($arr["dateColor"])) {
        $arr["dateColor"] = "black";
    }
    if (!isset($arr["cardColor"])) {
        $arr["cardColor"] = "white";
    }

    if (!isset($arr["backgroundImage"])) {
        $backgroundImageSlider3 = "none";
    } else {
        if ($arr["backgroundImage"] == "none") {
            $backgroundImageSlider3 = "none";
        } else {
            $backgroundImageSlider3 = "url(" . $arr["backgroundImage"] . ")";
        }
    }

    if (!isset($arr["marquee"])) {
        $arr["marquee"] = "off";
        $event_overflow = "scroll";
    } else {
        if ($arr["marquee"] == "on") {
            $event_overflow = "hidden";
        } else {
            $event_overflow = "scroll";
        }
    }


    echo '
        <style>
            .eventblock' . $GLOBALS["firstcard"] . '{
                width:100%;
                min-height:200px;
                background-color:' . $arr["backgroundColor"] . ';
                background-image:' . $backgroundImageSlider3 . ';
                background-size:cover;
                overflow-x:'.$event_overflow.';
                padding:0px 0px;
                position:relative;
                white-space: nowrap;
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
                box-sizing:border-box;
            }

            

            .eventblock' . $GLOBALS["firstcard"] . '::-webkit-scrollbar {
                display: none;
              }

            .eventblockchild' . $GLOBALS["firstcard"] . '{
                display:inline-block;
                vertical-align:middle;
                width:min(250px, 70%);
                aspect-ratio:3/2;
                margin:20px;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 8px 1px black;
                background-color:' . $arr["cardColor"] . ';
                transition: all 0.9s linear;
            }
        </style>

        <div class="eventblock' . $GLOBALS["firstcard"] . '"><div class="eventblock' . $GLOBALS["firstcard"] . '">';

    $mykeys = array_keys($arr);


    for ($i = 0; $i < sizeof($arr); $i++) {

        if (is_array($arr[$mykeys[$i]])) {
            if (!isset($arr[$mykeys[$i]]["date"])) {
                $arr[$mykeys[$i]]["date"] = "Coming Soon";
            }
            if (!isset($arr[$mykeys[$i]]["body"])) {
                $arr[$mykeys[$i]]["body"] = "";
            }
            echo '
            <div class="eventblockchild' . $GLOBALS["firstcard"] . ' codea_evyevy">
                <div style="font-size:22px; white-space:normal; font-weight:bold; padding:10px; background-color:' . $arr["titleBackgroundColor"] . '; color:' . $arr["titleColor"] . '">' . $mykeys[$i] . '</div><br>
                <div style="white-space:normal; color:' . $arr["contentColor"] . '">' . $arr[$mykeys[$i]]["body"] . '</div><br>
                <div id="NanaYaa" style="white-space:normal; font-weight:bold; color:' . $arr["dateColor"] . '">Date:<br>' . $arr[$mykeys[$i]]["date"] . '</div>
            </div>';
        }
    }

    echo '</div></div>';


    if($arr["marquee"] == "on"){
        echo '
        <script>
            var subEvents'.$GLOBALS["firstcard"].' = document.querySelectorAll(".eventblockchild'.$GLOBALS["firstcard"].'");
            var lastEvent'.$GLOBALS["firstcard"].' = subEvents'.$GLOBALS["firstcard"].'[subEvents'.$GLOBALS["firstcard"].'.length - 1];
            var firstEvent'.$GLOBALS["firstcard"].' = subEvents'.$GLOBALS["firstcard"].'[0];
            var lastE'.$GLOBALS["firstcard"].' = lastEvent'.$GLOBALS["firstcard"].'.getBoundingClientRect();
            var masterWidth'.$GLOBALS["firstcard"].' = lastE'.$GLOBALS["firstcard"].'.x +lastE'.$GLOBALS["firstcard"].'.width;
            
            var scrollValue'.$GLOBALS["firstcard"].'=0;
            var changer'.$GLOBALS["firstcard"].'=-2;

            var mykey'.$GLOBALS["firstcard"].'="firstchildfocus";

            function scrollme'.$GLOBALS["firstcard"].'(){

                var firstEventDim = firstEvent'.$GLOBALS["firstcard"].'.getBoundingClientRect();
                var lastEventDim = lastEvent'.$GLOBALS["firstcard"].'.getBoundingClientRect();

                scrollValue'.$GLOBALS["firstcard"].' = scrollValue'.$GLOBALS["firstcard"].' + changer'.$GLOBALS["firstcard"].';

                for(var i=0; i<subEvents'.$GLOBALS["firstcard"].'.length; i++){
                    subEvents'.$GLOBALS["firstcard"].'[i].style.transform="translateX(" +scrollValue'.$GLOBALS["firstcard"].' + "px)";
                }

                if(masterWidth'.$GLOBALS["firstcard"].' <window.innerWidth){
                    if(mykey'.$GLOBALS["firstcard"].' == "firstchildfocus"){
                        if(firstEventDim.x  < 0){
                            changer'.$GLOBALS["firstcard"].' = 2;
                            mykey'.$GLOBALS["firstcard"].' = "lastchildfocus";
                        }else{
                            
                        }
                    }else{
                        if(lastEventDim.x + 20 + lastEventDim.width > window.innerWidth){
                            changer'.$GLOBALS["firstcard"].' = -2;
                            mykey'.$GLOBALS["firstcard"].' = "firstchildfocus";
                        }else{
                            
                        }
                    }
                }else{
                    if(mykey'.$GLOBALS["firstcard"].' == "firstchildfocus"){
                        if(firstEventDim.x  < window.innerWidth - masterWidth'.$GLOBALS["firstcard"].' - (firstEventDim.width / 2)){
                            changer'.$GLOBALS["firstcard"].' = 2;
                            mykey'.$GLOBALS["firstcard"].' = "lastchildfocus";
                        }else{
                            
                        }
                    }else{
                        if(firstEventDim.x > (firstEventDim.width / 2)){
                            changer'.$GLOBALS["firstcard"].' = -2;
                            mykey'.$GLOBALS["firstcard"].' = "firstchildfocus";
                        }else{
                            
                        }
                    }
                }
                    
                
                            
            }
            
        
            
            setInterval(scrollme'.$GLOBALS["firstcard"].', 60);
        </script>
        ';
    }
    
    $GLOBALS["firstcard"]++;
}