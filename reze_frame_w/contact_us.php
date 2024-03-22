<?php
function contact_us(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="CONTACT US";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["subTitleColor"])){
        $arr["subTitleColor"]="black";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#f0f0ff";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["name"])){
        $arr["name"]="name";
    }
    if(!isset($arr["email"])){
        $arr["email"]="email";
    }
    if(!isset($arr["message"])){
        $arr["message"]="message";
    }
    if(!isset($arr["formTo"])){
        $arr["formTo"]="unknown.php";
    }
    if(!isset($arr["content"])){
        $arr["content"]='<h1 style="font-size:40px; color: brown">Get In Touch</h1>
        <h1 style="font-size:22px; color:purple">Ask how we can help you.</h1>
        <p style="margin-bottom:25px">Expect a response from us in no more than 48 hours. Send another email or give us a call if you have not heard back from us after 48 hours.
        </p>

        <h1 style="font-size:22px; color:purple">Are you confused?</h1>
        <p>Ask us any questions you have regarding our competition. We are here to assist you.</p>

        <h1 style="font-size:22px">We are bringing exciting offers to your door.</h1>';
    }

    if(!isset($arr["subTitle"])){
        $arr["subTitle"]="Let Us Start A Conversation";
    }


    echo '
    <style>
        .firstblock{
            width:100%;
            min-height:250px;
            background-image:url("'.$arr["image"].'");
            background-position:center;
            display:flex;
            align-items:center;
            justify-content:center;

        }
        .contactus_main_title{
            width:fit-content;
            font-size:34px;
            font-weight:bolder;
            color:'.$arr["titleColor"].';
            background-color:#00000050;
            padding:20px;
        }
        .secondblock{
            min-height:400px;
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap:10px;
            background-color:'.$arr["backgroundColor"].';
        }
        .secondblock>*{
            background-color:white;
            display:flex;
            padding:0 40px;
            background-color:'.$arr["backgroundColor"].';
        }
        .firstblock1{
            flex-direction:column;
        }
        .firstblock1>*{
            margin-bottom:15px;
        }

        
        .contact-form{
            width:100%;
            max-width:350px;
        }
        .contact-form>*{
            margin-bottom:20px;
        }
        .input{
            box-sizing:border-box;
            width:100%;
            height:40px;
            padding:5px 10px;
            border-radius:4px;
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
            top: 50px;
            opacity: 1;
        }
        

       
        
        .hidden{
            display: none;
        }
        

        @media (max-width:680px){
            .secondblock{
                min-height:400px;
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
                gap:10px;
            }
        }

        @media (max-width:440px){
            .secondblock{
                min-height:400px;
                display:grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap:10px;
            }
        }


        </style>

        <div class="failedpop" id="failedpop">Wrong input of credentials</div>
        <div class="successpop" id="emailsentpop" style="background-color: #7bffd3">Email sent</div>


        <div class="firstblock">
            <div class="contactus_main_title">'.$arr["title"].'</div>
        </div>

        <h1 style="padding:40px; text-align:center; font-size:30px;background-color:'.$arr["backgroundColor"].'; font:weight:bolder; color:'.$arr["subTitleColor"].'">'.$arr["subTitle"].'</h1>

        <div class="secondblock">
            <div class="firstblock1">'.$arr["content"].'</div>


            <div class="form_master_block">

                <form class="contact-form"  id="form">
                    <h1 style="color:purple;">Send Us A Message</h1>
                    <div>
                        <label> Full Name:<label>
                        <input id="name" name="'.$arr["name"].'" class="input" type="text" required>
                    </div>

                    <div>
                        <label> Your Email:<label>
                        <input id="email" name="'.$arr["email"].'" class="input" type="email" required>
                    </div>

                    <div>
                        <label> Your Message:<label>
                        <textarea style="height:120px; resize:none" id="message" name="'.$arr["message"].'" class="input" required></textarea>
                    </div>

                    <button id="loginbutton" style="height:50px; background-color:purple; width:100%; cursor:pointer; color:white; padding:10px;">Submit</button>

                </form>
            </div>

        </div>




        <script>
    
    var imageloader = \'<img  style="background:white; position:relative; top:2px; height:29px;  border-radius:50%; object-fit:contain" src="reze_frame_w/assets/Spinner-1s-200px.svg" alt="loading...">\';
    
    var form = document.querySelector("#form");
    
    form.addEventListener("submit", createaccountnow);

    function createaccountnow(event){
        
        
        $("input").blur();
        document.querySelector("#loginbutton").innerHTML=imageloader;
        document.querySelector("#loginbutton").setAttribute("type", "button");
        event.preventDefault();

        var name = document.querySelector("#name").value;
        var email = document.querySelector("#email").value;
        var message = document.querySelector("#message").value;

        
        $.ajax({
            url: "'.$arr["formTo"].'",
            method: "POST",
            data: {
                name: name,
                email: email,
                message: message,
            },
            success: function(res){


                if(res=="successful"){
                    setTimeout(() => {
                        document.querySelector("#emailsentpop").classList.add("popnow1");
                        document.querySelector("#emailsentpop").innerHTML="Message Sent";
                        document.querySelector("#name").value=null;
                        document.querySelector("#email").value=null;
                        document.querySelector("#message").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#emailsentpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="Failed";
                        document.querySelector("#newPassword").value=null;
                        document.querySelector("#oldPassword").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }


                if(res=="data lost"){
                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="Poor connection";
                        document.querySelector("#newPassword").value=null;
                        document.querySelector("#oldPassword").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    //document.querySelector("#userpglink").click();
                }

            },
            error: function(res){
                setTimeout(() => {
                        document.querySelector("#failedpop").classList.add("popnow1");
                        document.querySelector("#failedpop").innerHTML="Bad network";
                        document.querySelector("#newPassword").value=null;
                        document.querySelector("#oldPassword").value=null;
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#failedpop").classList.remove("popnow1");
                        document.querySelector("#loginbutton").innerHTML="submit";
                        document.querySelector("#loginbutton").setAttribute("type", "submit");
                    }, 3000);
            }
        })

    }

    </script>


    ';
}
?>