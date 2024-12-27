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

function set_height_codea13($parent, $child, $stretch){
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


function input_handler_codea13(){
    echo '<script>
    let inputPosition = { top: 0, left: 0 };
function checkAndFocusInput() {
  const inputElement = document.querySelector("input");
  
  if (document.activeElement === inputElement) {
    const rect = inputElement.getBoundingClientRect();
    inputPosition = { top: rect.top, left: rect.left };
    inputElement.scrollIntoView({ behavior: "smooth", block: "center"});
  }
}
function restoreInputPosition() {
  const inputElement = document.querySelector("input");
  
  if (inputElement) {
    window.scrollBy({
      top: inputPosition.top - inputElement.getBoundingClientRect().top,
      left: inputPosition.left - inputElement.getBoundingClientRect().left,
      behavior: "smooth"
    });
  }
}
const inputElement = document.querySelector("input");
inputElement.addEventListener("focus", checkAndFocusInput);
inputElement.addEventListener("blur", restoreInputPosition);
    </script>';
}

?>


<script>
    function pullNotification_codea13(id, message, colors, sec){
        var timeme = sec * 1000;

        var dataVal = document.querySelector("#"+id).dataset.value;
        if(dataVal=="pullNotification"){
            setTimeout(() => {
                document.querySelector("#"+id).style.top="50%";
                document.querySelector("#"+id).style.left="50%";
                document.querySelector("#"+id).style.transform="translate(-50%, -50%)";
                document.querySelector("#"+id).style.opacity="1";
                document.querySelector("#"+id+"notificationmessage").style.backgroundColor=colors;
                document.querySelector("#"+id+"notificationmessage").innerHTML=message;
                document.querySelector("#"+id+"masterCover").style.display="block";
            }, 50);

            setTimeout(() => {
                document.querySelector("#"+id).style.top="-200px";
                document.querySelector("#"+id).style.left="50%";
                document.querySelector("#"+id).style.transform="translate(-50%, -50%)";
                document.querySelector("#"+id).style.opacity="1";
                document.querySelector("#"+id+"masterCover").style.display="none";
            }, timeme);
        }else if(dataVal=="boxNotification"){
            var topspace = document.querySelector("#"+id+"masterCover").dataset.value;
            setTimeout(() => {
                document.querySelector("#"+id).style.top=topspace;
                document.querySelector("#"+id).style.opacity="1";
                document.querySelector("#"+id).style.backgroundColor=colors;
                document.querySelector("#"+id).innerHTML=message;
                document.querySelector("#"+id+"masterCover").style.display="block";
            }, 50);

            setTimeout(() => {
                document.querySelector("#"+id).style.top="-200px";
                document.querySelector("#"+id).style.opacity="1";
                document.querySelector("#"+id+"masterCover").style.display="none";
            }, timeme);
        }

    }



/* this is checking if input is focused or not so it can be brought to view and back to where it should be for a nice user experience */

</script>