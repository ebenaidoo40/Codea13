<?php
function form_codea13(array $arr)
{

    if (isset($_GET["listVal"])) {
        $listVal = $_GET["listVal"];
    } else {
        $listVal = "";
    }

    if (!isset($arr["formTo"])) {
        $arr["formTo"] = "sign_up.php";
    }
    if (!isset($arr["title"])) {
        $arr["title"] = "SIGN UP";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "slateblue";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#f0f0ffaa";
    }
    if (!isset($arr["titlesub"])) {
        $arr["titlesub"] = "Proceeding with this form confirms your agreement to all our terms and conditions";
    }

    if (!isset($arr["buttonBackgroundColor"])) {
        $arr["buttonBackgroundColor"] = "#5996f0";
    }
    if (!isset($arr["buttonColor"])) {
        $arr["buttonColor"] = "white";
    }
    if (!isset($arr["labelColor"])) {
        $arr["labelColor"] = "#5996f0";
    }
    if (!isset($arr["callBack"])) {
        $arr["callBack"] = "index.php";
    }
    if (!isset($arr["customSuccessMessage"])) {
        $arr["customSuccessMessage"] = "Successful";
    }

    if (!isset($arr["cautionColor"])) {
        $arr["cautionColor"] = "slateblue";
    }

    if (!isset($arr["cautionCheckTextColor"])) {
        $arr["cautionCheckTextColor"] = "red";
    }

    if (!isset($arr["popMessageTopSpace"])) {
        $arr["popMessageTopSpace"] = "50px";
    }
    if (!isset($arr["redirectTime"])) {
        $arr["redirectTime"] = "4000";
    }
    if (!isset($arr["onePage"])) {
        $arr["onePage"] = "off";
    }
    if (!isset($arr["inject"])) {
        $arr["inject"] = "";
    }



    echo '
<style>

    .accountform{
        width: 70%;
        margin: 20px auto;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(min(80%,250px), 1fr));  /* --app-formh replaced with min(80%, 250px) and it works fine*/
        gap: 10px;
        padding: 10px;
        margin-bottom: 80px;
        background-color: ' . $arr["backgroundColor"] . ';
        box-shadow: 0 0 7px 1px #333 ;
    }
    
    .formheader{
        width: 70%;
        margin: 20px auto;
        padding: 10px;
        background-color: ' . $arr["backgroundColor"] . ';
        box-shadow: 0 0 7px 1px #333;
        margin-bottom:10px;
    }

    form>*{
        display: flex;
        flex-direction: column;
    }

    input{
        border: 1px solid black;
    }

    
input, select{
    box-sizing:border-box;
    height: 40px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #33333350;
    outline: black;
    border-radius: 5px;
    background-color: white;
}
select{
    padding:2px;
}

.maintelNum{
    display:flex;
    position:relative;
}


.form{
    position: relative;
    margin: 0 auto;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    max-width: 400px;
    padding:0 40px;
}

a{
    text-decoration: none;
}

form a {
    color: #5996f0;
    font-weight: bold;
    cursor:pointer;
}

input:focus, select:focus{
    outline: black;
    border: 1px solid black;
    box-shadow: 1px 1px 5px 0px rgb(121, 121, 150);
}

/* this css set background of the input auto fill to white */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active{
    box-shadow: 0 0 0 300px white inset !important;
}

button{
    height: 40px;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: ' . $arr["buttonBackgroundColor"] . ';
    border: 1px solid ' . $arr["buttonBackgroundColor"] . ';
    border-radius: 5px;
    color: white;
    display:flex;
    justify-content:center;
    align-items:center;
}

label{
    margin-left: 20px;  
}

.marginleft_zero{
    margin-left: 2px;
}



.checkboxdiv input{
    height: 100%;
    padding-bottom: 0;
}

.checkboxdiv label{
    padding-left: 2px;
    color: #5996f0;
}

.checkboxdiv input:focus{
    box-shadow: none;
}

.passwordlabel, .emaillabel, .masterlabel{
    position: relative;
    font-size: 13px;
    top: 0px;
    width: fit-content;
    transition: all 0.4s;
    color: ' . $arr["labelColor"] . ';
    font-weight: bold;
}

.originallabel{
    top: 7px;
    background-color: white;
    color: purple;
    font-weight: bold;
    padding: 0 6px;
}

input[type=\'password\']{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 0.125em;
}



.submitanimation_padding_to_submit_button{
    padding:2px;
}


