<?php
    function rectcube(array $arr){
        if(!isset($arr["id"])){
            $arr["id"]="rectcube";
        }
        if(!isset($arr["top"])){
            $arr["top"]="0";
        }
        if(!isset($arr["content"])){
            $arr["content"]="<div style=\"color:purple; font-size:30px; font-weight:bolder\">CODEA 13 CARD</div><img style=\"width:100%; object-fit:contain\" src=\"reze_frame_w/images/codea13.png\">";
        }

        echo '
            <style>
                .rect'.$GLOBALS["firstcard"].'{
                    width: 25%;
                    min-height:150px;
                    background-color:#f0f0ff;
                    position:absolute;
                    top:100px;
                    right:40px;
                    box-shadow: 0 0 5px 3px #334;
                    box-sizing:border-box;
                    display:flex;
                    flex-direction:column; 
                    justify-content:center;
                    align-items:center;
                }
                

                @media (max-width:900px){
                    .rect'.$GLOBALS["firstcard"].'{
                        display:none;
                    }
                }
            </style>

            <div id="'.$arr["id"].'" class="rect'.$GLOBALS["firstcard"].'" onload="getmedone'.$GLOBALS["firstcard"].'()">'.$arr["content"].'</div>
        ';

        if(isset($arr["markedId"])){
            echo '
                <script>
                if(document.querySelector("#menubkk")){
                    var mymenu = document.querySelector("#menubkk");
                    mymenu.addEventListener("click", getmedone'.$GLOBALS["firstcard"].');
                }else{}
                
                function getmedone'.$GLOBALS["firstcard"].'(){
                    if(document.querySelector("#dropdownspecialblock")){
                        var menuHeight = document.querySelector("#dropdownspecialblock").offsetHeight;
                    }else{
                        var menuHeight = 0;
                    }
                    var navtabsContainer = document.querySelector("#'.$arr["markedId"].'");
                    var navtabsRect = navtabsContainer.getBoundingClientRect();
                    var navtabsContainer_x=navtabsRect.x;
                    var navtabsContainer_y=navtabsRect.y;
                    var navtabsContainer_height=navtabsRect.height;

                    var finalpos = navtabsContainer_y + navtabsContainer_height + '.$arr["top"].' + window.scrollY ;
                    document.querySelector("#'.$arr["id"].'").style.top=finalpos+"px";
                }

                getmedone'.$GLOBALS["firstcard"].'();
                window.addEventListener("resize", getmedone'.$GLOBALS["firstcard"].');
                window.addEventListener("load", getmedone'.$GLOBALS["firstcard"].');
                </script>';
        }
        $GLOBALS["firstcard"]++;
    }
?>