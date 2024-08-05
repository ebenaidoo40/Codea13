<?php

function card_container_codea13(array $arr)
{

    $boxsize = sizeof($arr);

    if (!isset($arr["id"])) {
        $arr["id"] = "container" . $GLOBALS["firstcard"];
    }
    if (!isset($arr["topSpace"])) {
        $arr["topSpace"] = 0;
    }
    if (!isset($arr["top"])) {
        $arr["top"] = "none";
    }
    if (!isset($arr["left"])) {
        $arr["left"] = "none";
    }
    if (!isset($arr["right"])) {
        $arr["right"] = "none";
    }
    if (!isset($arr["bottom"])) {
        $arr["bottom"] = "none";
    }

    if (!isset($arr["width"])) {
        $arr["width"] = "100%";
    }

    if (!isset($arr["height"])) {
        $arr["height"] = "100px";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#d867ae";
    }
    if (!isset($arr["backgroundImage"])) {
        $arr["backgroundImage"] = "none";
    }
    if (!isset($arr["position"])) {
        $arr["position"] = "relative";
    }
    if (!isset($arr["padding"])) {
        $arr["padding"] = "10px";
    }
    if (!isset($arr["backgroundFiguresColor"])) {
        $arr["backgroundFiguresColor"] = "white";
    }
    if (!isset($arr["stretchAtMaxWidth"])) {
        $arr["stretchAtMaxWidth"] = "1000";
    }




    echo '<style>
        .container' . $GLOBALS["firstcard"] . '{
            top:' . $arr["top"] . ';
            left:' . $arr["left"] . ';
            right:' . $arr["right"] . ';
            bottom:' . $arr["bottom"] . ';
            min-height:' . $arr["height"] . '; 
            width:' . $arr["width"] . ';
            background-color:' . $arr["backgroundColor"] . ';
            background-image:' . $arr["backgroundImage"] . ';
            background-size:cover;
            position:' . $arr["position"] . ';
            padding:' . $arr["padding"] . ';
            box-sizing:border-box;
        }

        .containerAdd{
            left:0px;
            top:200px;
            width:100%;
            right:none;
            bottom:none;
            position:relative;
            overflow:hidden;
        }

        @media (max-width:' . $arr["stretchAtMaxWidth"] . 'px){
            .container' . $GLOBALS["firstcard"] . '{
                width:100%;
            }
        }

        @media (max-width:600px){
            .container' . $GLOBALS["firstcard"] . '{
                min-height:' . $arr["height"] . ';
            }
        }
    </style>


    <div id="' . $arr["id"] . '" class="container' . $GLOBALS["firstcard"] . '">';
  



    for ($bcou = 0; $bcou < $boxsize; $bcou++) {
        if (isset($arr[$bcou])) {
            $funct = $arr[$bcou];
            $funct = preg_replace('/\s\s+/', '', $funct); // this helps to remove all white space around the string
            $funct1 = explode("([", $funct);

            $funct2 = explode("])", $funct1[1]);
            $function_name = $funct1[0];
            $function_parameter = $funct2[0];

            $res = eben_str_arr($funct);

            if (is_array($res)) {
                $res = $res;
            } else {
                $res = [$res];
            }
            call_user_func($function_name, $res);
        } else {
        }
    }


    echo '</div>';

    if (isset($arr["markedId"])) {
        echo '
            <script>
            
            function getmedone' . $GLOBALS["firstcard"] . '(){

                var navtabsContainer = document.querySelector("#' . $arr["markedId"] . '");
                var navtabsRect = navtabsContainer.getBoundingClientRect();
                var navtabsContainer_x=navtabsRect.x;
                var navtabsContainer_y=navtabsRect.y;
                var navtabsContainer_height=navtabsRect.height;

                var finalpos = navtabsContainer_y + navtabsContainer_height + ' . $arr["topSpace"] . ' + window.scrollY ;
                
                if(window.innerWidth < ' . $arr["stretchAtMaxWidth"] . '){
                    finalpos="0";
                    document.querySelector("#' . $arr["id"] . '").classList.add("containerAdd");
                }else{
                    document.querySelector("#' . $arr["id"] . '").classList.remove("containerAdd");
                }
                document.querySelector("#' . $arr["id"] . '").style.top=finalpos+"px";
                
            }

            
            window.addEventListener("resize", getmedone' . $GLOBALS["firstcard"] . ');
            window.addEventListener("load", getmedone' . $GLOBALS["firstcard"] . ');
            
            setTimeout(()=>{
                getmedone' . $GLOBALS["firstcard"] . '();
            }, 500);
            
            </script>';
    }

    $GLOBALS["firstcard"]++;
}