.failedpop{
    position: fixed;
    top: -200px;
    width: 100%;
    background-color: #ffc1c1;
    color: red;
    font-weight: bold;
    text-align: center;
    padding: 20px;
    box-sizing:border-box;
    opacity: 0;
    transition: all 1s;
    z-index: 9999;
    left:0;
}

.successpop{
    position: fixed;
    box-sizing:border-box;
    top: -200px;
    width: 100%;
    background-color: #d7f8ed;
    color: rgb(0, 0, 0);
    font-weight: bold;
    text-align: center;
    padding: 20px;
    opacity: 0;
    transition: all 1s;
    z-index: 9999;
    left:0;
}


.popnow{
    top: '.$arr["popMessageTopSpace"].';
    opacity: 1;
    z-index: 9999;
    left:0;
}

.popnow1{
    top: '.$arr["popMessageTopSpace"].';
    opacity: 1;
    z-index: 9999;
    left:0;
}

.hidden{
    display: none;
}

.codeaSpecialLoadersub{
    width:20px;
    height:20px;
    background-color:white;
    border-radius:50%;
    overflow:hidden;
    border:5px dotted #909099;
    animation: eben 5s linear infinite;
    position:absolute;
}

@-webkit-keyframes eben {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes eben{
    0%{
        transform:rotate(0deg);
    }
    100%{
        transform:rotate(360deg);
    }
}

.specialLabelCode{
    display:flex; 
    justify-content:center; 
    align-items:center;
    position:absolute; 
    width:fit-content; 
    margin:0px; 
    background-color:' . $arr["backgroundColor"] . '; 
    top:7px; 
    color:' . $arr["labelColor"] . ';
    left:5px; 
    border-radius:5px; 
    height:26px; 
    padding:0px 5px;
}


    

    @media (max-width:600px) {
        .accountform{
            width: 85%;
        }
        .formheader{
            width:85%;
        }
        input,select{
            height:45px;
        }
        .specialLabelCode{
            height:31px;
        }
        
    }
</style>


        
<a id="arrayLinkFromRes" href=""><div class="failedpop"></div></a>
<div class="failedpop" id="failedpop" style="background-color: #ffc1c1">Used Email</div>
<div class="successpop" id="successpop" style="background-color: #98fb98">Used Email</div>';
if($arr["onePage"]=="on"){
    echo '<div onclick="codea13SupperLoader(\'' . $arr["callBack"] . '\')" class="failedpop" id="homelink">s</div>';
}else{
    echo '<a href="' . $arr["callBack"] . '"><div class="failedpop" id="homelink">s</div></a>';
}

echo '
<div class="formheader">
<div style=" text-align:center; font-size:24px; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title"] . '</div>
<div style="text-align: center; padding: 0 20px; font-weight:bold; color:' . $arr["labelColor"] . '">' . $arr["titlesub"] . '</div>
</div> 
   
