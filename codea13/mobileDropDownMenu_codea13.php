<?php
function mobileDropDownMenu_codea13(array $arr){
    if(!isset($arr["maxWidth"])){
        $arr["maxWidth"]="900";
    }
    if(!isset($arr["buttonTop"])){
        $arr["buttonTop"]="19px";
    }
    if(!isset($arr["onePage"])){
        $arr["onePage"]="off";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Title here";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#f0f0ff";
    }
    if(!isset($arr["titleBackgroundColor"])){
        $arr["titleBackgroundColor"]="#ffffff";
    }
    if(!isset($arr["backgroundSubColor"])){
        $arr["backgroundSubColor"]="#ffffff";
    }
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="#ffffff";
    }
    if(!isset($arr["buttonInnerColor"])){
        $arr["buttonInnerColor"]="#000001";
    }
    if(!isset($arr["tabsSeperatorColor"])){
        $arr["tabsSeperatorColor"]="#ffffff";
    }
    if(!isset($arr["tabsSubSeperatorColor"])){
        $arr["tabsSubSeperatorColor"]=$arr["tabsSeperatorColor"];
    }
    if(!isset($arr["sliderWidth"])){
        $arr["sliderWidth"]="250px";
    }
    if(!isset($arr["sliderBorderShadow"])){
        $arr["sliderBorderShadow"]="#00000000";
    }
    if($arr["sliderWidth"]=="100%"){
        $sliderSubWidth="var(--app-width)";
    }else{
        $sliderSubWidth = $arr["sliderWidth"];
    }
    
    $menu_icon = '<svg onclick="showSliderMenu' . $GLOBALS["firstcard"] . '()" id="mobilemenuopenid' . $GLOBALS["firstcard"] . '" class="mobilemenutab' . $GLOBALS["firstcard"] . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" fill="'.$arr["buttonInnerColor"].'"></path></svg>';
    $close_icon = '<svg onclick="hideSliderMenu' . $GLOBALS["firstcard"] . '()" id="mobilemenucloseid' . $GLOBALS["firstcard"] . '" class="mobilemenutab' . $GLOBALS["firstcard"] . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="'.$arr["buttonInnerColor"].'"></path></svg>';
    $arrowup_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\"><path d=\"M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z\" fill=\"" . $arr["textColor"] . "\"></path></svg>";
    $arrowdown_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\"><path d=\"M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z\" fill=\"" . $arr["textColor"] . "\"></path></svg>";
    echo '<style>
        .mobilemenutab' . $GLOBALS["firstcard"] . '{
            background-color:'.$arr["buttonBackgroundColor"].'; 
            position:absolute;
            cursor:pointer;
            display:none;
        }
        .mobilemenu' . $GLOBALS["firstcard"] . '{
            width:32px;
            height:32px;
            position:fixed;
            background-color:red;
            z-index:1001;
            top:'.$arr["buttonTop"].';
            right:'.$arr["buttonTop"].';
            display:none;
            transition: all 0.5s;
        }
        .mobileDropdownbk' . $GLOBALS["firstcard"] . '{
            height:var(--app-height);
            width:100%;
            background-color:transparent;
            position:fixed;
            display:none;
            top:0px;
            left:0px;
            z-index:1000;
            overflow-x:hidden;
        }
        .listContainer' . $GLOBALS["firstcard"] . '{
            width:'.$arr["sliderWidth"].';
            height:var(--app-height);
            background-color:'.$arr["backgroundColor"].';
            position:fixed;
            display:none;
            top:0px;
            left:0px;
            z-index:1000;
            overflow-x:hidden;
            transition: all 0.5s;
            box-shadow:inset 0 0 10px '.$arr["sliderBorderShadow"].';
        }
        .mobiletabchild' . $GLOBALS["firstcard"] . '{
            padding:15px 20px;
            overflow:hidden;
            border-bottom:1px solid '.$arr["tabsSeperatorColor"].';
            width:'.$sliderSubWidth.';
            font-weight:bolder;
            color:'.$arr["textColor"].';
        }
        .dropdownpull' . $GLOBALS["firstcard"] . '{
            height:0px;
            width:'.$sliderSubWidth.';
            overflow:hidden;
            transition: height 0.5s;
        }
        .pulllist' . $GLOBALS["firstcard"] . '{
            padding:15px 20px 15px 40px;
            background-color:'.$arr["backgroundSubColor"].';
            border-bottom:1px solid '.$arr["tabsSubSeperatorColor"].';
            font-weight:bold;
            
        }

        @media (max-width:'.$arr["maxWidth"].'px){
            .mobilemenutab' . $GLOBALS["firstcard"] . ', .mobilemenu' . $GLOBALS["firstcard"] . ', .listContainer' . $GLOBALS["firstcard"] . ', .mobileDropdownbk' . $GLOBALS["firstcard"] . '{
                display:block;
            }
            
        
            .closemenu' . $GLOBALS["firstcard"] . '{
                width:0px;
            }
        }
        
    </style>
    <div id="mobilemenu' . $GLOBALS["firstcard"] . '" class="mobilemenu' . $GLOBALS["firstcard"] . '">'.$menu_icon.'</div>

    <div onclick="hideSliderMenu' . $GLOBALS["firstcard"] . '()" id="mobileDropdownbk' . $GLOBALS["firstcard"] . '" class="mobileDropdownbk' . $GLOBALS["firstcard"] . ' closemenu' . $GLOBALS["firstcard"] . '"></div>
    <div id="listContainer' . $GLOBALS["firstcard"] . '" class="listContainer' . $GLOBALS["firstcard"] . ' closemenu' . $GLOBALS["firstcard"] . '">
        <div style="position:sticky; z-index:1001;padding:10px 20px;box-sizing:border-box; display:flex; align-items:center; top:-2px; width:100%; height:70px; background-color:'.$arr["titleBackgroundColor"].';">'.$arr["title"].'</div>';

        for($i=0; $i < sizeof($arr); $i++){

            $screenHomeKeys = array_keys($arr);
            if(is_array($arr[$screenHomeKeys[$i]])){

                if(!isset($arr[$screenHomeKeys[$i]]["type"])){
                    $arr[$screenHomeKeys[$i]]["type"]="Tab";
                }
                if(!isset($arr[$screenHomeKeys[$i]]["name"])){
                    $arr[$screenHomeKeys[$i]]["name"]="Tab";
                }
                if(!isset($arr[$screenHomeKeys[$i]]["link"])){
                    $arr[$screenHomeKeys[$i]]["link"]="";
                }

                if(!isset($arr[$screenHomeKeys[$i]]["list"])){
                    $arr[$screenHomeKeys[$i]]["list"]=["list1"=>"", "list2"=>"", "list3"=>"", "list4"=>"",];
                }

                if($arr[$screenHomeKeys[$i]]["type"]=="dropdown"){
                    $dropbag = $arr[$screenHomeKeys[$i]]["list"];
                    $dropbagKeys = array_keys($dropbag);
                    echo '<div onclick="Droppy' . $GLOBALS["firstcard"] . '(\'screenHomeTabs'.$i.'pull\', \'pullarrow'.$i.'\')" " id="screenHomeTabs'.$i.'" class="mobiletabchild' . $GLOBALS["firstcard"] . '">'.$arr[$screenHomeKeys[$i]]["name"].' <span id="pullarrow'.$i.'" style="position:relative; top:3px">'.$arrowdown_icon.'<span></div>
                        <div id="screenHomeTabs'.$i.'pull" class="dropdownpull' . $GLOBALS["firstcard"] . '">';
                            for($j=0; $j<sizeof($dropbag); $j++){
                                if($arr["onePage"]=="on"){
                                    echo '<div onclick="codea13SupperLoader(\''.$arr[$screenHomeKeys[$i]]["list"][$dropbagKeys[$j]].'\')" class="pulllist' . $GLOBALS["firstcard"] . '">'.$dropbagKeys[$j].'</div>';
                                }else{
                                    echo '<a style="color:'.$arr["textColor"].'" href="'.$arr[$screenHomeKeys[$i]]["list"][$dropbagKeys[$j]].'"><div class="pulllist' . $GLOBALS["firstcard"] . '">'.$dropbagKeys[$j].'</div></a>';
                                }
                                
                            }
                        echo '</div>
                    ';
                    
                    
                }else{
                    if($arr["onePage"]=="on"){
                        echo '<div onclick="codea13SupperLoader(\''.$arr[$screenHomeKeys[$i]]["link"].'\')" id="screenHomeTabs'.$i.'" class="mobiletabchild' . $GLOBALS["firstcard"] . '">'.$arr[$screenHomeKeys[$i]]["name"].'</div>';
                    }else{
                        echo '<a style="'.$arr["textColor"].'" href="'.$arr[$screenHomeKeys[$i]]["link"].'"><div id="screenHomeTabs'.$i.'" class="mobiletabchild' . $GLOBALS["firstcard"] . '">'.$arr[$screenHomeKeys[$i]]["name"].'</div></a>';
                    }
                    
                }
            }
        }
        
    echo '<div style="height:150px; background-color:transparent"></div></div>

    <script>
        function hideSliderMenu' . $GLOBALS["firstcard"] . '(){
            document.querySelector("#mobileDropdownbk' . $GLOBALS["firstcard"] . '").classList.add("closemenu' . $GLOBALS["firstcard"] . '");
            document.querySelector("#listContainer' . $GLOBALS["firstcard"] . '").classList.add("closemenu' . $GLOBALS["firstcard"] . '");
            document.querySelector("#mobilemenu' . $GLOBALS["firstcard"] . '").innerHTML=\'' . $menu_icon . '\';
        }
        function showSliderMenu' . $GLOBALS["firstcard"] . '(){
            document.querySelector("#mobileDropdownbk' . $GLOBALS["firstcard"] . '").classList.remove("closemenu' . $GLOBALS["firstcard"] . '");
            document.querySelector("#listContainer' . $GLOBALS["firstcard"] . '").classList.remove("closemenu' . $GLOBALS["firstcard"] . '");
            document.querySelector("#mobilemenu' . $GLOBALS["firstcard"] . '").innerHTML=\'' . $close_icon . '\';
        }
        function Droppy' . $GLOBALS["firstcard"] . '(id, arrowid){
            var item = document.querySelector("#"+id);
            var itemHeight = item.clientHeight;

            if(itemHeight==0){
                item.style.height="auto";
                var itemNewHeight = item.clientHeight;
                item.style.height = "0px";
                setTimeout(()=>{
                    item.style.height=itemNewHeight+"px";
                    document.querySelector("#"+ arrowid).innerHTML=\'' . $arrowup_icon . '\';
                }, 100);
                
            }else{
                item.style.height = "0px";
                document.querySelector("#"+arrowid).innerHTML=\'' . $arrowdown_icon . '\';
            }
        }

    </script>

    

    
    ';
    $GLOBALS["firstcard"]++;
    
}

?>