<?php
function subscribe_codea13(array $arr){
    if(!isset($arr["formTo"])){
        $arr["formTo"]="";
    }
    if(!isset($arr["email"])){
        $arr["email"]="email";
    }
    if(!isset($arr["logo"])){
        $arr["logo"]="vendor/rezenebe/codea13/src/images/eben.webp";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#01796f";
    }
    if(!isset($arr["inputType"])){
        $arr["inputType"]="email";
    }
    if(!isset($arr["placeholder"])){
        $arr["placeholder"]="Enter your email";
    }
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="#1BC001";
    }
    if(!isset($arr["buttonColor"])){
        $arr["buttonColor"]="white";
    }
    if(!isset($arr["buttonHoverColor"])){
        $arr["buttonHoverColor"]="white";
    }
    if(!isset($arr["inputBackgroundColor"])){
        $arr["inputBackgroundColor"]="#007971";
    }
    if(!isset($arr["innerBackgroundColor"])){
        $arr["innerBackgroundColor"]="#016960";
    }

    if(!isset($arr["shadow"])){
        $arr["shadow"]="transparent";
    }
    if(!isset($arr["placeholderColor"])){
        $arr["placeholderColor"]="black";
    }
    if(!isset($arr["note"])){
        $arr["note"]="Subscribe Now";
    }
    if(!isset($arr["buttonName"])){
        $arr["buttonName"]="Subscribe";
    }

    if(!isset($arr["buttonBackgroundHoverColor"])){
        $arr["buttonBackgroundHoverColor"]="#1BC001";
    }

    if(!isset($arr["injectSuccess"])){
        $arr["injectSuccess"]="alert('submission was successful')";
    }
    if(!isset($arr["injectFailure"])){
        $arr["injectFailure"]="alert('submission failed')";
    }
    if(!isset($arr["injectError"])){
        $arr["injectError"]="alert('submission encountered an Error. Mostly happen due to improper connection to submission file or network problem')";
    }
    echo '
        <style>
            .subscribeBlock' . $GLOBALS["firstcard"] . '{
                background-color: '.$arr["backgroundColor"].';
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }
            .innerbk' . $GLOBALS["firstcard"] . '{
                width: 80%;
                border: 1px solid white;
                box-shadow: 0 0 2px 3px '.$arr["shadow"].';
                display: flex;
                justify-content: space-between;
                padding: 10px 20px;
                background-color: '.$arr["innerBackgroundColor"].';
                flex-wrap: wrap;
            }
            .susimage' . $GLOBALS["firstcard"] . '{
                width: 60px;
                height: 60px;
            }

            .image' . $GLOBALS["firstcard"] . '{
                width: 100%;
                height: 100%;
            }
            .innerFormBk' . $GLOBALS["firstcard"] . '{
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 20px;
                flex-wrap: wrap;
            }
            #subscribe_codea13' . $GLOBALS["firstcard"] . ' input::placeholder{
                color: '.$arr["placeholderColor"].';
            }
            .form' . $GLOBALS["firstcard"] . '{
                display: flex;
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .codeaSpecialLoadersub' . $GLOBALS["firstcard"] . '{
                width:20px;
                height:20px;
                background-color:white;
                border-radius:50%;
                overflow:hidden;
                border:5px dotted #909099;
                animation: eben' . $GLOBALS["firstcard"] . ' 5s linear infinite;
                position:absolute;
            }
            .subscribeButton' . $GLOBALS["firstcard"] . '{
                padding: 8px 55px; 
                cursor:pointer; 
                background-color:'.$arr["buttonBackgroundColor"].';
                height:35px; 
                display:flex; 
                justify-content:center;
                align-items:center; 
                border-radius:5px; 
                color:'.$arr["buttonColor"].';
            }
                .subscribeButton' . $GLOBALS["firstcard"] . ':hover{
                background-color:'.$arr["buttonBackgroundHoverColor"].';
                color:'.$arr["buttonHoverColor"].';
            }

        @-webkit-keyframes eben' . $GLOBALS["firstcard"] . ' {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes eben' . $GLOBALS["firstcard"] . '{
            0%{
                transform:rotate(0deg);
            }
            100%{
                transform:rotate(360deg);
            }
        }
        </style>

        <div class="subscribeBlock' . $GLOBALS["firstcard"] . '">
            <div class="innerbk' . $GLOBALS["firstcard"] . '">
                <div class="susimage' . $GLOBALS["firstcard"] . '"><img class="image' . $GLOBALS["firstcard"] . '" src="'.$arr["logo"].'" alt=""></div>
                <div class="innerFormBk' . $GLOBALS["firstcard"] . '">
                    <div style="font-weight:bold; color:white">'.$arr["note"].'</div>
                    <form id="subscribe_codea13' . $GLOBALS["firstcard"] . '" class="form' . $GLOBALS["firstcard"] . '" >
                        <input id="subscribedEmailCodea13' . $GLOBALS["firstcard"] . '" style="background-color: '.$arr["inputBackgroundColor"].'; padding: 0 8px; height:35px; border:1px solid white; color:white" type="'.$arr["inputType"].'" placeholder="'.$arr["placeholder"].'" required>
                        <button id="subscribebutton' . $GLOBALS["firstcard"] . '" class="subscribeButton' . $GLOBALS["firstcard"] . '" >'.$arr["buttonName"].'</button>
                    </form>
                </div>
            </div>
        </div>


    
    <script>
    
    var imageloader = "<div class=\'codeaSpecialLoadersub' . $GLOBALS["firstcard"] . '\'></div>";
    var form = document.querySelector("#subscribe_codea13' . $GLOBALS["firstcard"] . '");
    form.addEventListener("submit", createaccountnow);

    function createaccountnow(event){
        
        $("input").blur();
        document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").innerHTML=imageloader;
        document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "button");
        event.preventDefault();

        var email = document.querySelector("#subscribedEmailCodea13' . $GLOBALS["firstcard"] . '").value;

        
        $.ajax({
            url: "' . $arr["formTo"] . '",
            method: "POST",
            data: {
                '.$arr["email"].': email,
            },
            success: function(res){
                if(res=="success"){
                    '.$arr["injectSuccess"].'
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").innerHTML="Subscribe";
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                    form.reset();
                }else{
                    '.$arr["injectFailure"].'
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").innerHTML="Subscribe";
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                }
                
            },
            error: function(res){
                    '.$arr["injectError"].'
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").innerHTML="Subscribe";
                    document.querySelector("#subscribebutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
            }
        })

    }

    </script>
    
    ';

    $GLOBALS["firstcard"]++;
}

?>