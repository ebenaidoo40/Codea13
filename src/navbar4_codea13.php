<?php
/**
 * @param array{
 * maxWidth,
 * onePage,
 * homeLink,
 * title,
 * rightTabSwitch,
 * rightFristTab,
 * rightSecondTab,
 * rightFirstTabLink,
 * rightSecondTabLink,
 * tabsBackgroundColor,
 * titleBackgroundColor,
 * tabsColor,
 * backgroundColor,
 * seperatorColor,
 * tab1:array{}
 * } $arr
 */

function navbar4_codea13(array $arr){
    if(!isset($arr["homeLink"])){
        $arr["homeLink"]="/";
    }
    if(!isset($arr["maxWidth"])){
        $arr["maxWidth"]="900";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Title here";
    }
    if(!isset($arr["rightTabSwitch"])){
        $arr["rightTabSwitch"]="on";
    }
    if(!isset($arr["rightFirstTab"])){
        $arr["rightFirstTab"]="Login";
    }
    if(!isset($arr["rightSecondTab"])){
        $arr["rightSecondTab"]="Sign up";
    }
    if(!isset($arr["rightFirstTabLink"])){
        $arr["rightFirstTabLink"]="";
    }
    if(!isset($arr["rightSecondTabLink"])){
        $arr["rightSecondTabLink"]="";
    }
    if(!isset($arr["tabsBackgroundColor"])){
        $arr["tabsBackgroundColor"]="#242424";
    }
    if(!isset($arr["titleBackgroundColor"])){
        $arr["titleBackgroundColor"]=$arr["tabsBackgroundColor"];
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#181818";
    }
    if(!isset($arr["tabsColor"])){
        $arr["tabsColor"]="#ffffff";
    }
    if(!isset($arr["seperatorColor"])){
        $arr["seperatorColor"]="#444444";
    }
    if(!isset($arr["onePage"])){
        $arr["onePage"]="off";
    }
     
    echo '
    <style>
    .screenHome{
        width:100%;
        overflow:hidden;
        background-color:'.$arr["backgroundColor"].';
        height:70px;
        display:flex;
        position:relative;
        padding:10px 80px 10px 80px;
        box-sizing:border-box;
    }
    .navBar{
        position:absolute;
        top:10px;
        height:50px;
        background-color:transparent;
        width:calc(100% - 160px);
        display:flex;
        align-items:center;
        border-radius:50px;
        overflow:hidden;
        transition:all 1s;
    }
    
    .tabs{
        background-color:'.$arr["tabsBackgroundColor"].';
        height:100%;
        border-radius: 0 50px 50px 0;
        padding-right:25px;
        align-items:center;
        display:flex;
        color:'.$arr["tabsColor"].';
        font-weight:bold;
    }
    .tabview{
        position:fixed;
        height:70px;
        top:0px;
        z-index:999;
        left:0;
        background-color:'.$arr["backgroundColor"].';
        width:100%;
        border-radius:0;
        box-shadow:2px 0px 2px 0px white;
        padding:10px 25px;
        box-sizing:border-box;        
    }
    .tabs>*{
        margin-left: 25px;
        cursor:pointer;
        height:100%;
        display:flex;
        align-items:center;
    }
    .tabchild:hover{
        text-decoration:underline; 
    }
    .extratabchildprop:hover{
        text-decoration:none;
        cursor:default;
    }
    .logo{
        width:fit-content;
        height:100%;
        background-color:'.$arr["titleBackgroundColor"].';
        padding-left:15px;
        padding-right:15px;
        display:flex;
        align-items:center;
        cursor:pointer;
    }
    .logInOut{
        display:flex;
        width:fit-content;
        padding: 0;
        position:absolute;
        right:0px;
        border-radius:50px;
        height:50px;
        background-color:'.$arr["tabsBackgroundColor"].';
        justify-content:space-between;
        align-items:center;
    }
    .shifter{
        right:20px
    }
    .login, .logout{
        height:50px;
        display:flex;
        justify-content:center;
        align-items:center;
        border-radius:50px;
        padding:0 20px;
        color:'.$arr["tabsColor"].';
        transition: all 0.2s linear;
        cursor:pointer;
    }
    .login:hover, .logout:hover{
        background-color:'.$arr["tabsColor"].';
        color:'.$arr["tabsBackgroundColor"].';
        box-sizing:border-box;
    }
    
    .dropDownMenus{
        position:absolute; 
        min-width:80px;
        height:fit-content; 
        background-color:'.$arr["tabsBackgroundColor"].'; 
        top:65px;
        display:none;
        border:1px solid '.$arr["seperatorColor"].';
        z-index:999;
    }
    .dropdownlistMenu{
        color:'.$arr["tabsColor"].';
        padding:10px 20px;
    }
    .dropdownlistMenu:hover{
        background-color:'.$arr["tabsColor"].';
        color:'.$arr["tabsBackgroundColor"].';
        cursor:pointer;
    }

    @media (max-width:'.$arr["maxWidth"].'px){
        .screenHome{
            padding:10px 20px 10px 20px;
        }
        .tabs{
            display:none;
        }
        .logInOut{
            display:none;
        }
        .navBar{
            width:100%;
        }
        
    }
    
    </style>

    <div class="screenHome">

        <div id="navBar" class="navBar ">';
        if($arr["onePage"]=="on"){
            echo '<div onclick="codea13SupperLoader(\''.$arr["homeLink"].'\')" class="logo">'.$arr["title"].'</div>';
        }else{
            if(!isset($arr["homeLink"])){
                echo '<div class="logo" style="cursor:default">'.$arr["title"].'</div>';
            }else{
                echo '<a style="height:100%;" href="'.$arr["homeLink"].'"><div class="logo">'.$arr["title"].'</div></a>';
            }
        }

            echo '<div class="tabs">';

                $screenHomeKeys = array_keys($arr);


                for($i=0; $i < sizeof($arr); $i++){

                    if(is_array($arr[$screenHomeKeys[$i]])){

                        if(!isset($arr[$screenHomeKeys[$i]]["type"])){
                            $arr[$screenHomeKeys[$i]]["type"]="Tab";
                        }
                        if(!isset($arr[$screenHomeKeys[$i]]["name"])){
                            $arr[$screenHomeKeys[$i]]["name"]="Tab";
                        }
                        

                        if($arr[$screenHomeKeys[$i]]["type"]=="dropdown"){
                            echo '<div onmouseleave="hideDroppy(\'screenHomeTabs'.$i.'\')" onmouseover="dropMeDownNow(\'screenHomeTabs'.$i.'\')" id="screenHomeTabs'.$i.'" class="tabchild">'.$arr[$screenHomeKeys[$i]]["name"].'</div>';
                            
                        }else{
                            if(!isset($arr[$screenHomeKeys[$i]]["link"])){
                                echo '<div id="screenHomeTabs'.$i.'" class="tabchild extratabchildprop" >'.$arr[$screenHomeKeys[$i]]["name"].'</div>';
                            }else{
                                if($arr["onePage"]=="on"){
                                    echo '<div onclick="codea13SupperLoader(\''.$arr[$screenHomeKeys[$i]]["link"].'\')" id="screenHomeTabs'.$i.'" class="tabchild">'.$arr[$screenHomeKeys[$i]]["name"].'</div>';
                                }else{
                                    echo '<a style="color:'.$arr["tabsColor"].'" href="'.$arr[$screenHomeKeys[$i]]["link"].'"><div id="screenHomeTabs'.$i.'" class="tabchild">'.$arr[$screenHomeKeys[$i]]["name"].'</div></a>';
                                }
                            }  
                        }
                    }
                }
            echo '</div>';

                if($arr["rightTabSwitch"]=="on"){
                    
                    echo '<div id="logInOut" class="logInOut">';

                        if($arr["onePage"]=="on"){
                            echo '
                                <div onclick="codea13SupperLoader(\''.$arr["rightFirstTabLink"].'\')" id="login" class="login">'.$arr["rightFirstTab"].'</div>
                                <div onclick="codea13SupperLoader(\''.$arr["rightSecondTabLink"].'\')"  id="logout" class="logout activelog">'.$arr["rightSecondTab"].'</div>
                            ';
                        }else{
                            echo '<a style="text-decoration:none; color:'.$arr["tabsColor"].'" href="'.$arr["rightFirstTabLink"].'"><div id="login" class="login">'.$arr["rightFirstTab"].'</div></a>
                            <a style="text-decoration:none; color:'.$arr["tabsColor"].'" href="'.$arr["rightSecondTabLink"].'"><div id="logout" class="logout activelog">'.$arr["rightSecondTab"].'</div></a>';
                        }
                            
                        echo '</div>';
                }
            
        echo '</div>
        <div class="specialline" style="height:0px; width:0px; background-color:white; position:absolute; top:65px"></div>

        
    </div>';

    for($i=0; $i < sizeof($arr); $i++){

        if(is_array($arr[$screenHomeKeys[$i]])){

            if(!isset($arr[$screenHomeKeys[$i]]["list"])){
                $arr[$screenHomeKeys[$i]]["list"]=["list1"=>"", "list2"=>"", "list3"=>"", "list4"=>"",];
            }

            if($arr[$screenHomeKeys[$i]]["type"]=="dropdown"){
                $dropbag = $arr[$screenHomeKeys[$i]]["list"];
                $dropbagKeys = array_keys($dropbag);
                echo '<div onmouseleave="mymyhide(\'screenHomeTabs'.$i.'dropdown\')" onmouseover="showmeDroppy(\'screenHomeTabs'.$i.'dropdown\')" id="screenHomeTabs'.$i.'dropdown" class="dropDownMenus">';
                    for($j=0; $j<sizeof($dropbag); $j++){
                        if($arr["onePage"]=="on"){
                            echo '<div onclick="codea13SupperLoader(\''.$arr[$screenHomeKeys[$i]]["list"][$dropbagKeys[$j]].'\')" class="dropdownlistMenu">'.$dropbagKeys[$j].'</div>';
                        }else{
                            echo '<a style="color:'.$arr["tabsColor"].'" href="'.$arr[$screenHomeKeys[$i]]["list"][$dropbagKeys[$j]].'"><div class="dropdownlistMenu">'.$dropbagKeys[$j].'</div></a>';
                        }
                        
                    }

                echo '</div>';
            }
        }
    }
    echo '

    <script>
    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                document.querySelector("#navBar").classList.remove("tabview");
                if(document.querySelector("#logInOut")){
                    document.querySelector("#logInOut").classList.remove("shifter");
                }
            }else{
                document.querySelector("#navBar").classList.add("tabview");
                if(document.querySelector("#logInOut")){
                    document.querySelector("#logInOut").classList.add("shifter");
                }
            }
        });
    },
    {
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".specialline");
    hiddenElements.forEach((el)=>observer.observe(el));

    function dropMeDownNow(id){
        var target = document.querySelector("#" + id);
        var targetDim = target.getBoundingClientRect();
        var targetX = targetDim.x;
        var targetY = targetDim.y + 50 + window.scrollY;
        document.querySelector("#" + id + "dropdown").style.display="block";
        document.querySelector("#" + id + "dropdown").style.top=targetY+"px";
        document.querySelector("#" + id + "dropdown").style.left=targetX+"px";
    }


    function hideDroppy(id){
        document.querySelector("#" + id + "dropdown").style.display="none";
    }
    function showmeDroppy(id){
        document.querySelector("#" + id).style.display="block";
    }
    function mymyhide(id){
        document.querySelector("#" + id).style.display="none";
    }

    var allDropListMenus = document.querySelectorAll(".dropDownMenus");
    window.addEventListener("scroll", ()=>{
        allDropListMenus.forEach((event)=>{
            var id = event.id;
            id = id.split("dropdown");
            var newId = id[0];

        var target = document.querySelector("#" + newId);
        var targetDim = target.getBoundingClientRect();
        var targetX = targetDim.x;
        var targetY = targetDim.y + 50 + window.scrollY;
        event.style.top=targetY+"px";
        event.style.left=targetX+"px";
        });
    });
    

    </script>

    ';

}
?>