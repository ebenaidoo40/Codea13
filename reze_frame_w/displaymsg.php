<?php
    function displayMsg(array $arr){
        if(!isset($arr["heading"])){
            $arr["heading"]="Completed";
        }
        if(!isset($arr["content"])){
            $arr["content"]="We will contact you soon";
        }

        if(!isset($arr["link"])){
            $arr["link"]="";
        }
        echo '

        <style>
            .displayinfobk{
                width:min(500px, 80%);
                display:flex;
                flex-direction:column;
                margin:auto auto;
                position: fixed;
                left:50%;
                top:50%;
                transform:translate(-50%, -50%);
                min-height:300px;
                background-color:#f0f0ff00;
                box-shadow: 0 0 15px 2px #334;
                border:5px solid #f0f0ff;
                justify-content:center;
                align-items:center;
                align-self:center;
                animation: displayInfo 3s ease-in-out 0s infinite;
            }

            @keyframes displayInfo{
                0% {border-radius:5% 50%; box-shadow: 0 0 50px 2px #00aaee; }
                20% {border-radius:50% 10%; box-shadow: 0 0 50px 2px brown; }
                40% {border-radius: 5%; box-shadow: 0 0 50px 2px red; }
                60% {border-radius: 20%; box-shadow: 0 0 50px 2px purple; }
                100% {border-radius: 5% 50%; box-shadow: 0 0 50px 2px #00aaee;}  
            }


            .realmsg{
                align-text:center;
                font-size:35px;
                font-weight:bold;
                color:green;
                animation: textbounce 5s linear 0s infinite;
            }

            @keyframes textbounce{
                0% {color:green}
                40% {color:purple}
                80% {color:#00aaee}  
                100%{color:green}
            }


        </style>
        
            <div class="displayinfobk">
                <div class="realmsg">'.$arr["heading"].'</div>
                <div style="margin-bottom:30px">'.$arr["content"].'</div>
                <a href="'.$arr["link"].'"  style="padding:10px 20px; background-color:green; color:white; position:relative; z-index:9999; cursor:pointer; box-shadow: 0 0 5px 4px #334"><span>Alright</span></a>
            </div>';
    }
?>