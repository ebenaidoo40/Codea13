<?php
function contact_us(array $arr){
    if(!isset($arr["title"])){
        $arr["title"]="CONTACT US";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr[""])){
        $arr[""]="";
    }
    if(!isset($arr[""])){
        $arr[""]="";
    }
    echo '
    <style>
        .firstblock{
            width:100%;
            min-height:400px;
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
        }
        .secondblock>*{
            background-color:white;
            display:flex;
            padding:0 40px;
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

        <div class="firstblock">
            <div class="contactus_main_title">'.$arr["title"].'</div>
        </div>

        <h1 style="padding:40px; text-align:center; font-size:30px; font:weight:bolder;">Let Us Start A Conversation</h1>

        <div class="secondblock">
            <div class="firstblock1">
                <h1 style="font-size:40px; color: brown">Get In Touch</h1>
                <h1 style="font-size:22px; color:purple">Ask how we can help you.</h1>
                <p style="margin-bottom:25px">Expect a response from us in no more than 48 hours. Send another email or give us a call if you haven not heard back from us after 48 hours.
                </p>

                <h1 style="font-size:22px; color:purple">Are you confuse?</h1>
                <p>Ask us any questions you have regarding our competition. We are here to assist you.</p>

                <h1 style="font-size:22px">We are bringing exciting entertainment to your door. Every talent will be captured soon.</h1>
                
            </div>


            <div class="form_master_block">
                <form class="contact-form">
                    <h1 style="color:purple;">Send Us A Message</h1>
                    <div>
                        <label> Full Name:<label>
                        <input class="input" type="text">
                    </div>

                    <div>
                        <label> Your Email:<label>
                        <input class="input" type="email">
                    </div>

                    <div>
                        <label> Your Message:<label>
                        <input class="input" type="email">
                    </div>

                    <button style="background-color:purple; width:100%; color:white; padding:10px;">Submit</button>

                </form>
            </div>

        </div>


    ';
}
?>