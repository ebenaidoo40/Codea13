<?php
    function circleImage(array $arr){

        if(!isset($arr["vertical"])){
            $arr["vertical"]="100px";
        }
        if(!isset($arr["image"])){
            $arr["image"]="reze_frame_w/images/codea13.png";
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

        .firstgif'.$GLOBALS["firstcard"].'{
            width:250px; 
            height:220px;
            border-radius:45%; 
            position:absolute; 
            top:'.$arr["vertical"].'; 
            right:10%;
            box-shadow: 0 0 5px 1px #333;
            transition: all 0.6s;
        }

        @media (max-width:450px){
        
            .firstgif'.$GLOBALS["firstcard"].'{
                right:50%;
                transform:translateX(50%);
                width:90%;
            }
            
        }
    
        @media (max-width:325px){
            .firstgif'.$GLOBALS["firstcard"].'{
                right:50%;
                transform:translateX(50%);
                width:90%;
            }
            
        }
        </style>

            <img class="firstgif'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'" src="'.$arr["image"].'" alt="" srcset="">


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