<form id="accountform" class="accountform" enctype="multipart/form-data">';


    $numberOfElements = array_keys($arr);
    for ($i = 0; $i < sizeof($arr); $i++) {
        if (is_array($arr[$numberOfElements[$i]])) {
            if (!isset($arr[$numberOfElements[$i]]["type"])) {
                $arr[$numberOfElements[$i]]["type"] = "text";
            }
            if (!isset($arr[$numberOfElements[$i]]["name"])) {
                $arr[$numberOfElements[$i]]["name"] = "name" . $i;
            }
            if (!isset($arr[$numberOfElements[$i]]["cautionTick"])) {
                $arr[$numberOfElements[$i]]["cautionTick"] = "on";
            }
            if (!isset($arr[$numberOfElements[$i]]["label"])) {
                $arr[$numberOfElements[$i]]["label"] = $arr[$numberOfElements[$i]]["name"];
            }
            if (!isset($arr[$numberOfElements[$i]]["id"])) {
                $arr[$numberOfElements[$i]]["id"] = "input_id" . $i;
            }
            if (!isset($arr[$numberOfElements[$i]]["required"])) {
                $arr[$numberOfElements[$i]]["required"] = null;
                $requriedHTML_builder = null;
            } else {
                if ($arr[$numberOfElements[$i]]["required"] == "required") {
                    $requriedHTML_builder = "<span style=\"color: red\">*</span>";
                } else {
                    $requriedHTML_builder = "";
                    $arr[$numberOfElements[$i]]["required"] = null;
                }
            }



            if ($arr[$numberOfElements[$i]]["type"] == "password") {
                if(!isset($arr[$numberOfElements[$i]]["accept"])){
                    $accept="";
                }else{
                    $accept = $arr[$numberOfElements[$i]]["accept"];
                }
                echo '<div>
                <label id="' . $arr[$numberOfElements[$i]]["id"] . 'label" class="masterlabel" for="' . $arr[$numberOfElements[$i]]["id"] . '">' . $arr[$numberOfElements[$i]]["label"] . $requriedHTML_builder . '</label>
                <input class="masterinput password showpassword' . $i . '" type="' . $arr[$numberOfElements[$i]]["type"] . '" name="' . $arr[$numberOfElements[$i]]["name"] . '" id="' . $arr[$numberOfElements[$i]]["id"] . '" pattern=".{6,}"  title="Six or more characters" placeholder="6 characters or more" '.$accept.' ' . $arr[$numberOfElements[$i]]["required"] . '/>

                <div class="checkboxdiv" style="display: flex;">
                    <input class="showpassword" type="checkbox" name="showpassword" id="showpassword' . $i . '"/>
                    <label id="showpasswordlabel' . $i . '" for="showpassword' . $i . '" class="marginleft_zero" style="color:' . $arr["labelColor"] . '">Show ' . $arr[$numberOfElements[$i]]["label"] . '</label>
                </div>
                </div>
                ';
            } else if ($arr[$numberOfElements[$i]]["type"] == "textarea") {
                if(!isset($arr[$numberOfElements[$i]]["accept"])){
                    $accept="";
                }else{
                    $accept = $arr[$numberOfElements[$i]]["accept"];
                }
                echo '<div>
                <label id="' . $arr[$numberOfElements[$i]]["id"] . 'label" class="masterlabel" for="' . $arr[$numberOfElements[$i]]["id"] . '">' . $arr[$numberOfElements[$i]]["label"] . $requriedHTML_builder . '</label>
                <textarea style="resize:none; height:150px; padding:8px; box-sizing:border-box; rows="6" '.$accept.' class="masterinput" name="' . $arr[$numberOfElements[$i]]["name"] . '" id="' . $arr[$numberOfElements[$i]]["id"] . '" ' . $arr[$numberOfElements[$i]]["required"] . '></textarea>
                </div>
                ';
            } else if ($arr[$numberOfElements[$i]]["type"] == "tel") {
                include "vendor/rezenebe/codea13/src/countries_with_codes_codea13.php";
            } else if ($arr[$numberOfElements[$i]]["name"] == "nationality") {
                include_once "vendor/rezenebe/codea13/src/countries_codea13.php";
            } else if (isset($arr[$numberOfElements[$i]][0]) && $arr[$numberOfElements[$i]][0] == "list") {
                $requriedHTML_builder = "<span style=\"color: red\">*</span>";

                echo '
            <div>
            <label id="' . $arr[$numberOfElements[$i]][1] . 'label" class="masterlabel" for="' . $arr[$numberOfElements[$i]][1] . '"> ' . $arr[$numberOfElements[$i]][4] . $requriedHTML_builder . '</label>
                <select id="' . $arr[$numberOfElements[$i]][1] . '" name="' . $arr[$numberOfElements[$i]][1] . '" class="form-control masterinput" required>
                    <option value=""></option>';

                for ($k = 5; $k < sizeof($arr[$numberOfElements[$i]]) - 6; $k++) {
                    if ($listVal == $arr[$numberOfElements[$i]][$k]) {
                        $selected = "selected";
                    } else {
                        $selected = "";
                    }
                    echo '<option value="' . $arr[$numberOfElements[$i]][$k] . '" ' . $selected . '>' . $arr[$numberOfElements[$i]][$k] . '</option>';
                }
                echo '
                </select>';

                if ($arr[$numberOfElements[$i]][2] != null) {
                    echo '
                <p style="margin-top:-12px; color: ' . $arr["cautionColor"] . '; border:1px solid ' . $arr["labelColor"] . '; border-top:none; padding:5px">' . $arr[$numberOfElements[$i]][2] . '</p>
                <div style="height:10px;"></div>';
                
                if($arr[$numberOfElements[$i]][3]=="on"){
                    echo '<div class="checkboxdiv" style="display: flex;">
                            <input type="checkbox" name="showpassword' . $i . '" id="showpassword' . $i . '" required/>
                            <label id="showpasswordlabel' . $i . '" for="showpassword' . $i . '" class="marginleft_zero" style="color:' . $arr["cautionCheckTextColor"] . '; font-weight:bold;">I have read the note</label>
                        </div>';
                }

                }
                echo '</div>';
            } else if (isset($arr[$numberOfElements[$i]]["caution"])) {
                if(!isset($arr[$numberOfElements[$i]]["accept"])){
                    $accept="";
                }else{
                    $accept = $arr[$numberOfElements[$i]]["accept"];
                }
                $requriedHTML_builder = "<span style=\"color: red\">*</span>";
                echo '<div>
                <label id="' . $arr[$numberOfElements[$i]]["id"] . 'label" class="masterlabel" for="' . $arr[$numberOfElements[$i]]["id"] . '">' . $arr[$numberOfElements[$i]]["label"] . $requriedHTML_builder . '</label>
                <input class="masterinput" type="' . $arr[$numberOfElements[$i]]["type"] . '" name="' . $arr[$numberOfElements[$i]]["name"] . '" id="' . $arr[$numberOfElements[$i]]["id"] . '" '.$accept.' required />
                <p style="margin-top:-12px; color: ' . $arr["cautionColor"] . '; border:1px solid ' . $arr["labelColor"] . '; border-top:none; padding:5px">' . $arr[$numberOfElements[$i]]["caution"] . '</p>
                <div style="height:10px;"></div>';

                if($arr[$numberOfElements[$i]]["cautionTick"]=="on"){
                    echo '<div class="checkboxdiv" style="display: flex;">
                            <input type="checkbox" name="showpassword' . $i . '" id="showpassword' . $i . '" required/>
                            <label id="showpasswordlabel' . $i . '" for="showpassword' . $i . '" class="marginleft_zero" style="color:' . $arr["cautionCheckTextColor"] . '; font-weight:bold;">I have read the note</label>
                        </div>';
                }
                
        
            echo '</div>';
            } else {
                if(!isset($arr[$numberOfElements[$i]]["accept"])){
                    $accept="";
                }else{
                    $accept = $arr[$numberOfElements[$i]]["accept"];
                }
                echo '
            <div class="formchild">
                <label id="' . $arr[$numberOfElements[$i]]["id"] . 'label" class="masterlabel" for="' . $arr[$numberOfElements[$i]]["id"] . '">' . $arr[$numberOfElements[$i]]["label"] . $requriedHTML_builder . '</label>
                <input class="masterinput" '.$accept.' type="' . $arr[$numberOfElements[$i]]["type"] . '" name="' . $arr[$numberOfElements[$i]]["name"] . '" id="' . $arr[$numberOfElements[$i]]["id"] . '" ' . $arr[$numberOfElements[$i]]["required"] . '/>
            </div>';
            }
        }
    }


    echo '         

        <button id="loginbutton" class="loginbutton" type="submit" style=" cursor:pointer; color:' . $arr["buttonColor"] . '">Submit</button>
  
    </form>


  




