<?php

function login(array $arr)
{
    if (!isset($arr["email_name"])) {
        $arr["email_name"] = "email";
    }
    if (!isset($arr["password_email"])) {
        $arr["password_name"] = "password";
    }

    if (!isset($arr["loginSuccessLink"])) {
        $arr["loginSuccessLink"] = "";
    }

    if (!isset($arr["resetSuccessMsg"])) {
        $arr["resetSuccessMsg"] = "Email sent";
    }
    if (!isset($arr["loginFormTo"])) {
        $arr["loginFormTo"] = "unknownlogin.php";
    }
    if (!isset($arr["resetFormTo"])) {
        $arr["resetFormTo"] = "reset.php";
    }
    if (!isset($arr["buttonBackgroundColor"])) {
        $arr["buttonBackgroundColor"] = "#5996f0";
    }
    if (!isset($arr["buttonColor"])) {
        $arr["buttonColor"] = "white";
    }
    if (!isset($arr["clickHereText"])) {
        $arr["clickHereText"] = "You have not registered for this yet?";
    }
    if (!isset($arr["clickHereLink"])) {
        $arr["clickHereLink"] = "";
    }

    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#00000000";
    }
    if (!isset($arr["labelColor"])) {
        $arr["labelColor"] = "black";
    }
    if (!isset($arr["linkColor"])) {
        $arr["linkColor"] = "#5996f0";
    }
    if (!isset($arr["popMessageTopSpace"])) {
        $arr["popMessageTopSpace"] = "50px";
    }
    if (!isset($arr["onePage"])) {
        $arr["onePage"] = "off";
    }

    echo '
    <style>
    input{
        border: 1px solid black;
    }

    input, select{
    height: 40px;
    padding: 0 10px;
    margin-bottom: 10px;
    border: 1px solid black;
    outline: black;
    border-radius: 5px;
    background-color: white;
}

.failedpop{
    position: fixed;
    top: -200px;
    width: 100%;
    background-color: #ffc1c1;
    color: red;
    font-weight: bold;
    text-align: center;
    padding: 20px 10px;
    opacity: 0;
    transition: all 1s;
    z-index: 1;
    box-sizing:border-box;
}

.successpop{
    position: fixed;
    top: -200px;
    width: 100%;
    background-color: #d7f8ed;
    color: rgb(0, 0, 0);
    font-weight: bold;
    text-align: center;
    padding: 20px 10px;
    opacity: 0;
    transition: all 1s;
    z-index: 1;
    box-sizing:border-box;
}


.popnow{
    top: 0;
    opacity: 1;
}

.popnow1{
    top: '.$arr["popMessageTopSpace"].';
    opacity: 1;
}


.form{
    position: relative;
    margin: 0 auto;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    margin-top: 50px;
    max-width: 350px;
    padding:10px 40px;
    background-color:' . $arr["backgroundColor"] . ';
}

a{
    text-decoration: none;
}

form a {
    color: ' . $arr["linkColor"] . ';
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
    color: ' . $arr["buttonColor"] . ';
    cursor:pointer;
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
    color: gray;
    font-weight: bold;
    color:' . $arr["labelColor"] . ';
}

.originallabel{
    top: 7px;
    background-color: white;
    color: ' . $arr["buttonBackgroundColor"] . ';
    font-weight: bold;
    padding: 0 6px;
}

input[type=\'password\']{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 0.125em;
}



.submitanimation_padding_to_submit_button{
    padding:2px
}




.line{
    height: 5px;
    background-color: ' . $arr["buttonBackgroundColor"] . ';
    margin-bottom: 20px;
}




.hidden{
    display: none;
}


</style>


<div class="failedpop" id="failedpop">Wrong input of credentials</div>
<div class="successpop" id="emailsentpop" style="background-color: #7bffd3">' . $arr["resetSuccessMsg"] . '</div>
<a href="' . $arr["loginSuccessLink"] . '"><div class="failedpop" id="userpglink">userpg link</div></a>


<form id="form" class="form" >



