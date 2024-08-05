<?php

function softcard_codea13(array $arr)
{
    if (!isset($arr["id"])) {
        $arr["id"] = "softcard_id_" . $GLOBALS["firstcard"];
    }
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam illum veniam libero velit laborum aut et dolorum dicta, iusto eius enim, at minus, tenetur ipsam labore quo inventore expedita!";
    if (!isset($arr["width"])) {
        $arr["width"] = "600px";
    }
    if (!isset($arr["height"])) {
        $arr["height"] = "auto";
    } else {
        $arr["height"] = $arr["height"];
    }
    if (!isset($arr["title"])) {
        $arr["title"] = "Title";
    }
    if (!isset($arr["content"])) {
        $arr["content"] = $lorem;
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "white";
    }


    if (!isset($arr["align"])) {
        $arr["transform"] = "none";
        $arr["left"] = "0px";
        $arr["right"] = "none";
        $arr["top"] = "0px";
        $arr["bottom"] = "none";
    } else {
        if ($arr["align"] == "top-left") {
            $arr["left"] = "0%";
            $arr["right"] = "none";
            if (!isset($arr["top"])) {
                $arr["top"] = "0px";
            }
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(0%,0%)";
        } else if ($arr["align"] == "top-middle") {
            $arr["left"] = "50%";
            $arr["right"] = "none";
            if (!isset($arr["top"])) {
                $arr["top"] = "0px";
            }
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(-50%,0%)";
        } else if ($arr["align"] == "top-right") {
            $arr["left"] = "none";
            $arr["right"] = "0%";
            if (!isset($arr["top"])) {
                $arr["top"] = "0px";
            }
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(0%,0%)";
        } else if ($arr["align"] == "middle-left") {
            $arr["left"] = "0%";
            $arr["right"] = "none";
            $arr["top"] = "calc(50% - 10px)";
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(0%,-50%)";
        } else if ($arr["align"] == "center") {
            $arr["left"] = "50%";
            $arr["right"] = "none";
            $arr["top"] = "50%";
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(-50%,-50%)";
        } else if ($arr["align"] == "middle-right") {
            $arr["left"] = "none";
            $arr["right"] = "0%";
            $arr["top"] = "calc(50% - 10px)";
            $arr["bottom"] = "none";
            $arr["transform"] = "translate(0%,-50%)";
        } else if ($arr["align"] == "bottom-left") {
            $arr["left"] = "0%";
            $arr["right"] = "none";
            $arr["top"] = "none";
            $arr["bottom"] = "0%";
            $arr["transform"] = "translate(0%,0%)";
        } else if ($arr["align"] == "bottom-middle") {
            $arr["left"] = "50%";
            $arr["right"] = "none";
            $arr["top"] = "none";
            $arr["bottom"] = "0%";
            $arr["transform"] = "translate(-50%,0%)";
        } else if ($arr["align"] == "bottom-right") {
            $arr["left"] = "none";
            $arr["right"] = "0%";
            $arr["top"] = "none";
            $arr["bottom"] = "0%";
            $arr["transform"] = "translate(0%,0%)";
        } else if (is_array($arr["align"])) {

            if (!isset($arr["align"]["left"])) {
                $arr["left"] = "none";
            } else {
                $arr["left"] = $arr["align"]["left"];
            }

            if (!isset($arr["align"]["right"])) {
                $arr["right"] = "none";
            } else {
                $arr["right"] = $arr["align"]["right"];
            }

            if (!isset($arr["align"]["top"])) {
                $arr["top"] = "none";
            } else {
                $arr["top"] = $arr["align"]["top"];
            }

            if (!isset($arr["align"]["bottom"])) {
                $arr["bottom"] = "none";
            } else {
                $arr["bottom"] = $arr["align"]["bottom"];
            }

            $arr["transform"] = "none";
        }
    }

    if (!isset($arr["topSpace"])) {
        $arr["topSpace"] = 0;
    }

    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "black";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "black";
    }

    echo '<style>
        .firstcard' . $GLOBALS["firstcard"] . '{
            max-width:' . $arr["width"] . ';
            height:' . $arr["height"] . ';
            background-color:' . $arr["backgroundColor"] . ';
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            padding:20px;
            box-sizing:border-box;
            border-radius:2em;
            border:1px solid white;
            padding:40px;
            display:flex;
            flex-direction:column;
            position:absolute;
            top:' . $arr["top"] . ';
            left:' . $arr["left"] . ';
            right:' . $arr["right"] . ';
            bottom:' . $arr["bottom"] . ';
            transform:' . $arr["transform"] . ';
            color:' . $arr["textColor"] . ';
            overflow-y:hidden;
            line-height:25px;
            
        }

        .firstcard' . $GLOBALS["firstcard"] . '::after{
            content: "";
            position: absolute;
            top:10px;
            left:10px;
            border-radius:2em;
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            background-color: transparent;
            box-shadow: inset -5px -5px 9px rgba(255,255,255,0.45), inset 5px 5px 9px rgba(94,104,121,0.3);
          }

        .card-h3' . $GLOBALS["firstcard"] . '{
            color:' . $arr["titleColor"] . ';
        }

            @media (max-width:600px){
                .firstcard' . $GLOBALS["firstcard"] . '{
                    max-width: ' . $arr["width"] . ';
                }
            }

    </style>';
    echo '<div id="' . $arr["id"] . '" class="firstcard' . $GLOBALS["firstcard"] . '">
            <h3 class="card-h3' . $GLOBALS["firstcard"] . '">' . $arr["title"] . '</h3>
            <p>' . $arr["content"] . '</p>
    </div>';



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