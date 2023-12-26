<?php

function    slidepics(array $arr){

    if(!isset($arr["numOfPics"])){
        $arr["numOfPics"]=6;
    }else{
        if($arr["numOfPics"]<4){
            $arr["numOfPics"]=4;
        }
    }

    $slk = "reze_frame_w/images/eben.webp";

    if(!isset($arr["images"])){
        $arr["images"]=[$slk, $slk, $slk, $slk, $slk, $slk];
    }

    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#f0f0ff";
    }

    if(!isset($arr["backgroundImage"])){
        $backgroundImageSlider = "url(\"reze_frame_w/images/codea13.png\")";
    }else{
        if($arr["backgroundImage"]=="none"){
            $backgroundImageSlider = "none";
        }else {
            $backgroundImageSlider="url(".$arr["backgroundImage"].")";
        }
    }

    if(!isset($arr["mainPicBorder"])){
        $arr["mainPicBorder"]="0 0 10px 3px #333";
    }else{
        if($arr["mainPicBorder"]=="yes"){
            $arr["mainPicBorder"]="0 0 10px 3px #333";
        }else{
            $arr["mainPicBorder"]="none";
        }
    }

    
    
    if(!isset($arr["picBackground"])){
        $arr["picBackground"]="#ffffff";
    }

    if(!isset($arr["mPicFit"])){
        $arr["mPicFit"]="cover";
    }

    if(!isset($arr["dPicFit"])){
        $arr["dPicFit"]="contain";
    }

    if($arr["dPicFit"]=="cover"){
        $arr["position"]="0% 0%";
    }

    if($arr["dPicFit"]=="contain"){
        $arr["position"]="center";
    }


    echo '
        <style>
        .mainblock'.$GLOBALS["firstcard"].'{
            width:100%;
            background-color:'.$arr["backgroundColor"].';
            background-image: '.$backgroundImageSlider.';
            min-height:500px;
            position:relative;
            isolation:isolate;
        }

        .img0'.$GLOBALS["firstcard"].'{
            left:2.5%;
            top:50%;
            transform:translateY(-50%);
            position:absolute;
            width:20%;
            aspect-ratio:16/9;
            background-color:'.$arr["picBackground"].';
            transition: all 1s ease-in-out;
            z-index:-1;
            object-fit:'.$arr["dPicFit"].';
            object-position:'.$arr["position"].';
        }


        .img1'.$GLOBALS["firstcard"].'{
            width:45%;
            aspect-ratio: 16/9;
            background-color:'.$arr["picBackground"].';
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            transition: all 1s ease-in-out;
            z-index:1;
            object-fit:'.$arr["dPicFit"].';
            object-position:'.$arr["position"].';
            box-shadow: '.$arr["mainPicBorder"].';
        }

        .img2'.$GLOBALS["firstcard"].'{
            left:77.5%;
            top:50%;
            transform:translateY(-50%);
            position:absolute;
            width:20%;
            aspect-ratio:16/9;
            background-color:'.$arr["picBackground"].';
            object-fit:'.$arr["dPicFit"].';
            object-position:'.$arr["position"].';
            transition: all 1s ease-in-out;
            z-index:0;
        }

        .img'.$GLOBALS["firstcard"].'{
            left:49.5%;
            top:5%;
            transform:translateY(0%);
            position:absolute;
            width:1%;
            aspect-ratio:16/9;
            background-color:inherit;
            transition: all 1s ease-in-out;
            z-index:-1;
            object-fit:'.$arr["dPicFit"].';
            object-position:'.$arr["position"].';
        }


        @media (max-width:800px){

            .mainblock'.$GLOBALS["firstcard"].'{
                width:100%;
                background-color:'.$arr["backgroundColor"].';
                background-image: '.$backgroundImageSlider.';
                min-height:300px;
                position:relative;
                isolation:isolate;
            }
            
            .img0'.$GLOBALS["firstcard"].'{
                left:49.5%;
                top:0%;
                transform:translate(0%, 0%);
                position:absolute;
                width:1%;
                height:1vw;
                background-color:'.$arr["picBackground"].';
                transition: all 2s ease-in-out;
                z-index:-1;
                object-fit:'.$arr["mPicFit"].';
            }
    
    
            .img1'.$GLOBALS["firstcard"].'{
                width:100%;
                height:124vw;
                background-color:'.$arr["picBackground"].';
                position:relative;
                top:0%;
                left:0%;
                transform:translate(0%, 0%);
                transition: all 2s ease-in-out;
                z-index:1;
                object-fit:'.$arr["mPicFit"].';
                object-position: center;
                box-shadow: none;
            }
    
            .img2'.$GLOBALS["firstcard"].'{
                left:0;
                top:0;
                transform:translateY(0%);
                position:absolute;
                aspect-ratio:none;
                width:100%;
                height:124vw;
                background-color:'.$arr["picBackground"].';
                transition: all 2s ease-in-out;
                z-index:0;
                object-fit:'.$arr["mPicFit"].';
                object-position: center;
            }
    
            .img'.$GLOBALS["firstcard"].'{
                left:49.5%;
                top:0%;
                transform:translateY(0%);
                position:absolute;
                width:1%;
                aspect-ratio:16/9;
                background-color:inherit;
                transition: all 1s ease-in-out;
                z-index:-1;
                object-fit:contain;
            }
        }

        

        </style>

        <div class="mainblock'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">';
           for($i=0; $i<$arr["numOfPics"]; $i++){
                
                if($i<3){
                    echo '<img class="active_img'.$GLOBALS["firstcard"].' img'.$i.$GLOBALS["firstcard"].'" src="'.$arr["images"][$i].'" alt="image'.$i.'">';
                }else{
                    echo '<img class="active_img'.$GLOBALS["firstcard"].' img'.$GLOBALS["firstcard"].'" src="'.$arr["images"][$i].'" alt="image'.$i.'">';
                }
                
           } 
        echo '</div>';


        echo '
           <script>
           var counter'.$GLOBALS["firstcard"].' = 2;
           var picbag'.$GLOBALS["firstcard"].' = document.querySelectorAll(".active_img'.$GLOBALS["firstcard"].'");
           var sizeOfBag'.$GLOBALS["firstcard"].' = picbag'.$GLOBALS["firstcard"].'.length;


                function movepics'.$GLOBALS["firstcard"].'(){

                    if(counter'.$GLOBALS["firstcard"].' > (sizeOfBag'.$GLOBALS["firstcard"].' - 1)){
                        counter'.$GLOBALS["firstcard"].'=0;
                    }else{}
                    
                    var left'.$GLOBALS["firstcard"].' = counter'.$GLOBALS["firstcard"].' - 1;
                    var right'.$GLOBALS["firstcard"].' = counter'.$GLOBALS["firstcard"].' + 1;

                    if(left'.$GLOBALS["firstcard"].'<0){
                        left'.$GLOBALS["firstcard"].'=sizeOfBag'.$GLOBALS["firstcard"].'-1;
                    }else{}

                    if(right'.$GLOBALS["firstcard"].' >= sizeOfBag'.$GLOBALS["firstcard"].'){
                        right'.$GLOBALS["firstcard"].'=0;
                    }else{}


                    for(var k=0; k<sizeOfBag'.$GLOBALS["firstcard"].'; k++){
                        picbag'.$GLOBALS["firstcard"].'[k].setAttribute("class", "active_img'.$GLOBALS["firstcard"].' img'.$GLOBALS["firstcard"].'");   
                    }
                    
                    picbag'.$GLOBALS["firstcard"].'[counter'.$GLOBALS["firstcard"].'].setAttribute("class", "active_img'.$GLOBALS["firstcard"].' img1'.$GLOBALS["firstcard"].'");
                    picbag'.$GLOBALS["firstcard"].'[left'.$GLOBALS["firstcard"].'].setAttribute("class", "active_img'.$GLOBALS["firstcard"].' img0'.$GLOBALS["firstcard"].'");
                    picbag'.$GLOBALS["firstcard"].'[right'.$GLOBALS["firstcard"].'].setAttribute("class", "active_img'.$GLOBALS["firstcard"].' img2'.$GLOBALS["firstcard"].'");

                    counter'.$GLOBALS["firstcard"].'++;
                }

                
                var setval'.$GLOBALS["firstcard"].'=0;
                var observer'.$GLOBALS["firstcard"].' = new IntersectionObserver((entries)=>{
                    entries.forEach((entry) => {
                        if(entry.isIntersecting){
                            setval'.$GLOBALS["firstcard"].' = setInterval(movepics'.$GLOBALS["firstcard"].', 8000);
                        }else{
                            clearInterval(setval'.$GLOBALS["firstcard"].');
                        }
                    });
                },
                {
                    threshold:0.1,
                }
                );
            
                var hiddenElements'.$GLOBALS["firstcard"].' = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
                hiddenElements'.$GLOBALS["firstcard"].'.forEach((el)=>observer'.$GLOBALS["firstcard"].'.observe(el));


                
                document.addEventListener("visibilitychange", ()=>{

                    if(document.hidden){
                        clearInterval(setval'.$GLOBALS["firstcard"].');  
                    }else{
                        
                    }
                    
                 });
            
           </script>
        ';

        $GLOBALS["firstcard"]++;
    
}