<div style="font-size: 24px;  text-align:center; font-weight:bold; margin-bottom:20px; color:' . $arr["buttonBackgroundColor"] . '" id="form_heading">Log in</div>
    <div class="line"></div>

    <label id="emaillabel" class="emaillabel" for="' . $arr["email_name"] . '">Email</label>
    <input type="email" id="email" class="logincredential" name="' . $arr["email_name"] . '"  required>

    <label id="passwordlabel" class="passwordlabel" for="' . $arr["password_name"] . '">Password</label>
    <input type="password" name="' . $arr["password_name"] . '" id="password" required>


    <div class="checkboxdiv" style="display:flex; align-items: start;">
        <label id="showpasswordlabel" for="showpassword" class="marginleft_zero" style="margin-left:0px; color:' . $arr["linkColor"] . '"><input type="checkbox" name="showpassword" id="showpassword" style="height:auto; position:relative; vertical-align: middle; top: 3px; "> Show password</label>
    </div>
    

    <button id="loginbutton" class="loginbutton" type="submit">Log in</button>

    <div style="font-weight:bold; color: ' . $arr["linkColor"] . '; text-align:center; margin-bottom:20px; cursor:pointer" id="forgot_password">forgot password ?</div>';
    if($arr["onePage"]=="on"){
        echo '<div style="font-weight:bold; text-align:center; color:' . $arr["labelColor"] . '">' . $arr["clickHereText"] . ' <a onclick ="codea13SupperLoader(\''.$arr["clickHereLink"].'\')" >Click here </a> to start now</div>';
    }else{
        echo '<div style="font-weight:bold; text-align:center; color:' . $arr["labelColor"] . '">' . $arr["clickHereText"] . ' <a href="' . $arr["clickHereLink"] . '">Click here </a> to start now</div>';
    }
    
echo '</form>


<svg style="position:absolute; top:0; right:0; width:20vw; height:20vw; z-index:-4; opacity:0.2" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"><defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop></linearGradient></defs><path fill="' . $arr["buttonBackgroundColor"] . '" d="M8.2,-12.2C14,-10.9,24.3,-15.4,27.8,-14.4C31.3,-13.3,27.9,-6.7,24.4,-2C21,2.7,17.5,5.4,14.7,7.7C12,10,9.9,11.8,7.6,18C5.3,24.2,2.6,34.7,0.9,33.1C-0.9,31.6,-1.8,18.1,-4.4,12.1C-7.1,6.1,-11.6,7.7,-13.4,6.9C-15.2,6.2,-14.3,3.1,-17.7,-2C-21.1,-7,-28.8,-14.1,-28.1,-16.7C-27.4,-19.3,-18.2,-17.5,-12.1,-18.7C-6.1,-19.8,-3,-23.9,-0.9,-22.3C1.2,-20.8,2.4,-13.5,8.2,-12.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>              </svg>
<svg style="position:absolute; top:0; width:100vw; height:100%; z-index:-4; opacity:0.2" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"> <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"><stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop><stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="' . $arr["buttonBackgroundColor"] . '" d="M11.4,-13.4C16.6,-9.2,24,-7.4,29.6,-1.4C35.3,4.6,39.2,14.7,34.8,17.9C30.4,21.1,17.6,17.3,8.1,19.6C-1.5,22,-7.8,30.5,-13.8,31.2C-19.9,32,-25.5,25,-26.3,18C-27,10.9,-22.8,3.8,-19.7,-1.7C-16.6,-7.2,-14.6,-11.1,-11.5,-15.6C-8.4,-20.2,-4.2,-25.4,-0.6,-24.7C3.1,-24.1,6.2,-17.5,11.4,-13.4Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path></svg>



<script>
    
    var imageloader = "<img  style=\'background:white; position:relative; top:-5px; height:29px;  border-radius:50%; object-fit:contain\' src=\'codea13/assets/Spinner-1s-200px.svg\' alt=\'loading...\'>";
    var form = document.querySelector("#form");
    form.addEventListener("submit", createaccountnow);

    function createaccountnow(event){
        $("input").blur();
        document.querySelector("#loginbutton").innerHTML=imageloader;
        document.querySelector("#loginbutton").setAttribute("type", "button");
        event.preventDefault();

        var email = document.querySelector("#email").value;
        var password = document.querySelector("#password").value;

        if(toggleInput=="reset"){
        $.ajax({
            url: "' . $arr["loginFormTo"] . '",
            method: "POST",
            data: {
                email: email,
                password: password,
            },
            success: function(res){

                if(res==null){
                    res="Developer did not set response before terminating an operation.";
                }else{}

                if(res=="successful"){
                    document.querySelector("#userpglink").click();
                }else{
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML=res;
                        document.querySelector("#password").value=null;
                    }, 50);
    
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }
            },
            error: function(res){
                setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="No Connection to Server";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
            }
        })

    }else{
        $.ajax({
            url: "' . $arr["resetFormTo"] . '",
            method: "POST",
            data: {
                email:email
            },
            success: function(res2){

                if(res2==null){
                    res2="Developer did not set response before terminating an operation.";
                }else{}

                if(res2=="successful"){

                setTimeout(() => {
                        document.querySelector("#emailsentpop").classList.add("popnow1");
                        document.querySelector("#password").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#emailsentpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="Reset password";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                        masterResetAfterUsingResetPassword();
                    }, 3000);
   
                }
                /* this control is to check if an error occurred as a result of no internet connection to email server */
                else if(res2.includes("Fatal error")){
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="No or weak internet connection";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="Reset password";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }
                else{
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML=res2;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="Reset password";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }

            },

            
            error: function(res2){

                setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="No Connection to Server";
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="Reset password";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);

            }
        })
    }


}



    /* a function that shows and hidden password */
