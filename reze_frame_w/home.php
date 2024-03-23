<?php

function home(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="CODEA 13 FRAME WORK";
    }
    if(!isset($arr["titlesub"])){
        $arr["titlesub"]="Explore now for easy web development";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#00000010";
    }
    if(!isset($arr["titleBlockBackgroundColor"])){
        $arr["titleBlockBackgroundColor"]="#00000000";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["titlesubColor"])){
        $arr["titlesubColor"]="white";
    }
    if(!isset($arr["titleBackgroundColor"])){
        $arr["titleBackgroundColor"]="none";
    }
    if(!isset($arr["backgroundImage"])){
        $arr["backgroundImage"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["buttonName"])){
        $arr["buttonName"]="button";
    }
    if(!isset($arr["buttonTextColor"])){
        $arr["buttonTextColor"]="black";
    }
    if(!isset($arr["buttonSwitch"])){
        $arr["buttonSwitch"]="off";
    }
    if(!isset($arr["buttonLink"])){
        $arr["buttonLink"]="";
    }
    
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="none";
    }
    if(!isset($arr["buttonBackgroundHoverColor"])){
        $arr["buttonBackgroundHoverColor"]=$arr["buttonBackgroundColor"];
    }
    if(!isset($arr["downloadSwitch"])){
        $arr["downloadSwitch"]="";
    }
    if($arr["downloadSwitch"]=="on"){
        $arr["downloadSwitch"]="Download";
    }else{
        $arr["downloadSwitch"]="";
    }
    if(!isset($arr["id"])){
        $arr["id"]="";
    }
    

    echo '

    <style>
        .home'.$GLOBALS["firstcard"].'{
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            background-image:url("'.$arr["backgroundImage"].'");
            background-color:'.$arr["backgroundColor"].';
            background-size:cover;
            min-height:400px;
            padding:60px;
            gap:60px;
            justify-content:center;
        }

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .home'.$GLOBALS["firstcard"].'>*{
            background-color:inherit;
            transition: all 0.6s;
        }

        .hometitlebk'.$GLOBALS["firstcard"].'{
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:'.$arr["textColor"].';
            background-color:'.$arr["titleBlockBackgroundColor"].';
            padding:20px;
        }

        .mainimg'.$GLOBALS["firstcard"].'{
            max-height:100%;
            min-width:100%;
            object-fit:contain;
            background-color: '.$arr["titleBlockBackgroundColor"].';
        }

        .buttonpressbk'.$GLOBALS["firstcard"].'{
            max-width: 300px;
            position: relative;
            
        }
        .buttonpress'.$GLOBALS["firstcard"].'{
            padding: 10px;
            width: 100%;
            background-color: '.$arr["buttonBackgroundColor"].';
            border-radius: 50px;
            cursor:pointer;
            color:'.$arr["buttonTextColor"].';
            border:1px solid white;
            trasition: all 0.6s;
        }
        .buttonpress'.$GLOBALS["firstcard"].':hover{
            background-color: '.$arr["buttonBackgroundHoverColor"].';
        }

        @media (max-width:700px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(550px, 1fr));
            }
        }

        @media (max-width:650px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            }
        }
        @media (max-width:600px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            }
        }
        @media (max-width:550px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            }
        }
        @media (max-width:500px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
        }

        @media (max-width:360px){
            .home'.$GLOBALS["firstcard"].'{
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                padding:20px;
                gap:30px;
            }
        }

        
    
            
    </style>
    
    <div id="'.$arr["id"].'" class="home'.$GLOBALS["firstcard"].'">
        <div class="hometitlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
            <h1 style="font-size:40px;background-color:'.$arr["titleBackgroundColor"].'; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title"].'</h1>
            <span style="color:'.$arr["titlesubColor"].'; line-height:30px">'.$arr["titlesub"].'</span><br>';
            if($arr["buttonSwitch"]=="on"){
                echo '<a style="max-width: 300px;"  href="'.$arr["buttonLink"].'" '.$arr["downloadSwitch"].'><div class="buttonpressbk'.$GLOBALS["firstcard"].'"><button class="buttonpress'.$GLOBALS["firstcard"].'">'.$arr["buttonName"].'</button></div></a>';
            }else{}
            
        echo '</div>
        <img class="mainimg'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'" width="100%" height="100%" src="'.$arr["image"].'" alt="image here">
    </div>

    <script>
    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.remove("initialpos'.$GLOBALS["firstcard"].'");
            }else{
                entry.target.classList.add("initialpos'.$GLOBALS["firstcard"].'");
            }
        });
    },
    {
        threshold:0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>
    ';

    $GLOBALS["firstcard"]++;
}