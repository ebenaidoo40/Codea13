<?php
function image_content(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="Title Goes Here";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["content"])){
        $arr["content"]="The content of the title goes in here";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["topBackgroundColor"])){
        $arr["topBackgroundColor"]="tomato";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="blue";
    }
    if(!isset($arr["image"])){
        $arr["image"]="codea13/images/eben.webp";
    }
    echo'
    <style>
        .mainDiv' . $GLOBALS["firstcard"] . '{
            min-height:300px;
            background-color:transparent;
            position:relative;
        }
        .topdiv' . $GLOBALS["firstcard"] . '{
            height:70px;
            background-color:'.$arr["topBackgroundColor"].';
        }
        .bottomdiv' . $GLOBALS["firstcard"] . '{
            background-color:'.$arr["backgroundColor"].';
            min-height:230px;
            padding:20px 10% 20px 20px;
            padding-left: calc(10% + 400px);
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        .title' . $GLOBALS["firstcard"] . '{
            font-size:35px;
            font-weight:bold;
            color:'.$arr["titleColor"].';
        }
        .titleContent' . $GLOBALS["firstcard"] . '{
            color:'.$arr["textColor"].';
        }
        .floatdiv' . $GLOBALS["firstcard"] . '{
            position:absolute;
            max-width:30%;
            height:100%;
            top:0;
            background-color:transparent;
            left:10%;
            border-radius:30%;
            overflow:hidden;
        }
        .image' . $GLOBALS["firstcard"] . '{
            width:100%;
            height:100%;
            object-fit:cover;
            object-position: 50% 0;
        }
        @media (max-width: 800px){
            .floatdiv' . $GLOBALS["firstcard"] . '{
                max-height:400px;
                max-width:80%;
                left:50%;
                transform:translateX(-50%);
            }
            .bottomdiv' . $GLOBALS["firstcard"] . '{
                text-align:center;
                justify-content:center;
            }
    </style>
    
    <div class="mainDiv' . $GLOBALS["firstcard"] . '">
        <div class="topdiv' . $GLOBALS["firstcard"] . '"></div>
        <div id="content' . $GLOBALS["firstcard"] . '" class="bottomdiv' . $GLOBALS["firstcard"] . '">
            <div class="title' . $GLOBALS["firstcard"] . '">'.$arr["title"].'</div>
            <div class="titleContent' . $GLOBALS["firstcard"] . '">'.$arr["content"].'</div>
        </div>
        <div id="floatimage' . $GLOBALS["firstcard"] . '" class="floatdiv' . $GLOBALS["firstcard"] . '">
            <img class="image' . $GLOBALS["firstcard"] . '"  src="'.$arr["image"].'">
        </div>
    </div>

    <script>
        var content' . $GLOBALS["firstcard"] . ' = document.querySelector("#content' . $GLOBALS["firstcard"] . '");
        function alterWidth' . $GLOBALS["firstcard"] . '(){
            var floatdiv' . $GLOBALS["firstcard"] . ' = document.querySelector("#floatimage' . $GLOBALS["firstcard"] . '");
            var floatDim' . $GLOBALS["firstcard"] . ' = floatdiv' . $GLOBALS["firstcard"] . '.getBoundingClientRect();
            var floatDimX' . $GLOBALS["firstcard"] . ' = floatDim' . $GLOBALS["firstcard"] . '.x;
            var floatDimWidth' . $GLOBALS["firstcard"] . ' = floatDim' . $GLOBALS["firstcard"] . '.width;
            var floatDimHeight' . $GLOBALS["firstcard"] . ' = floatDim' . $GLOBALS["firstcard"] . '.height;
            var totalspace' . $GLOBALS["firstcard"] . ' = floatDimX' . $GLOBALS["firstcard"] . ' + floatDimWidth' . $GLOBALS["firstcard"] . ';
            if(window.innerWidth > 800){
                content' . $GLOBALS["firstcard"] . '.style.paddingLeft=totalspace' . $GLOBALS["firstcard"] . ' + 20 + "px";
                content' . $GLOBALS["firstcard"] . '.style.paddingTop="20px";
            }else{
                content' . $GLOBALS["firstcard"] . '.style.padding="30px";
                content' . $GLOBALS["firstcard"] . '.style.paddingTop=floatDimHeight' . $GLOBALS["firstcard"] . ' - 70 +"px";
            }
        }
        alterWidth' . $GLOBALS["firstcard"] . '();
        window.addEventListener("resize", alterWidth' . $GLOBALS["firstcard"] . ');

    </script>
    ';

    $GLOBALS["firstcard"]++;

}
?>