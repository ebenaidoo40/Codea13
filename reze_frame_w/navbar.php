<?php

function navbar(array $arr){

    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="black";
    }

    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }

    if(!isset($arr["tabNumber"])){
        $arr["tabNumber"]=3;
    }
    if(!isset($arr["dropDownSwitch"])){
        $arr["dropDownSwitch"]="off";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Business";
    }
    if(!isset($arr["titleTextColor"])){
        $arr["titleTextColor"]="white";
    }
    if(!isset($arr["logo"])){
        $arr["logo"]="";
    }
    if(!isset($arr["titleBackgroundColor"])){
        $arr["titleBackgroundColor"]="black";
    }
    if(!isset($arr["dropDown"])){
        $arr["dropDown"]="Dropdown";
    }
    if(!isset($arr["dropDownTabsNumber"])){
        $arr["dropDownTabsNumber"]=3;
    }
    if($arr["dropDownTabsNumber"]>15){
        $arr["dropDownTabsNumber"]=15;
    }
    if(!isset($arr["dropDownTabsColor"])){
        $arr["dropDownTabsColor"]="black";
    }
    $arr["dropDownbackgroundColor"]=$arr["backgroundColor"];
    $arr["borderbackgroundColor"]=$arr["backgroundColor"];
    if($arr["backgroundColor"]=="white" || $arr["backgroundColor"]=="rgb(255, 255, 255)" || $arr["backgroundColor"]=="#fff" || $arr["backgroundColor"]=="#ffffff" || $arr["backgroundColor"]=="hsl(0, 0%, 100%)" || $arr["backgroundColor"]=="hwb(0 100% 0%)" || $arr["backgroundColor"]=="#FFF" || $arr["backgroundColor"]=="#FFFFFF" ){
        $arr["textColor"]="black";
        $arr["dropDownbackgroundColor"]="#363636";
	$arr["borderbackgroundColor"]="#363636";
    }
    if($arr["tabNumber"]>3){
        $arr["tabNumber"]=3;
    }
    if($arr["tabNumber"]<=0 && $arr["dropDownTabsNumber"]<=0){
        $showthis="none";
    }else{$showthis="flex";}

    if(!isset($arr["homeLink"])){
        $arr["homeLink"]="";
    }
    if(!isset($arr["baseShadow"])){
        $arr["baseShadow"]="black";
    }

    $menu_icon='<svg id="mobilemenuopenid" class="mobilemenutab" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" fill="rgba(36,30,31,1)"></path></svg>';
    $close_icon='<svg id="mobilemenucloseid" class="mobilemenutab" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="rgba(0,0,0,1)"></path></svg>';
    $arrowup_icon="<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\"><path d=\"M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z\" fill=\"".$arr["textColor"]."\"></path></svg>";
    $arrowdown_icon="<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\"><path d=\"M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z\" fill=\"".$arr["textColor"]."\"></path></svg>";
    echo '<style>

        a{
            text-decoration:none;
            color: '.$arr["textColor"].';
        }
        .tab_spacing{
            width:100%;
            height:30px;
        }

        .home_nav_bar{
            top:0px;
            width: 100%;
            height: 50px;
            background-color: '.$arr["backgroundColor"].';
            display: flex;
            color: '.$arr["textColor"].';
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 0px 5px 1px '.$arr["baseShadow"].';
            box-sizing:bordor-box;
            font-size:16px;
            position:fixed;
            z-index:1000;
        }

        .basenav{
            position:static;
            margin-right:0;
            background-color:'.$arr["backgroundColor"].';
        }

        .logo-title{
            margin-left: 50px;
            display:flex;
            background:'.$arr["titleBackgroundColor"].';
            align-items: center;
            color:'.$arr["titleTextColor"].';
            font-weight:bolder;
        }
        .logo-title>*{
            margin-right:15px;
        }
        .tabs{
            margin-right: 0px;
            display: flex;
            height:100%;
            align-items:center;
        }
        .tabs>*{
            margin-right:10px;
            padding: 3px 8px;
            font-weight:bold;
        }

        .tabs>*:hover{
            text-decoration:overline;
            text-decoration-thickness:5px;
            cursor:pointer;
            box-shadow: 0 0 5px 1px '.$arr["textColor"].';
        }

        .dropdown{
            width:250px;
            height:fit-content;
            background:'.$arr["dropDownbackgroundColor"].';
            position:fixed;
            top:55px;
            right:25%;
            box-shadow: 0 0 8px 2px #333;
            display:flex;
            flex-direction:column;
            align-items:center;
            padding:5px;
            transition: transform 0.6s ease-in-out;
            z-index:999;
            transform:translateY(0%);
        }
        .hidden{
            display: none;
        }
        .hiddenSlideUp{
            transform:translateY(-130%);
        }

        .menudrawer{                
            min-height:40%;
            height: calc(var(--app-height) - 50px);
            background-color:white;
            padding:30px 15px;
            box-sizing:border-box;
            position:fixed;
            top:-5000px;
            left:-400px;
            border: 5px solid '.$arr["borderbackgroundColor"].';
            transition: left 0.6s ease-in-out;
            box-shadow: 0 1px 5px 2px '.$arr["backgroundColor"].';
            overflow-y:scroll;
        }
        .menudrawer_transparent{
            width:100%;
            height: calc(var(--app-height) - 50px);
            background-color:#00000000;
            position:fixed;
            top:50px;
            left:0px;
            z-index:998;
        }

        .droptabs{
            width:100%;
            padding:2px 10px;
            height:30px;
            background-color:white;
            margin-bottom:1px;
            display:flex;
            align-items:center;
            box-sizing:border-box;
            color:'.$arr["dropDownTabsColor"].';
            font-weight:bold;
        }

        .droptabs:hover{
            background-color:#f0f0ff;
        }

        .mobilemenutab{
            background-color:white; 
            margin-right:10px;
            display:none;
        }

        @media (max-width:700px){
            .tabs{
                display:none;
            }
            .logo-title{
                margin-left: 10px;
            }
            .mobilemenutab{
                display:'.$showthis.';
            }
            .menudrawer_transparent{
                width:100%;
                height: calc(var(--app-height) - 50px);
                background-color:#00000000;
                position:fixed;
                top:50px;
                left:0px;
                z-index:998;
            }
            .menudrawer{                
                min-height:40%;
                height: calc(var(--app-height) - 50px);
                background-color:white;
                padding:30px 15px;
                box-sizing:border-box;
                position:fixed;
                top:50px;
                left:0px;
                border: 5px solid '.$arr["borderbackgroundColor"].';
                transition: transform 0.3s linear;
                box-shadow: 0 0px 5px 3px black;
                overflow-y:scroll;
                z-index:999;
                transform:translateX(-110%);
            }
            .menudrawer_inner_tabs{
                background-color:white;
                padding:15px;
                font-size:16px;
                font-weight:bold;
            }
            .slide_left{
                transform: translateX(0%);
            }
            .tabs{
                flex-direction:column;
                align-items:center;
                box-sizing:border-box;
                color:'.$arr["dropDownTabsColor"].';
                font-weight:bold;
            }

            
        }
        
        </style>


    <nav id="home_nav_bar" class="home_nav_bar">

    <div id="logo-title" class="logo-title">
        <img width="32px" height="32px" src="'.$arr["logo"].'" alt="logo">
        <a href="'.$arr["homeLink"].'"><span>'.$arr["title"].'</span></a>
    </div>

    <div id="tabs" class="tabs">';

    if($arr["dropDownSwitch"]=="on"){
        $arr["dropDownNumber"]=1;
    }else{
        $arr["dropDownNumber"]=0;
    }

    for($i=0; $i<$arr["dropDownNumber"]; $i++){
        echo '<span id="dropdown'.$i.'" style="display:flex; align-items:center"><span id="dropdownInner">'.$arr["dropDown"].'</span><span id="dropdownArrow">'.$arrowdown_icon.'</span></span>';
    }

    for($i=0; $i<$arr["tabNumber"]; $i++){
        
        if(isset($arr["tabs"])){
            $arr_tab_key = array_keys($arr["tabs"]); 
            if(isset($arr_tab_key[$i])){
                $key=$arr_tab_key[$i];
                if(isset($arr["tabs"][$key])){
                    echo '<a href="'.$arr["tabs"][$key].'" ><span>'.$arr_tab_key[$i].'</span></a>';
                }
            }else{
                echo '<a href=""><span>Entry'.($i + 1).'</span></a>';
            }
        }else{
            echo '<a href=""><span>Entry'.($i + 1).'</span></a>';
        }   
    }
    echo '</div>';
    echo '<span id="menucontroller">'.$menu_icon.'</span>';