<svg style="position:absolute; top:0; right:0; width:20vw; height:20vw; z-index:-4; opacity:0.2" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"><defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop></linearGradient></defs><path fill="' . $arr["backgroundColor"] . '" d="M8.2,-12.2C14,-10.9,24.3,-15.4,27.8,-14.4C31.3,-13.3,27.9,-6.7,24.4,-2C21,2.7,17.5,5.4,14.7,7.7C12,10,9.9,11.8,7.6,18C5.3,24.2,2.6,34.7,0.9,33.1C-0.9,31.6,-1.8,18.1,-4.4,12.1C-7.1,6.1,-11.6,7.7,-13.4,6.9C-15.2,6.2,-14.3,3.1,-17.7,-2C-21.1,-7,-28.8,-14.1,-28.1,-16.7C-27.4,-19.3,-18.2,-17.5,-12.1,-18.7C-6.1,-19.8,-3,-23.9,-0.9,-22.3C1.2,-20.8,2.4,-13.5,8.2,-12.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>              </svg>
<svg style="position:absolute; top:0; width:100vw; height:100%; z-index:-4; opacity:0.2" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"> <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="' . $arr["backgroundColor"] . '" d="M11.4,-13.4C16.6,-9.2,24,-7.4,29.6,-1.4C35.3,4.6,39.2,14.7,34.8,17.9C30.4,21.1,17.6,17.3,8.1,19.6C-1.5,22,-7.8,30.5,-13.8,31.2C-19.9,32,-25.5,25,-26.3,18C-27,10.9,-22.8,3.8,-19.7,-1.7C-16.6,-7.2,-14.6,-11.1,-11.5,-15.6C-8.4,-20.2,-4.2,-25.4,-0.6,-24.7C3.1,-24.1,6.2,-17.5,11.4,-13.4Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path></svg>


<script>

