<?php
function image_long_block(array $arr){
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur exercitationem ipsa. 
Facere mollitia maxime accusamus vero incidunt sit nulla sint odio delectus labore sed, deserunt 
minima fugiat inventore expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur 
exercitationem ipsa. Facere mollitia maxime accusamus vero incidunt sit nulla sint odio delectus 
labore sed, deserunt minima fugiat inventore expedita.";

    if(!isset($arr["content"])){
        $arr["content"]=$lorem;
    }

    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#d867ae";
    }
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["ringColor"])){
        $arr["ringColor"]="#0a3242";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Heading goes here";
    }
    if(!isset($arr["firstListNumber"])){
        $arr["firstListNumber"]=2;
    }
    if(!isset($arr["secondListNumber"])){
        $arr["secondListNumber"]=2;
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }

    echo '
    <style>

        .animation'.$GLOBALS["firstcard"].'{
            transition: all 0.6s;
        }

        .initialpos'.$GLOBALS["firstcard"].'{
            transform: '.$arr["animation"].';
        }

        .longblockmain'.$GLOBALS["firstcard"].'{
            min-height:500px;
            background-color:violet;
            display:flex;           
        }
        .longblockmain'.$GLOBALS["firstcard"].'>*{
            background-color:'.$arr["backgroundColor"].';
            flex:1;
        }
        .longblockmainchild'.$GLOBALS["firstcard"].':last-child{
            padding:5% 10%;
        }
        .longblockmainchild'.$GLOBALS["firstcard"].':nth-child(2){
            max-width:30%;
        }
        .longblockmainchild'.$GLOBALS["firstcard"].':first-child{
            max-width:10%;
        }

        .longunderp'.$GLOBALS["firstcard"].'{
            min-height:300px;
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap:20px;
        }
        .center'.$GLOBALS["firstcard"].'{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
        }

        .longunderp'.$GLOBALS["firstcard"].'>*{
            display:flex;
            flex-direction:column;
        }
        .longunderpsub'.$GLOBALS["firstcard"].'{
            display:flex;
            
            font-weight:bolder;
            font-size:20px;
            text-shadow: 0 0 5px 5px green;
        }
        .longunderpinnerbullet'.$GLOBALS["firstcard"].'{
            width:60px;
            height:60px; 
            border-radius:50%; 
            background-color:white;
            position:relative;
            border:20px solid '.$arr["ringColor"].';
            border-right:none;
        }

        .allList'.$GLOBALS["firstcard"].'{
            position:relative;
            display:flex;
            align-items:center;
            gap:5px;
        }
        .allList'.$GLOBALS["firstcard"].'>*{
            flex-grow:0;
            min-width:60px;
        }

        @media (max-width:800px){
            .longblockmainchild'.$GLOBALS["firstcard"].':first-child{
                max-width:8%;
            }

            .longblockmainchild'.$GLOBALS["firstcard"].':nth-child(2){
                max-width:40%;
            }

            .longblockmainchild'.$GLOBALS["firstcard"].':last-child{
                max-width:50%
                padding:5% 14%;
            }
            
           
        }
            

    
    </style>
    
    <div class="longblockmain'.$GLOBALS["firstcard"].'">

    <div class="longblockmainchild'.$GLOBALS["firstcard"].'"></div> 
    <div class="longblockmainchild'.$GLOBALS["firstcard"].'"><img width="100%" height="100%" style="object-fit:cover" src="reze_frame_w/images/port.jpg"></div>
    

        <div class="longblockmainchild'.$GLOBALS["firstcard"].'">
            <h3 style="font-size:30px; color:'.$arr["titleColor"].'">'.$arr["title"].'</h3><br>

            <p style="line-height:28px; color:'.$arr["textColor"].'">
            '.$arr["content"].'
            </p><br><br>

            <div class="longunderp'.$GLOBALS["firstcard"].'">

                <div>';
                for($ii=1; $ii<=$arr["firstListNumber"]; $ii++){

                    if(!isset($arr["firstList$ii"])){
                        $arr["firstList$ii"]="list 1 here";
                    }

                    echo '<div class="allList'.$GLOBALS["firstcard"].' animation'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
                            <div class="longunderpinnerbullet'.$GLOBALS["firstcard"].'"><span class="center"></span></div>
                            <div class="longunderpsub'.$GLOBALS["firstcard"].'">'.$arr["firstList$ii"].'</div>  
                        </div><br>';
                }  
                echo '</div>

                <div>';
                for($ii=1; $ii<=$arr["secondListNumber"]; $ii++){

                    if(!isset($arr["secondList$ii"])){
                        $arr["secondList$ii"]="list 2 here";
                    }

                    echo '<div class="allList'.$GLOBALS["firstcard"].' animation'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
                            <div class="longunderpinnerbullet'.$GLOBALS["firstcard"].'"><span class="center"></span></div>
                            <div class="longunderpsub'.$GLOBALS["firstcard"].'">'.$arr["secondList$ii"].'</div>  
                        </div><br>';
                }  
                echo '</div>
            </div>

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
