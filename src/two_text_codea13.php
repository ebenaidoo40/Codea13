<?php
/**
 * @param array{
 * title1,
 * title2,
 * content1,
 * content2,
 * backgroundColor,
 * titleColor,
 * textColor,
 * animation,
 * rotate,
 * z-index,
 * InnerBackgroundColor,
 * buttonSwitch1,
 * buttonSwitch2,
 * buttonName1,
 * buttonName2,
 * buttonBackgroundColor,
 * buttonBackgroundHoverColor,
 * buttonTextColor,
 * buttonLink1,
 * buttonLink2,
 * downloadSwitch1,
 * downloadSwitch2
 * } $arr
 */

function two_text_codea13(array $arr){
    if(!isset($arr["title1"])){
        $arr["title1"]="FIRST TITLE HERE";
    }
    if(!isset($arr["title2"])){
        $arr["title2"]="SECOND TITLE HERE";
    }
    if(!isset($arr["content1"])){
        $arr["content1"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corrupti doloribus, similique commodi quia iusto si.";
    }

    if(!isset($arr["content2"])){
        $arr["content2"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corrupti doloribus, similique commodi quia iusto si.";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#CCC";
    }
    if(!isset($arr["innerBackgroundColor"])){
        $arr["innerBackgroundColor"]="none";
    }
    if(!isset($arr["z-index"])){
        $arr["z-index"]="0";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="purple";
    }
    if(!isset($arr["rotate"])){
        $arr["rotate"]="0deg";
    }

    if(!isset($arr["buttonName1"])){
        $arr["buttonName1"]="button";
    }
    if(!isset($arr["buttonName2"])){
        $arr["buttonName2"]="button";
    }
    if(!isset($arr["buttonTextColor"])){
        $arr["buttonTextColor"]="black";
    }
    if(!isset($arr["buttonSwitch1"])){
        $arr["buttonSwitch1"]="off";
    }
    if(!isset($arr["buttonSwitch2"])){
        $arr["buttonSwitch2"]="off";
    }
    if(!isset($arr["buttonLink1"])){
        $arr["buttonLink1"]="";
    }
    if(!isset($arr["buttonLink2"])){
        $arr["buttonLink2"]="";
    }
    
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="none";
    }
    if(!isset($arr["buttonBackgroundHoverColor"])){
        $arr["buttonBackgroundHoverColor"]=$arr["buttonBackgroundColor"];
    }
    if(!isset($arr["downloadSwitch1"])){
        $arr["downloadSwitch1"]="";
    }
    if(!isset($arr["downloadSwitch2"])){
        $arr["downloadSwitch2"]="";
    }
    if($arr["downloadSwitch1"]=="on"){
        $arr["downloadSwitch1"]="Download";
    }else{
        $arr["downloadSwitch1"]="";
    }

    if($arr["downloadSwitch2"]=="on"){
        $arr["downloadSwitch2"]="Download";
    }else{
        $arr["downloadSwitch2"]="";
    }
    

    echo '

    <style>
    .home'.$GLOBALS["firstcard"].'{
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        min-height:200px;
        padding:60px;
        gap:60px;
        justify-content:center;
        align-items:center;
        position:relative;
        isolation:isolate;
        z-index:'.$arr["z-index"].';
        background-color:'.$arr["innerBackgroundColor"].';
    }

    .home'.$GLOBALS["firstcard"].'::after{
        content:" ";
        background-color:'.$arr["backgroundColor"].';
        position:absolute;
        inset:0;
        transform: skewY('.$arr["rotate"].');
        z-index:-1;
        overflow:hidden;
    }

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .home'.$GLOBALS["firstcard"].'>*{
            background-color:white;
            opacity:1;
            transition: all 0.6s;
        }

        .hometitlebk'.$GLOBALS["firstcard"].'{
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:'.$arr["textColor"].';
            background-color:inherit;
            padding:50px;
        }

        .mainimg'.$GLOBALS["firstcard"].'{
            object-fit:contain;
            max-height:400px;
            background-color:inherit;
        }

        .buttonpressbk'.$GLOBALS["firstcard"].'{
            max-width: 300px;
            position: relative;    
        }
        .buttonpress'.$GLOBALS["firstcard"].'{
            padding: 10px;
            width: 50%;
            background-color: '.$arr["buttonBackgroundColor"].';
            border-radius: 0px;
            cursor:pointer;
            color:'.$arr["buttonTextColor"].';
            border:1px solid white;
            transition: all 0.6s;
        }

        .buttonpress'.$GLOBALS["firstcard"].':hover{
            background-color: '.$arr["buttonBackgroundHoverColor"].';
        }




        @media (max-width:700px){
            .hometitlebk'.$GLOBALS["firstcard"].'{
                padding:20px;
            }
            
        }

        @media (max-width:360px){
            .home'.$GLOBALS["firstcard"].'{
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                background-color:'.$arr["backgroundColor"].';
                min-height:400px;
                padding:60px 5%;
                gap:60px;
                justify-content:center;
            }
        }
    
            
    </style>
    
    <div class="home'.$GLOBALS["firstcard"].'">

        <div class="hometitlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
            <h1 style="font-size:30px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title1"].'</h1>
            <span style="line-height:30px;">'.$arr["content1"].'</span><br>';

            if($arr["buttonSwitch1"]=="on"){
                echo '<a style="max-width: 300px;"  href="'.$arr["buttonLink1"].'" '.$arr["downloadSwitch1"].'><div class="buttonpressbk'.$GLOBALS["firstcard"].'"><button class="buttonpress'.$GLOBALS["firstcard"].'">'.$arr["buttonName1"].'</button></div></a>';
            }else{}

        echo '</div>

        <div class="hometitlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
            <h1 style="font-size:30px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title2"].'</h1>
            <span style="line-height:30px;">'.$arr["content2"].'</span><br>';

            if($arr["buttonSwitch2"]=="on"){
                echo '<a style="max-width: 300px;"  href="'.$arr["buttonLink2"].'" '.$arr["downloadSwitch2"].'><div class="buttonpressbk'.$GLOBALS["firstcard"].'"><button class="buttonpress'.$GLOBALS["firstcard"].'">'.$arr["buttonName2"].'</button></div></a>';
            }else{}
        echo '</div>
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
        threshold: 0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>

    ';

    $GLOBALS["firstcard"]++;
}