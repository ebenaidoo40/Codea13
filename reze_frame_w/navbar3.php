<?php
    function navbar3(array $arr){

        if(!isset($arr["logo"])){
            $arr["logo"]="";
        }
        if(!isset($arr["middleText"])){
            $arr["middleText"]="+233 XXXXXXXX<br>+233 XXXXXXXX";
        }
        if(!isset($arr["middleTextColor"])){
            $arr["middleTextColor"]="black";
        }
        if(!isset($arr["topText"])){
            $arr["topText"]="email@company.com";
        }
        if(!isset($arr["topTextColor"])){
            $arr["topTextColor"]="white";
        }
        if(!isset($arr["topBackgroundColor"])){
            $arr["topBackgroundColor"]="black";
        }
        if(!isset($arr["middleBackgroundColor"])){
            $arr["middleBackgroundColor"]="#F8F7F2";
        }
        if(!isset($arr["bottomBackgroundColor"])){
            $arr["bottomBackgroundColor"]="#f0f0ff";
        }
        if(!isset($arr["tabHoverBackgroundColor"])){
            $arr["tabHoverBackgroundColor"]="black";
        }
        if(!isset($arr["tabHoverTextColor"])){
            $arr["tabHoverTextColor"]="white";
        }
        if(!isset($arr["tabTextColor"])){
            $arr["tabTextColor"]="black";
        }
        if(!isset($arr["image"])){
            $arr["image"]="reze_frame_w/images/codea13.png";
        }
        if(!isset($arr["menuButtonColor"])){
            $arr["menuButtonColor"]="black";
        }
        if(!isset($arr["dropDownTextColor"])){
            $arr["dropDownTextColor"]="black";
        }
        if(!isset($arr["dropDownBackgroundColor"])){
            $arr["dropDownBackgroundColor"]="white";
        }
        if(!isset($arr["title"])){
            $arr["title"]="Title Here";
        }
        if(!isset($arr["titleColor"])){
            $arr["titleColor"]="white";
        }
        if(!isset($arr["navImage"])){
            $arr["navImage"]="off";
        }
        if(!isset($arr["homeLink"])){
            $arr["homeLink"]="";
        }


    $menu_icon="<svg id=\"mobilemenuopenid\" class=\"mobilemenutab\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"32\" height=\"32\"><path d=\"M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z\" fill=\"".$arr["menuButtonColor"]."\"></path></svg><span class=\"menulabel\">Menu</span>";
    $close_icon="<svg id=\"mobilemenucloseid\" class=\"mobilemenutab\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"32\" height=\"32\"><path d=\"M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z\" fill=\"".$arr["menuButtonColor"]."\"></path></svg><div class=\"menulabel\">Close</div>";

        echo '
            <style>
                .topnav{
                    height:30px;
                    background-color:'.$arr["topBackgroundColor"].';
                    color:'.$arr["topTextColor"].';
                    display:flex;
                    align-items:center;
                    justify-content:center;
                }
                .middlenav{
                    min-height:100px;
                    background-color:'.$arr["middleBackgroundColor"].';
                    display:flex;
                    align-items:center;
                    padding:0 5%;
                    justify-content: space-between;
                    flex-wrap:wrap;
                }
                .bottomnav{
                    box-sizing:border-box;
                    min-height:50px;
                    background-color:'.$arr["bottomBackgroundColor"].';
                    display:flex;
                    flex-wrap:wrap;
                    position:sticky;
                    top:-1px;
                    z-index:99999;
                    box-shadow: 0 0 2px 1px '.$arr["tabTextColor"].';
                }
                .middleDivToRight{
                    padding:10px 30px;
                    font-size:22px;
                    color:'.$arr["middleTextColor"].';
                    text-shadow:1px 1px black;
                }
                .navtitle{
                    font-size:30px; 
                    color:'.$arr["titleColor"].'; 
                    text-shadow:1px 1px white;
                    position:absolute;
                    top:50%;
                    left:50%;
                    transform: translate(-50%, -50%);
                }
                .tabblock{
                    height:100%;
                    display:flex;
                    align-items:center;
                    flex-wrap:wrap;
                    padding:2px 10px;
                }
                .tabname{
                    padding: 0 10px;
                    min-height:50px;
                    box-sizing:border-box;
                    margin:1px;
                    box-shadow:0 0 2px 2px #cccccc;
                    display:flex;
                    align-items:center;
                    font-weight:bolder;
                    color:'.$arr["tabTextColor"].';
                }
                .tabname:hover{
                    background-color:'.$arr["tabHoverBackgroundColor"].';
                    color:'.$arr["tabHoverTextColor"].';
                    cursor:pointer;
                }
                .picblocky{
                    height:150px;
                    position:relative;
                    z-index:-1;
                }
                .picimage{
                    width:100%;
                    height:100%;
                    object-fit:cover;
                }
                .mobilemenutab{
                    display:none;
                    align-self:center;
                    margin-left:5%;
                }
                .menulabel{
                    align-self:center; 
                    font-size:18px;
                    display:none;
                }

                
                .dropdownblock{
                    display:none;
                }

                .dropdownblockopen{
                    display:none;
                }

                a[href^=tel] {
                    text-decoration:inherit;
                    color: '.$arr["middleTextColor"].';
                }
                



                @media (max-width:700px){
                    .tabblock{
                        display:none;
                    }
                    .mobilemenutab, .menulabel{
                        display:flex;
                        justify-content:center;
                    }
                    .tabname{
                        padding:0 5%;
                    }

                    .dropdownblock{
                        top:0px;
                        right:110%;
                        position:fixed;
                        display:flex;
                        flex-direction:column;
                        height:0px;
                    }
    
                    .dropdownblockopen{
                        top:50px;
                        right:0px;
                        position:sticky;
                        background-color:'.$arr["dropDownBackgroundColor"].';
                        display:flex;
                        flex-direction:column;
                        z-index:99999;
                        max-height:350px;
                        overflow:scroll;
                        box-sizing:border-box;
                    }
                }

            </style>

            <div class="topnav">'.$arr["topText"].'</div>

            <div class="middlenav">
            <a href="'.$arr["homeLink"].'"><div><img  src="'.$arr["logo"].'"  alt="logo here"></div></a>
                <div class="middleDivToRight">'.$arr["middleText"].'</div>
            </div>

            <div class="bottomnav">';

            echo '<div id="menubkk" style="display:flex; margin: 0 5%; color:'.$arr["menuButtonColor"].' ">'.$menu_icon.'</div>';
                
               echo '<div class="tabblock">';

                if(isset($arr["tabs"])){
                    $allkeys = array_keys($arr["tabs"]);

                    for($i=0; $i<sizeof($allkeys); $i++){
                        echo '<a style="text-decoration:none" href="'.$arr["tabs"][$allkeys[$i]].'"><div class="tabname">'.$allkeys[$i].'</div></a>';
                    }

                }
                    echo '
                </div>
            </div>

            <div id="dropdownspecialblock" class="dropdownblock">';

                if(isset($arr["tabs"])){
                    $allkeys = array_keys($arr["tabs"]);

                    for($i=0; $i<sizeof($allkeys); $i++){
                        echo '<a style="text-decoration:none;" href="'.$arr["tabs"][$allkeys[$i]].'"><div class="tabname" >'.$allkeys[$i].'</div></a>';
                    }

                }
                echo '
            </div>';

            if($arr["navImage"]=="on"){
                echo '
                <div class="picblocky">
                    <img class="picimage" src="'.$arr["image"].'">
                    <div class="navtitle">'.$arr["title"].'</div>
                </div>';
            }



            echo '<script>
                var menu = document.querySelector("#menubkk");
                menu.addEventListener("click", dropdown);

                var opening_dropdown="open";

                function dropdown(){

                    if(opening_dropdown=="open"){
                        document.querySelector("#dropdownspecialblock").setAttribute("class", "dropdownblockopen");
                        document.querySelector("#menubkk").innerHTML=\''.$close_icon.'\';
                        opening_dropdown="close";
                    }else{
                        document.querySelector("#dropdownspecialblock").setAttribute("class", "dropdownblock");
                        document.querySelector("#menubkk").innerHTML=\''.$menu_icon.'\';
                        opening_dropdown="open";
                    }


                }
            </script>
        ';
    }
?>