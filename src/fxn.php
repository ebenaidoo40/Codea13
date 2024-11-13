<?php
/* this function converts a string "["left"=>"0px","right"=>"30px"]" to array ["left"=>"0px","right"=>"30px"] */
function eben_str_arr($string){
    $special_bag = explode("([", $string);
    $function_name= $special_bag[0];
    $function_name_parameter = $special_bag[1];

    $parameter = explode("])", $function_name_parameter);
    $param = $parameter[0];
    $parameter = explode(";;", $param);

    $counter = sizeof($parameter);
    $keybag=[];
    for($j=0; $j<$counter; $j++){
        $p1 = $parameter[$j];     
        $p2 = explode("=>", $p1);

        if(isset($p1[$j])){
            array_push($keybag, $p2[0]);
            $mkey=$keybag[$j];

            $firstcha = substr($p2[1], 0, 1);

            if($firstcha=="["){
                $p2[1]= eben_str_arr2($p2[1]);
            }
            $keybag[$mkey]=$p2[1];
        }
    }
    return $keybag;
}


/* this function converts a string of the form "[left:0px + right:30px]" to array ["left"=>"0px","right"=>"30px"] */
function eben_str_arr2($string){
    $special_bag2 = explode("[", $string);

    $function_name_parameter2 = $special_bag2[1];

    $parameter2 = explode("]", $function_name_parameter2);
    $param2 = $parameter2[0];
    $parameter2 = explode("+", $param2);

    $counter2 = sizeof($parameter2);
    $keybag2=[];
    for($i=0; $i<$counter2; $i++){
        $p1_2 = preg_replace('/\s+/', '', $parameter2[$i]);    /* clearing all white spaces in the string $parameter2[$i] */
        $p2_2 = explode(":", $p1_2);

        if(isset($p1_2[$i])){
            array_push($keybag2, $p2_2[0]);
            $mkey2=$keybag2[$i];
            $keybag2[$mkey2]=$p2_2[1];
        }
    }
    
    return $keybag2;
}

function set_height($parent, $child, $stretch){
    echo '
    <script>
        function heightChanger'.$GLOBALS["firstcard"].'(){
            var parent = document.querySelector("#'.$parent.'");
            var child = document.querySelector("#'.$child.'");

            var parentDimension = parent.getBoundingClientRect();
            var newHeight = parentDimension.height + "px";
            child.style.height = newHeight;

            if(window.innerWidth < '.$stretch.'){
                child.style.height="auto";
            }else{
                child.style.height= newHeight;
            }
        }

        heightChanger'.$GLOBALS["firstcard"].'();
        window.addEventListener("resize", heightChanger'.$GLOBALS["firstcard"].');
        window.addEventListener("load", heightChanger'.$GLOBALS["firstcard"].');
    </script>
    ';
}




?>