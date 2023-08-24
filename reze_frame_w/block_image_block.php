<?php
function block_image_block(array $arr){
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur exercitationem ipsa. 
Facere mollitia maxime accusamus vero incidunt sit nulla sint odio delectus labore sed, deserunt 
minima fugiat inventore expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur 
exercitationem ipsa. Facere mollitia maxime accusamus vero incidunt sit nulla sint odio delectus 
labore sed, deserunt minima fugiat inventore expedita.";

    if(!isset($arr["content1"])){
        $arr["content1"]=$lorem;
    }
    if(!isset($arr["content2"])){
        $arr["content2"]=$lorem;
    }

    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#d867ae";
    }
    
    if(!isset($arr["title1"])){
        $arr["title1"]="Heading one goes here";
    }
    if(!isset($arr["title2"])){
        $arr["title2"]="Heading two goes here";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/papairon.jpg";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }

    echo '
    <style>

        .animation'.$GLOBALS["firstcard"].'{
            transition: all 0.6s;
        }

        

        .longblockmain'.$GLOBALS["firstcard"].'{
            min-height:500px;
            background-color:'.$arr["backgroundColor"].';
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));            
        }
        .longblockmain'.$GLOBALS["firstcard"].'>*{
            background-color:'.$arr["backgroundColor"].';
            flex:1;
            padding:20px;
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
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            font-weight:bolder;
            font-size:20px;
            text-shadow: 0 0 5px 5px green;
        }

        .longblockmainchild'.$GLOBALS["firstcard"].':first-child{
            align-self:center;
        }
        .longblockmainchild'.$GLOBALS["firstcard"].':last-child{
            align-self:center;
        }

        @media (max-width:660px){
            .longblockmain'.$GLOBALS["firstcard"].'{
                grid-template-columns: 1fr;
            }
        }
        

       
            

    
    </style>
    
    <div class="longblockmain'.$GLOBALS["firstcard"].'">

        <div class="longblockmainchild'.$GLOBALS["firstcard"].'">
            <h3 style="font-size:30px">'.$arr["title1"].'</h3><br>

            <p style="line-height:28px">
            '.$arr["content1"].'
            </p><br><br>

        </div>

        <div class="longblockmainchild'.$GLOBALS["firstcard"].'" ><img width="100%" height="100%" style="object-fit:cover" src="'.$arr["image"].'"></div>
        

        <div class="longblockmainchild'.$GLOBALS["firstcard"].'">
            <h3 style="font-size:30px">'.$arr["title2"].'</h3><br>

            <p style="line-height:28px">
            '.$arr["content2"].'
            </p><br><br>

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