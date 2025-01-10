<?php
/**
 * @param array{
 * title,
 * sutTitle,
 * popMessageTopSpace,
 * titleColor,
 * subTitleColor,
 * image,
 * backgroundColor,
 * name,
 * email,
 * message,
 * formTo,
 * content
 * } $arr
 */

function contact_us_codea13(array $arr)
{
    if (!isset($arr["title"])) {
        $arr["title"] = "CONTACT US";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "white";
    }
    if (!isset($arr["subTitleColor"])) {
        $arr["subTitleColor"] = "black";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#f0f0ff";
    }
    if (!isset($arr["image"])) {
        $arr["image"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["name"])) {
        $arr["name"] = "name";
    }
    if (!isset($arr["email"])) {
        $arr["email"] = "email";
    }
    if (!isset($arr["message"])) {
        $arr["message"] = "message";
    }
    if (!isset($arr["formTo"])) {
        $arr["formTo"] = "unknown.php";
    }
    if (!isset($arr["content"])) {
        $arr["content"] = '<h1 style="font-size:40px; color: brown">Get In Touch</h1>
        <h1 style="font-size:22px; color:purple">Ask how we can help you.</h1>
        <p style="margin-bottom:25px">Expect a response from us in no more than 48 hours. Send another email or give us a call if you have not heard back from us after 48 hours.
        </p>

        <h1 style="font-size:22px; color:purple">Are you confused?</h1>
        <p>Ask us any questions you have regarding our competition. We are here to assist you.</p>

        <h1 style="font-size:22px">We are bringing exciting offers to your door.</h1>';
    }

    if (!isset($arr["subTitle"])) {
        $arr["subTitle"] = "Let Us Start A Conversation";
    }
    if (!isset($arr["popMessageTopSpace"])) {
        $arr["popMessageTopSpace"] = "50px";
    }


    echo '
    <style>
        .firstblock'.$GLOBALS["firstcard"].'{
            width:100%;
            min-height:250px;
            background-image:url("' . $arr["image"] . '");
            background-position:center;
            display:flex;
            align-items:center;
            justify-content:center;

        }
        .contactus_main_title'.$GLOBALS["firstcard"].'{
            width:fit-content;
            font-size:34px;
            font-weight:bolder;
            color:' . $arr["titleColor"] . ';
            background-color:#00000050;
            padding:20px;
        }
        .secondblock'.$GLOBALS["firstcard"].'{
            min-height:400px;
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap:10px;
            background-color:' . $arr["backgroundColor"] . ';
        }
        .secondblock'.$GLOBALS["firstcard"].'>*{
            background-color:white;
            display:flex;
            padding:0 40px;
            background-color:' . $arr["backgroundColor"] . ';
        }
        .firstblock1'.$GLOBALS["firstcard"].'{
            flex-direction:column;
        }
        .firstblock1'.$GLOBALS["firstcard"].'>*{
            margin-bottom:15px;
        }

        
        .contact-form'.$GLOBALS["firstcard"].'{
            width:100%;
            max-width:350px;
        }
        .contact-form'.$GLOBALS["firstcard"].'>*{
            margin-bottom:20px;
        }
        .input'.$GLOBALS["firstcard"].'{
            box-sizing:border-box;
            width:100%;
            height:40px;
            padding:5px 10px;
            border-radius:4px;
        }

        .failedpop'.$GLOBALS["firstcard"].'{
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
        
        .successpop'.$GLOBALS["firstcard"].'{
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
        
        
        .popnow'.$GLOBALS["firstcard"].'{
            top: 0;
            opacity: 1;
        }
        
        .popnow1'.$GLOBALS["firstcard"].'{
            top: '.$arr["popMessageTopSpace"].';
            opacity: 1;
        }

        .codeaSpecialLoadersub'.$GLOBALS["firstcard"].'{
            width:20px;
            height:20px;
            background-color:white;
            border-radius:50%;
            overflow:hidden;
            border:5px dotted #909099;
            animation: eben'.$GLOBALS["firstcard"].' 5s linear infinite;
            position:absolute;
        }

        @-webkit-keyframes eben'.$GLOBALS["firstcard"].' {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes eben'.$GLOBALS["firstcard"].'{
            0%{
                transform:rotate(0deg);
            }
            100%{
                transform:rotate(360deg);
            }
        }
        

       
        
        .hidden{
            display: none;
        }
        

        @media (max-width:680px){
            .secondblock'.$GLOBALS["firstcard"].'{
                min-height:400px;
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
                gap:10px;
            }
        }

        @media (max-width:440px){
            .secondblock'.$GLOBALS["firstcard"].'{
                min-height:400px;
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap:10px;
            }
        }


        </style>

        <div class="failedpop'.$GLOBALS["firstcard"].'" id="failedpop'.$GLOBALS["firstcard"].'">Wrong input of credentials</div>
        <div class="successpop'.$GLOBALS["firstcard"].'" id="emailsentpop'.$GLOBALS["firstcard"].'" style="background-color: #7bffd3">Email sent</div>


        <div class="firstblock'.$GLOBALS["firstcard"].'">
            <div class="contactus_main_title'.$GLOBALS["firstcard"].'">' . $arr["title"] . '</div>
        </div>

        <h1 style="padding:40px; text-align:center; font-size:30px;background-color:' . $arr["backgroundColor"] . '; font-weight:bolder; color:' . $arr["subTitleColor"] . '">' . $arr["subTitle"] . '</h1>

        <div class="secondblock'.$GLOBALS["firstcard"].'">
            <div class="firstblock1'.$GLOBALS["firstcard"].'">' . $arr["content"] . '</div>


            <div class="form_master_block'.$GLOBALS["firstcard"].'">

                <form class="contact-form'.$GLOBALS["firstcard"].'"  id="form'.$GLOBALS["firstcard"].'">
                    <h1 style="color:purple;">Send Us A Message</h1>
                    <div>
                        <label> Full Name:<label>
                        <input id="name'.$GLOBALS["firstcard"].'" name="' . $arr["name"] . '" class="input'.$GLOBALS["firstcard"].'" type="text" required>
                    </div>

                    <div>
                        <label> Your Email:<label>
                        <input id="email'.$GLOBALS["firstcard"].'" name="' . $arr["email"] . '" class="input'.$GLOBALS["firstcard"].'" type="email" required>
                    </div>

                    <div>
                        <label> Your Message:<label>
                        <textarea style="height:120px; resize:none" id="message'.$GLOBALS["firstcard"].'" name="' . $arr["message"] . '" class="input'.$GLOBALS["firstcard"].'" required></textarea>
                    </div>

                    <button id="loginbutton'.$GLOBALS["firstcard"].'" style="height:50px; background-color:purple; width:100%; cursor:pointer; color:white; padding:10px; display:flex; justify-content:center; align-items:center;">Submit</button>

                </form>
            </div>

        </div>




        <script>
    
    /* var imageloader = \'<img  style="background:white; position:relative; top:2px; height:29px;  border-radius:50%; object-fit:contain" src="vendor/rezenebe/codea13/src/assets/Spinner-1s-200px.svg" alt="loading...">\'; */
    var imageloader'.$GLOBALS["firstcard"].' = "<div class=\'codeaSpecialLoadersub'.$GLOBALS["firstcard"].'\'></div>";
    var form'.$GLOBALS["firstcard"].' = document.querySelector("#form'.$GLOBALS["firstcard"].'");
    form'.$GLOBALS["firstcard"].'.addEventListener("submit", createaccountnow'.$GLOBALS["firstcard"].');

    function createaccountnow'.$GLOBALS["firstcard"].'(event){
        
        $("input").blur();
        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").innerHTML=imageloader'.$GLOBALS["firstcard"].';
        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").setAttribute("type", "button");
        event.preventDefault();

        var name = document.querySelector("#name'.$GLOBALS["firstcard"].'").value;
        var email = document.querySelector("#email'.$GLOBALS["firstcard"].'").value;
        var message = document.querySelector("#message'.$GLOBALS["firstcard"].'").value;

        
        $.ajax({
            url: "' . $arr["formTo"] . '",
            method: "POST",
            data: {
                name: name,
                email: email,
                message: message,
            },
            success: function(res){


                if(res=="successful"){
                    setTimeout(() => {
                        document.querySelector("#emailsentpop'.$GLOBALS["firstcard"].'").classList.add("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#emailsentpop'.$GLOBALS["firstcard"].'").innerHTML="Message Sent";
                        document.querySelector("#name'.$GLOBALS["firstcard"].'").value=null;
                        document.querySelector("#email'.$GLOBALS["firstcard"].'").value=null;
                        document.querySelector("#message'.$GLOBALS["firstcard"].'").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#emailsentpop'.$GLOBALS["firstcard"].'").classList.remove("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").innerHTML="submit";
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.add("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").innerHTML="Failed";
                        document.querySelector("#newPassword'.$GLOBALS["firstcard"].'").value=null;
                        document.querySelector("#oldPassword'.$GLOBALS["firstcard"].'").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.remove("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").innerHTML="submit";
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").setAttribute("type", "submit");
                    }, 3000);
                }


                if(res=="data lost"){
                    setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.add("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").innerHTML="Poor connection";
                        document.querySelector("#newPassword'.$GLOBALS["firstcard"].'").value=null;
                        document.querySelector("#oldPassword'.$GLOBALS["firstcard"].'").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.remove("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").innerHTML="submit";
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    
                }

            },
            error: function(res){
                setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.add("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").innerHTML="Bad network";
                        document.querySelector("#newPassword'.$GLOBALS["firstcard"].'").value=null;
                        document.querySelector("#oldPassword'.$GLOBALS["firstcard"].'").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop'.$GLOBALS["firstcard"].'").classList.remove("popnow1'.$GLOBALS["firstcard"].'");
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").innerHTML="submit";
                        document.querySelector("#loginbutton'.$GLOBALS["firstcard"].'").setAttribute("type", "submit");
                    }, 3000);
            }
        })

    }

    </script>


    ';
    $GLOBALS["firstcard"]++;
}