if(document.querySelector("#showpassword")){
    var form_show_password = document.querySelector("#showpassword");

    form_show_password.addEventListener("change", function () {
        if(form_show_password.checked){
            document.querySelector("#password").setAttribute("type","text");
            if(document.querySelector(".passpasspassme")){
                document.querySelector(".passpasspassme").setAttribute("type","text");
            }
        }

        else{
            document.querySelector("#password").setAttribute("type","password");
            if(document.querySelector(".passpasspassme")){
                document.querySelector(".passpasspassme").setAttribute("type","password");
            }
        }
    })
}else{}


/* a function to move label of an input when input is focused for login page and forgot password page */
if(document.querySelector("#emaillabel")){
    var passwordLabel=document.querySelector("#passwordlabel");
    var emailLabel=document.querySelector("#emaillabel");
    var email = document.querySelector("#email");
    var password = document.querySelector("#password");

    function move_label(){
        if(email===document.activeElement){
            emailLabel.classList.add("originallabel");
        }else{
            if(email.value==""){
                emailLabel.classList.remove("originallabel");
            }else{}
        }

        if(password===document.activeElement){
            passwordLabel.classList.add("originallabel");
        }else{
            if(password.value==""){
                passwordLabel.classList.remove("originallabel");
            }else{}
        }

    }
    email.addEventListener("focus", move_label);
    email.addEventListener("focusout", move_label);
    password.addEventListener("focus", move_label);
    password.addEventListener("blur", move_label);
}else{}



/* this function is for moving the choose subject in payment.php file when it is active */
if(document.querySelector("#choosesubjectlabel")){
    var choosesubjectlabel = document.querySelector("#choosesubjectlabel");
    var choosesubject = document.querySelector("#choosesubject");

    function move_choose_subject_label(){
        if(choosesubject===document.activeElement){
            choosesubjectlabel.classList.add("originallabel");
        }else{
            if(choosesubject.value==""){
                choosesubjectlabel.classList.remove("originallabel");
            }else{}
        }
    }

    choosesubject.addEventListener("focus", move_choose_subject_label);
    choosesubject.addEventListener("focusout", move_choose_subject_label);
}else{}





if(document.querySelector("#forgot_password")){
/*when forgot password is clicked */
var forgotPassword = document.querySelector("#forgot_password");
var toggleInput = "reset";
forgotPassword.addEventListener("click", function(){

    if(toggleInput=="reset"){
    document.querySelector("#password").classList.add("hidden");
    document.querySelector("#passwordlabel").classList.add("hidden");
    document.querySelector("#showpasswordlabel").classList.add("hidden");
    document.querySelector("#password").removeAttribute("required");

    document.querySelector("#showpassword").classList.add("hidden");
    document.querySelector("#form_heading").innerText="Reset Password";
    document.querySelector("#forgot_password").innerText="Log in";
    document.querySelector("#loginbutton").innerText="Reset password";


    toggleInput="login";
    }else{
        document.querySelector("#password").classList.remove("hidden");
        document.querySelector("#passwordlabel").classList.remove("hidden");
        document.querySelector("#showpasswordlabel").classList.remove("hidden");
        document.querySelector("#password").setAttribute("required", "");

        document.querySelector("#showpassword").classList.remove("hidden");
        document.querySelector("#form_heading").innerText="Log in";
        document.querySelector("#forgot_password").innerText="Forgot password?";
        document.querySelector("#loginbutton").innerText="Log in";
    
    toggleInput="reset"
    }

})

}else{}

    
</script>';
}