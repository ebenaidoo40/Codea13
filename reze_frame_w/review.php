<?php
$rvcounter=0;
function review(array $arr){
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur exercitationem ipsa. 
Facere mollitia maxime accusamus vero incidunt sit.";

if(!isset($arr["content"])){
    $arr["content"]=$lorem;
}
if(!isset($arr["image"])){
    $arr["image"]="reze_frame_w/images/codea13.png";
}
if(!isset($arr["review"])){
    $arr["review"]=["client 1"=>$lorem, "client 2"=>$lorem, "client 3"=>$lorem,];
}
if(!isset($arr["title"])){
    $arr["title"]="Review Title";
}
if(!isset($arr["titleColor"])){
    $arr["titleColor"]="white";
}
if(!isset($arr["titleBackgroundColor"])){
    $arr["titleBackgroundColor"]="rgb(48, 20, 70)";
}
if(!isset($arr["textColor"])){
    $arr["textColor"]="black";
}
if(!isset($arr["backgroundColor"])){
    $arr["backgroundColor"]="#f0f0ff";
}
if(!isset($arr["loaderBackgroundColor"])){
    $arr["loaderBackgroundColor"]="white";
}
if(!isset($arr["progressBarColor"])){
    $arr["progressBarColor"]="rgb(48, 20, 70)";
}
    echo '

    <style>
        .reviewmain'.$GLOBALS["firstcard"].'{
            min-height:200px;
            background-color:'.$arr["backgroundColor"].';
            position:relative;
            padding:20px;
            
        }
        .reviewtopblock'.$GLOBALS["firstcard"].'{
            background-color:'.$arr["backgroundColor"].';
            box-sizing:border-box;
            position:relative;
            display:flex;
        }
        .reviewtopblock'.$GLOBALS["firstcard"].'>*{
            background-color:'.$arr["titleBackgroundColor"].';
            padding:20px;
            font-size:34px;
            font-weight:bold;
            text-align:center;
            border-radius:50px;
            flex:1;
            color:'.$arr["titleColor"].';
        }
        .reviewimg'.$GLOBALS["firstcard"].'{
            width:100%;
            height:300px;
            object-fit:contain;
        }
        .reviewmiddleblock'.$GLOBALS["firstcard"].'{
            margin-top:20px;
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, max-content));
            align-items:center;
            line-height:30px;
        }
        .reviewmiddleblock'.$GLOBALS["firstcard"].'>*{
            background-color:inherit;
            box-sizing:border-box;  
            color:'.$arr["textColor"].';
        }

        .reviewCommentBlock'.$GLOBALS["firstcard"].'{
            transition: transform 0.3s linear;
        }
        .scaling'.$GLOBALS["firstcard"].'{
            transform: scale(0.6);
        }
        .reviewLoader{
            position:absolute;
            height:60%;
            top:20%; 
            width:0px; 
            background-color:'.$arr["progressBarColor"].';
            transition:width 1s linear 0s;
        }

        @media (max-width:350px){
            .reviewmiddleblock'.$GLOBALS["firstcard"].'{
                margin-top:20px;
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, max-content));
                align-items:center;
                line-height:30px;
                gap:20px;
            }
        }


    </style>
    
    
    <div class="reviewmain'.$GLOBALS["firstcard"].'">
        
        <div class="reviewtopblock'.$GLOBALS["firstcard"].'">
            <div>'.$arr["title"].'</div>
        </div>

        <div class="reviewmiddleblock'.$GLOBALS["firstcard"].'">
            <img class="reviewimg'.$GLOBALS["firstcard"].'" width="100" height="100" style="padding:10px;" src="'.$arr["image"].'">
            <div id="reviewCommentBlock'.$GLOBALS["firstcard"].'" class="reviewCommentBlock'.$GLOBALS["firstcard"].'" style="border-radius:50px;padding:20px 50px;">';

            
            if(isset($arr["review"])){
                $studentNames = array_keys($arr["review"]);
                $rvcounter=0;
            }
            echo '
            <h2 id="maintitle'.$GLOBALS["firstcard"].'" style="font-size:18px;color:lightseagreen; text-shadow:0.5px 0.5px black;">'.$studentNames[0].'</h2>
            <div id="reviewStaticLoader" style="height:10px; background-color:'.$arr["loaderBackgroundColor"].'; position:relative;"><div id="reviewLoader" class="reviewLoader" ></div></div>
            <div id="maintitlecontent'.$GLOBALS["firstcard"].'" style="max-width:600px">
            '.$arr["review"][$studentNames[0]].'
            </div>
            </div>
        </div>    
    </div>
 
    

    <script>

    var reviewMainArray'.$GLOBALS["firstcard"].' = '.json_encode($arr["review"]).';
    var reviewMainArrayKeys'.$GLOBALS["firstcard"].' = '.json_encode($studentNames).';
    var reviewCounter'.$GLOBALS["firstcard"].'=0; 


    var reviewLoaderCounter=-2;
    var perloadWidth=0;

        setInterval(() => {
            if(reviewLoaderCounter > -2){
            var mainStaticLoaderWidth = document.querySelector("#reviewStaticLoader").clientWidth;
            var mainDynamicLoaderWidth = document.querySelector("#reviewLoader").clientWidth;
            
            var reviewLoaderWidthLeft = mainStaticLoaderWidth - mainDynamicLoaderWidth;
            var perloadSecond = mainStaticLoaderWidth / 15;
            perloadWidth += (perloadSecond / mainStaticLoaderWidth) * 100; 
            document.querySelector("#reviewLoader").style.width=perloadWidth+"%";
            reviewLoaderCounter++;

            if(reviewLoaderCounter == 15){
                document.querySelector("#reviewCommentBlock'.$GLOBALS["firstcard"].'").classList.add("scaling'.$GLOBALS["firstcard"].'");
                var maintitle'.$GLOBALS["firstcard"].' = document.querySelector("#maintitle'.$GLOBALS["firstcard"].'");
                var maintitlecontent'.$GLOBALS["firstcard"].' = document.querySelector("#maintitlecontent'.$GLOBALS["firstcard"].'");
                reviewCounter'.$GLOBALS["firstcard"].'++;
                if(reviewCounter'.$GLOBALS["firstcard"].' == reviewMainArrayKeys'.$GLOBALS["firstcard"].'.length){
                    reviewCounter'.$GLOBALS["firstcard"].'=0;
                }else{}
              
                setTimeout(()=>{
                    document.querySelector("#reviewCommentBlock'.$GLOBALS["firstcard"].'").classList.remove("scaling'.$GLOBALS["firstcard"].'");
                    maintitle'.$GLOBALS["firstcard"].'.innerHTML=reviewMainArrayKeys'.$GLOBALS["firstcard"].'[reviewCounter'.$GLOBALS["firstcard"].'];
                    maintitlecontent'.$GLOBALS["firstcard"].'.innerHTML=reviewMainArray'.$GLOBALS["firstcard"].'[reviewMainArrayKeys'.$GLOBALS["firstcard"].'[reviewCounter'.$GLOBALS["firstcard"].']];
                    document.querySelector("#reviewLoader").style.width="0px";
                    reviewLoaderCounter=-2;
                    perloadWidth=0;
                },300);
            }
        }if(reviewLoaderCounter==-2){
            reviewLoaderCounter++;
        }
        },1000);

    </script>';
}

?>