<?php
function circleImage(array $arr)
{
    if (!isset($arr["id"])) {
        $arr["id"] = "imageID" . $GLOBALS["firstcard"];
    }
    if (!isset($arr["topSpace"])) {
        $arr["topSpace"] = 0;
    }
    if (!isset($arr["bigDeviceWidth"])) {
        $arr["bigDeviceWidth"] = "300px";
    }
    if (!isset($arr["smallDeviceWidth"])) {
        $arr["smallDeviceWidth"] = "80vw";
    }
    if (!isset($arr["vertical"])) {
        $arr["vertical"] = "100px";
    }
    if (!isset($arr["left"])) {
        $arr["left"] = "none";
    }
    if (!isset($arr["right"])) {
        $arr["right"] = "none";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#ffffff00";
    }
    if (!isset($arr["setMiddleAtMax"])) {
        $arr["setMiddleAtMax"] = "450";
    }
    if (!isset($arr["image"])) {
        $arr["image"] = "codea13/images/codea13.png";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if ($arr["image"] == "transparent") {
        $arr["image"] = "codea13/images/transparent.png";
    }



    echo '
        <style>

        .initialpos' . $GLOBALS["firstcard"] . '{
            transform: ' . $arr["animation"] . ';
        }

        .firstgif' . $GLOBALS["firstcard"] . '{
            width:' . $arr["bigDeviceWidth"] . '; 
            height:' . $arr["bigDeviceWidth"] . ';
            background-color:' . $arr["backgroundColor"] . ';
            border-radius:50%; 
            position:absolute; 
            top:' . $arr["vertical"] . '; 
            right:' . $arr["right"] . ';
            left:' . $arr["left"] . ';
            box-shadow: 0 0 5px 1px #333;
            transition: all 0.6s;
        }

        @media (max-width:' . $arr["setMiddleAtMax"] . 'px){
        
            .firstgif' . $GLOBALS["firstcard"] . '{
                right:50%;
                transform:translateX(50%);
                width:' . $arr["smallDeviceWidth"] . ';
                height:' . $arr["smallDeviceWidth"] . '
            }
            
        }
            
        }
        </style>

            <img id="' . $arr["id"] . '" class="firstgif' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '" src="' . $arr["image"] . '" alt="" srcset="">


            <script>
            var observer = new IntersectionObserver((entries)=>{
                entries.forEach((entry) => {
                    if(entry.isIntersecting){
                        entry.target.classList.remove("initialpos' . $GLOBALS["firstcard"] . '");
                    }else{
                        entry.target.classList.add("initialpos' . $GLOBALS["firstcard"] . '");
                    }
                });
            },
            {
                threshold:0.1,
            }
            );
        
            var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
            hiddenElements.forEach((el)=>observer.observe(el));
        
            </script>
        ';

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
