<?php
function infinite_pics(array $arr){
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="white";
    }
    echo '
    <style>
        .mainblock'.$GLOBALS["firstcard"].'{
            min-height:200px;
            background-color:'.$arr["backgroundColor"].';
            display:flex;
            justify-content:center;
            gap:20px;
            padding:20px;
            flex-wrap:wrap;
        }
        .submain'.$GLOBALS["firstcard"].'{
            display:flex;
            justify-content:center;
            background-color:white;
            width:400px;
            
            height:450px;
            position:relative;
        }
        .subimg'.$GLOBALS["firstcard"].'{
            width:100%;
            object-fit:cover;
            object-position: 50% 0;
        }
        .pictext'.$GLOBALS["firstcard"].'{
            position:absolute;
            bottom:10px;
            width:95%;
            min-height:100px;
            padding:20px;
            box-sizing:border-box;
        }

    </style>

    <div class="mainblock'.$GLOBALS["firstcard"].'">';
    $mykeyss = array_keys($arr);

        
    for ($i=0; $i <sizeof($arr) ; $i++) { 

        if(is_array($arr[$mykeyss[$i]])){
            if(!isset($arr[$mykeyss[$i]]["textBackgroundColor"])){
                $arr[$mykeyss[$i]]["textBackgroundColor"]="#00aaeedd";
            }
            if(!isset($arr[$mykeyss[$i]]["textColor"])){
                $arr[$mykeyss[$i]]["textColor"]="black";
            }
            if(!isset($arr[$mykeyss[$i]]["image"])){
                $arr[$mykeyss[$i]]["image"]="reze_frame_w/codea13.png";
            }
            if(!isset($arr[$mykeyss[$i]]["note"])){
                $arr[$mykeyss[$i]]["note"]="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore facilis quos, vel, unde ex eaque, quasi eum su";
            }
            
            
            echo '
                <div class="submain'.$GLOBALS["firstcard"].'">
                    <img class="subimg'.$GLOBALS["firstcard"].'" src="'.$arr[$mykeyss[$i]]["image"].'">
                    <div class="pictext'.$GLOBALS["firstcard"].'" style="background-color:'.$arr[$mykeyss[$i]]["textBackgroundColor"].'; color:'.$arr[$mykeyss[$i]]["textColor"].'">'.$arr[$mykeyss[$i]]["note"].'</div>
                </div>
            ';
        }
    }        
        
    echo '</div>
    ';
    $GLOBALS["firstcard"]++;
}
?>