<?php
function box_pics(array $arr){
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#6FA287";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Title Here";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["content"])){
        $arr["content"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, tempore explicabo eaque doloribus molestias officiis dolorem assumenda quisquam iste nisi enim cumque ex unde voluptate eligendi veritatis. Qui, necessitatibus ipsa.";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="white";
    }
    if(!isset($arr["buttonName"])){
        $arr["buttonName"]="Click here";
    }
    if(!isset($arr["buttonTextColor"])){
        $arr["buttonTextColor"]="white";
    }
    if(!isset($arr["buttonSwitch"])){
        $arr["buttonSwitch"]="on";
    }
    if(!isset($arr["buttonLink"])){
        $arr["buttonLink"]="";
    }
    
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="black";
    }
    if(!isset($arr["buttonBackgroundHoverColor"])){
        $arr["buttonBackgroundHoverColor"]=$arr["buttonBackgroundColor"];
    }

    if(!isset($arr["buttonTextHoverColor"])){
        $arr["buttonTextHoverColor"]=$arr["buttonTextColor"];
    }

    if(!isset($arr["downloadSwitch"])){
        $arr["downloadSwitch"]="";
    }
    if($arr["downloadSwitch"]=="on"){
        $arr["downloadSwitch"]="Download";
    }else{
        $arr["downloadSwitch"]="";
    }

    echo '
    <style>
        .mainblock'.$GLOBALS["firstcard"].'{
            display:flex;
            min-height:500px;
            background-color:'.$arr["backgroundColor"].';
            padding: 20px 20px 20px 0;
        }
        .leftblock'.$GLOBALS["firstcard"].'{
            flex-grow:1;
            background-color:'.$arr["backgroundColor"].';
            max-width:400px;
            box-sizing:border-box;
            display:flex;
            flex-direction:column;
            justify-content:center;
            padding:40px;
        }

        .leftheading'.$GLOBALS["firstcard"].'{
            font-size:25px;
            margin-bottom:20px;
            color:'.$arr["titleColor"].';
        }

        .leftcontent'.$GLOBALS["firstcard"].'{
            margin-bottom:30px;
            line-height:2;
            color:'.$arr["textColor"].';
        }

        .leftbutton'.$GLOBALS["firstcard"].'{
            padding:10px 30px;
            background-color:'.$arr["buttonBackgroundColor"].';
            color:'.$arr["buttonTextColor"].';
            width:fit-content;
            cursor:pointer;
        }

        .leftbutton'.$GLOBALS["firstcard"].':hover{
            background-color:'.$arr["buttonBackgroundHoverColor"].';
            color:'.$arr["buttonTextHoverColor"].';
        }

        .rightblock'.$GLOBALS["firstcard"]. '{
            display:flex;
            flex-wrap:wrap;
            background-color:' . $arr["backgroundColor"] . ';
            flex-grow:1;
        }

        .rightsub'.$GLOBALS["firstcard"].'{
            background-position: 50% 0;
            flex:1;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:10px;
            background-color:#000000;
            min-width:200px;
        }
        .rightsub'.$GLOBALS["firstcard"].'>*{
            padding:5px;
            line-height:1.5;
        }

        @media (max-width:700px){
            .mainblock'.$GLOBALS["firstcard"].'{
                flex-direction:column;
                padding: 0 0 20px 0;
            }
            .leftblock'.$GLOBALS["firstcard"].'{
                max-width:100%;
            }
            .rightblock'.$GLOBALS["firstcard"].'{
                display:block;
                background-color:'.$arr["backgroundColor"].';
            }
            .rightsub'.$GLOBALS["firstcard"].'{
                height:400px;
                display:flex;
                width:90%;
                margin: 0 auto;
            }
            .smallnote'.$GLOBALS["firstcard"].'{
                max-width:400px;
            }
        }

    </style>


    <div class="mainblock'.$GLOBALS["firstcard"].'">

        <div class="leftblock'.$GLOBALS["firstcard"].'">
            <h1 class="leftheading'.$GLOBALS["firstcard"].'">'.$arr["title"].'</h1>
            <div class="leftcontent'.$GLOBALS["firstcard"].'">'.$arr["content"].'</div>';
            if($arr["buttonSwitch"]=="on"){
                echo '<a style="text-decoration:none" href="'.$arr["buttonLink"].'" '.$arr["downloadSwitch"].'><div class="leftbutton'.$GLOBALS["firstcard"].'">'.$arr["buttonName"].'</div></a>';
            }else{}
            
       echo '</div>

        <div class="rightblock'.$GLOBALS["firstcard"].'">';

        $mykeyss = array_keys($arr);

        
        for ($i=0; $i <sizeof($arr) ; $i++) { 
    
            if(is_array($arr[$mykeyss[$i]])){
                if(!isset($arr[$mykeyss[$i]]["textBackgroundColor"])){
                    $arr[$mykeyss[$i]]["textBackgroundColor"]="#000000dd";
                }
                if(!isset($arr[$mykeyss[$i]]["textColor"])){
                    $arr[$mykeyss[$i]]["textColor"]="white";
                }
            if (!isset($arr[$mykeyss[$i]]["imageFit"])) {
                $arr[$mykeyss[$i]]["imageFit"] = "cover";
            }
            if (!isset($arr[$mykeyss[$i]]["imagePosition"])) {
                $arr[$mykeyss[$i]]["imagePosition"] = "50% 0";
            }
                if(!isset($arr[$mykeyss[$i]]["image"])){
                    $arr[$mykeyss[$i]]["image"]="reze_frame_w/codea13.png";
                }
                if(!isset($arr[$mykeyss[$i]]["note"])){
                    $arr[$mykeyss[$i]]["note"]="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore facilis quos, vel, unde ex eaque, quasi eum su";
                }

                echo '
                    <div class="rightsub'.$GLOBALS["firstcard"]. '" style="background-position:'. $arr[$mykeyss[$i]]["imagePosition"].'; background-repeat:no-repeat; background-color:#6FA28700;  background-size:'. $arr[$mykeyss[$i]]["imageFit"].'; background-image:url(\''.$arr[$mykeyss[$i]]["image"].'\')">
                        <div class="smallnote'.$GLOBALS["firstcard"].'" style="color:'.$arr[$mykeyss[$i]]["textColor"].'; background-color:'.$arr[$mykeyss[$i]]["textBackgroundColor"].'">'.$arr[$mykeyss[$i]]["note"].'</div>
                    </div>
                ';
            }
        }
            
        echo '</div>

    </div>
    
    ';
    $GLOBALS["firstcard"]++;
}

?>