echo '</nav><nav id="home_nav_bar_beneath" class="home_nav_bar basenav"></nav>';

for($z=0; $z<$arr["dropDownNumber"]; $z++){

    echo '<div id="dropdownbk'.$z.'" class="dropdown hiddenSlideUp">';
        for($j=0; $j<$arr["dropDownTabsNumber"]; $j++){

            if(isset($arr["dropTabs"])){
                $arr_dropTabs_keys = array_keys($arr["dropTabs"]);
                if(isset($arr_dropTabs_keys[$j])){
                    $dkey = $arr_dropTabs_keys[$j];
                    if(isset($arr["dropTabs"][$dkey])){
                        echo '<a href="'.$arr["dropTabs"][$dkey].'" style="color:'.$arr["dropDownTabsColor"].'; width:100%; font-weight:bold"><span class="droptabs">'.$arr_dropTabs_keys[$j].'</span></a>';
                    }
                }else{
                    echo '<span class="droptabs">Entry'.($j + 1).'</span>';
                }
            }else{
                echo '<span class="droptabs">Entry'.($j + 1).'</span>';
            }  
        }
    echo'</div>';

    echo '<div id="menudrawer_transparent" class="menudrawer_transparent hidden"></div>';

    echo '<div id="menudrawer" class="menudrawer">';

    for($i=0; $i<$arr["tabNumber"]; $i++){
        
        if(isset($arr["tabs"])){
            $arr_tab_key = array_keys($arr["tabs"]); 
            if(isset($arr_tab_key[$i])){
                $key=$arr_tab_key[$i];
                if(isset($arr["tabs"][$key])){
                    echo '<a href="'.$arr["tabs"][$key].'" style="color:'.$arr["dropDownTabsColor"].'; width:100%; font-weight:bold" ><span class="droptabs">'.$arr_tab_key[$i].'</span></a>';
                    echo '<div class="tab_spacing"></div>';
                }
            }else{
                echo '<a href=""><span>Entry'.($i + 1).'</span></a>';
                echo '<div class="tab_spacing"></div>';
            }
        }else{
            echo '<a href=""><span>Entry'.($i + 1).'</span></a>';
            echo '<div class="tab_spacing"></div>';
        }   
    }

    echo '<hr>';
    echo '<div class="tab_spacing"></div>';

    for($j=0; $j<$arr["dropDownTabsNumber"]; $j++){

        if(isset($arr["dropTabs"])){
            $arr_dropTabs_keys = array_keys($arr["dropTabs"]);
            if(isset($arr_dropTabs_keys[$j])){
                $dkey = $arr_dropTabs_keys[$j];
                if(isset($arr["dropTabs"][$dkey])){
                    echo '<a href="'.$arr["dropTabs"][$dkey].'" style="color:'.$arr["dropDownTabsColor"].'; width:100%; font-weight:bold;"><span class="droptabs">'.$arr_dropTabs_keys[$j].'</span></a>';
                    echo '<div class="tab_spacing"></div>';
                }
            }else{
                echo '<span class="droptabs">Entry'.($j + 1).'</span>';
                echo '<div class="tab_spacing"></div>';
            }
        }else{
            echo '<span class="droptabs">Entry'.($j + 1).'</span>';
            echo '<div class="tab_spacing"></div>';
        }  
    }

    echo'</div>';

    echo '<script>

    var menu_status="open";
    var menudrawer = document.querySelector("#menudrawer");
    var menucontroller = document.querySelector("#menucontroller");
    var menudrawer_transparent = document.querySelector("#menudrawer_transparent");


            var drop_open="open";
            var dropdowntab'.$z.' = document.querySelector("#dropdown'.$z.'");
            var dropdownbk'.$z.' = document.querySelector("#dropdownbk'.$z.'");
            dropdowntab'.$z.'.addEventListener("click", ()=>{
                if(drop_open=="open"){
                    dropdownbk'.$z.'.classList.remove("hiddenSlideUp");
                    drop_open="close";
                    document.querySelector("#dropdownArrow").innerHTML=\''.$arrowup_icon.'\';
                    menudrawer_transparent.classList.remove("hidden");
                }else{
                    dropdownbk'.$z.'.classList.add("hiddenSlideUp");
                    drop_open="open";
                    document.querySelector("#dropdownArrow").innerHTML=\''.$arrowdown_icon.'\';
                    menudrawer_transparent.classList.add("hidden");
                }
                });


  
            menucontroller.addEventListener("click", ()=>{
                if(menu_status=="open"){
                    menucontroller.innerHTML=\''.$close_icon.'\';
                    menu_status="close";
                    menudrawer.classList.add("slide_left");
                    menudrawer_transparent.classList.remove("hidden");
                }else{
                    menucontroller.innerHTML=\''.$menu_icon.'\';
                    menu_status="open";
                    menudrawer.classList.remove("slide_left");
                    menudrawer_transparent.classList.add("hidden");
                }
            });

            menudrawer_transparent.addEventListener("click", ()=>{
                    menucontroller.innerHTML=\''.$menu_icon.'\';
                    menu_status="open";
                    menudrawer.classList.remove("slide_left");
                    menudrawer_transparent.classList.add("hidden");

                    dropdownbk'.$z.'.classList.add("hiddenSlideUp");
                    drop_open="open";
                    document.querySelector("#dropdownArrow").innerHTML=\''.$arrowdown_icon.'\';
                    menudrawer_transparent.classList.add("hidden");

            });

            function dropDownbkpos(){
                var navtabsContainer = document.querySelector("#tabs");
                var navtabsRect = navtabsContainer.getBoundingClientRect();
                var navtabsContainer_x=navtabsRect.x - 60;
                var navtabsContainer_y=navtabsRect.y;
                document.querySelector("#dropdownbk'.$z.'").style.left=navtabsContainer_x+"px";
                if(window.innerWidth<=700){
                    document.querySelector("#dropdownbk'.$z.'").classList.add("hidden");
                }else{
                    document.querySelector("#dropdownbk'.$z.'").classList.remove("hidden");
                }
            }
            dropDownbkpos();
            window.addEventListener("resize", dropDownbkpos);

            // this function is to fix the ios error when  height is set to 100vh
            const appHeight = () => {
                const doc = document.documentElement;
                doc.style.setProperty("--app-height", `${window.innerHeight}px`);
            }
            window.addEventListener("resize", appHeight);
            appHeight();    
        </script>';
}

}

?>