/*var imageloader = "<img  style=\'height:29px; margin-top:-5px; background-color:white;  border-radius:50%; object-fit:contain\' src=\'vendor/rezenebe/codea13/src/assets/Spinner-1s-200px.svg\' alt=\'loading...\'>"; */
var imageloader = "<div class=\'codeaSpecialLoadersub\'></div>";
var form = document.querySelector("#accountform");
form.addEventListener(\'submit\', createaccountnow);

    function createaccountnow(event){
        $("input").blur();
        document.querySelector("#loginbutton").innerHTML=imageloader;
        document.querySelector("#loginbutton").setAttribute("type", "button");
        event.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: "' . $arr["formTo"] . '",
            method: "POST",
            data: formData,
            contentType:false,
            processData:false,
            cache:false,
            success: function(res){

                if(res==null){
                    res="Developer did not set response before terminating an operation.";
                }else{}

                if(res.includes("successl@@k")){
                    res = res.split("l@@k");
                    document.querySelector("#arrayLinkFromRes").setAttribute("href", res[1]);

                    setTimeout(() => {
                        document.querySelector("#arrayLinkFromRes").click();
                    }, 100);
                }
                else if(res=="successful"){
                    setTimeout(() => {
                        document.querySelector("#successpop").classList.add("popnow");
                        document.querySelector("#successpop").innerHTML="' . $arr["customSuccessMessage"] . '";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#successpop").classList.remove("popnow");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);

                    setTimeout(() => {
                        document.querySelector("#homelink").click();
                    }, '.$arr["redirectTime"].');
                }else if(res=="success"){
                    setTimeout(() => {
                        document.querySelector("#successpop").classList.add("popnow");
                        document.querySelector("#successpop").innerHTML="' . $arr["customSuccessMessage"] . '";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#successpop").classList.remove("popnow");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);

                    setTimeout(() => {
                        '.$arr["inject"].'
                    }, '.$arr["redirectTime"].');
                }
                else{
                
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow");
                        document.querySelector("#failedpop").innerHTML=res;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }

            },
            error: function(res){
                setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow");
                        document.querySelector("#failedpop").innerHTML="No Connection to Sever";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
            }
        })

    }
    

    /* a function to move label of an input when input is focused */
    
    var labelbag = document.querySelectorAll(".masterlabel");
    var inputbag = document.querySelectorAll(".masterinput");
    function moveA_label(){

        for(var i=0; i<labelbag.length; i++){

            var labelelement = document.querySelector("#" + labelbag[i].id);
            var inputelement = document.querySelector("#" + inputbag[i].id);

            if(inputelement===document.activeElement){
                labelelement.classList.add("originallabel");
            }else{
                if(inputelement.value==""){
                    labelelement.classList.remove("originallabel");
                }else{}
            }

        }
    }

    for(var j=0; j<labelbag.length; j++){
        myelement = document.querySelector("#" + inputbag[j].id);
        myelement.addEventListener("focus", moveA_label);
        myelement.addEventListener("focusout", moveA_label);

    }


    
// a function that shows and hidden password
if(document.querySelectorAll(".password")){
    
    var allpasswordlink = document.querySelectorAll(".password");
    var allpasswordshow = document.querySelectorAll(".showpassword");

    for(var iii=0; iii<allpasswordlink.length; iii++){
        
        allpasswordshow[iii].addEventListener("change", function(e) {
            if(e.target.checked){
                var myclassy = e.target.id;
                
                document.querySelectorAll("."+ myclassy)[0].setAttribute("type","text");
            }
            else{
                var myclassy = e.target.id;
                document.querySelectorAll("."+ myclassy)[0].setAttribute("type","password");
            }
            
        })
    }
}else{}




// a function that shows and hidden password
if(document.querySelectorAll(".telInputOnly")){
    
    var codeDropDown = document.querySelectorAll(".allcountriesCode");
    var allTelInput = document.querySelectorAll(".telInputOnly");

    for(var ii=0; ii<allTelInput.length; ii++){
        
        codeDropDown[ii].addEventListener("change", function(e) {
            var myValval= e.target.value;
            
            if(myValval!=""){
                var myclassy = e.target.id;
                document.querySelectorAll("."+ myclassy)[0].value=myValval;
                document.querySelectorAll("."+ myclassy)[0].click();
            }
            else{
                var myclassy = e.target.id;
                document.querySelectorAll("."+ myclassy)[0].value=myValval;
            }
            
        })
    }
}else{}

function updateInputValue(inputId) {
    var input = document.querySelector("#"+inputId);
        var valueWithPlus = input.value.slice(1);
        input.value = "+" + valueWithPlus;
      }

</script>';
}