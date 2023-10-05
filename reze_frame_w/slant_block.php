<?php
function slant_block(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="WELCOME TO CODEA 13";
    }
    if(!isset($arr["outerPaddingColor"])){
        $arr["outerPaddingColor"]="slateblue";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#e6e6fa";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="#e6e6fa";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    

    echo '
    <style>

    .initialpos'.$GLOBALS["firstcard"].'{
        transform: '.$arr["animation"].';
    }
        .secondblock'.$GLOBALS["firstcard"].'{
            min-height: 400px;
            background-color: '.$arr["backgroundColor"].';
            clip-path: polygon(0 0, 100% 0%, 100% 70%, 0% 100%); 
            text-align: center;
            position: relative;
        }
    </style>
    <div style="min-height:400px; background-color:'.$arr["outerPaddingColor"].'">
    <div class="secondblock'.$GLOBALS["firstcard"].'">
        <h1 style="transition:all 0.6s; font-size:30px; position:relative; top:150px; padding:20px; font-family:boldfont; text-shadow: 2px 2px white; color:'.$arr["titleColor"].'" class="initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">'.$arr["title"].'</h1>       
        <svg style="position:absolute; top:-80px; left:0%; width:50%; height:80%; z-index:0; opacity:0.4" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"> <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop></linearGradient></defs><path fill="purple" d="M11.4,-13.4C16.6,-9.2,24,-7.4,29.6,-1.4C35.3,4.6,39.2,14.7,34.8,17.9C30.4,21.1,17.6,17.3,8.1,19.6C-1.5,22,-7.8,30.5,-13.8,31.2C-19.9,32,-25.5,25,-26.3,18C-27,10.9,-22.8,3.8,-19.7,-1.7C-16.6,-7.2,-14.6,-11.1,-11.5,-15.6C-8.4,-20.2,-4.2,-25.4,-0.6,-24.7C3.1,-24.1,6.2,-17.5,11.4,-13.4Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path></svg>
    </div>
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
?>