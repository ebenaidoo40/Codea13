<?php
function contact_us2_codea13(array $arr){
    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, nam sunt quaerat provident unde totam iusto officiis! Beatae quam, aspernatur sunt facere esse eum nulla hic cumque maxime eos blanditiis.";
    if(!isset($arr["formTo"])){
        $arr["formTo"]="";
    }
    if(!isset($arr["title"])){
        $arr["title"]="Get In Touch";
    }
    if(!isset($arr["content"])){
        $arr["content"]=$lorem;
    }
    if(!isset($arr["injectSuccess"])){
        $arr["injectSuccess"]="";
    }
    if(!isset($arr["injectFailure"])){
        $arr["injectFailure"]="";
    }
    if(!isset($arr["injectError"])){
        $arr["injectError"]="";
    }
    if(!isset($arr["background"])){
        $arr["background"]="#f0f0ff";
    }
    if(!isset($arr["formBackgroundColor"])){
        $arr["formBackgroundColor"]="white";
    }
    if(!isset($arr["inputBackgroundColor"])){
        $arr["inputBackgroundColor"]="#f0f0ff";
    }
    if(!isset($arr["placeholderColor"])){
        $arr["placeholderColor"]="green";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="#101E41";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="green";
    }
    if(!isset($arr["buttonBackgroundColor"])){
        $arr["buttonBackgroundColor"]="#152043";
    }
    if(!isset($arr["buttonColor"])){
        $arr["buttonColor"]="white";
    }
    echo '
    <style>
    .mainbk' . $GLOBALS["firstcard"] . '{
        min-height:300px;
        display:flex;
        padding:10px 8%;
        box-sizing:border-box;
        background:'.$arr["background"].';
        gap:40px;
    }
    .leftbk' . $GLOBALS["firstcard"] . '{
        flex:1;
        background:'.$arr["background"].';
    }
    .form' . $GLOBALS["firstcard"] . '{
        flex:1;
        background:'.$arr["formBackgroundColor"].';
        box-shadow: 0 0 13px 4px #656565;
        min-height:200px;
        min-width:40%;
        padding:30px;
        border-radius:10px;
        display:flex;
        flex-direction:column;
        gap:20px
    }
    .form' . $GLOBALS["firstcard"] . ' input{
        background-color:'.$arr["inputBackgroundColor"].';
        border:none;
        height:35px;
        border-radius:4px;
        padding: 0 8px;
    }
    .form' . $GLOBALS["firstcard"] . ' input::placeholder, .form' . $GLOBALS["firstcard"] . ' textarea::placeholder{
        color:'.$arr["placeholderColor"].';
    }
    .form' . $GLOBALS["firstcard"] . ' textarea{
        background-color:'.$arr["inputBackgroundColor"].';
        border:none;
        height:120px;
        border-radius:4px;
        padding: 8px;
        resize:none;
    }
    .form' . $GLOBALS["firstcard"] . ' input:focus, .form' . $GLOBALS["firstcard"] . ' textarea:focus{
        outline:none;
        border:none;
    }

    .submitbutton' . $GLOBALS["firstcard"] . '{
        align-self:flex-end; 
        width:150px; 
        padding:8px; 
        border:none; 
        border-radius:5px; 
        background-color:'.$arr["buttonBackgroundColor"].'; 
        color:'.$arr["buttonColor"].';
        display:flex;
        justify-content:center;
        align-items:center;
        height:40px;
        cursor:pointer;
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

    @media (max-width:600px){
        .mainbk' . $GLOBALS["firstcard"] . '{
            flex-wrap:wrap;
        }
    }
        
    </style>

    <div class="mainbk' . $GLOBALS["firstcard"] . '">
        <div class="leftbk' . $GLOBALS["firstcard"] . '">
            <h1 style="font-size:45px; color:'.$arr["titleColor"].';">'.$arr["title"].'</h2>
            <div style="line-height:2; color:'.$arr["textColor"].'">'.$arr["content"].'</div>
        </div>


        <form id="form' . $GLOBALS["firstcard"] . '" class="form' . $GLOBALS["firstcard"] . '">
            <input id="name' . $GLOBALS["firstcard"] . '" name="name' . $GLOBALS["firstcard"] . '" placeholder="Name" required>
            <input id="email' . $GLOBALS["firstcard"] . '" name="email' . $GLOBALS["firstcard"] . '" type="email" placeholder="email" required>
            <textarea id="message' . $GLOBALS["firstcard"] . '" name="message' . $GLOBALS["firstcard"] . '" placeholder="Name" required></textarea>
            <button id="loginbutton' . $GLOBALS["firstcard"] . '" class="submitbutton' . $GLOBALS["firstcard"] . '">Submit</button>
        </form>
    </div>

    <script>
    var imageloader' . $GLOBALS["firstcard"] . ' = "<div class=\'codeaSpecialLoadersub' . $GLOBALS["firstcard"] . '\'></div>";
    var form' . $GLOBALS["firstcard"] . ' = document.querySelector("#form' . $GLOBALS["firstcard"] . '");
    form' . $GLOBALS["firstcard"] . '.addEventListener("submit", createaccountnow' . $GLOBALS["firstcard"] . ');

    function createaccountnow' . $GLOBALS["firstcard"] . '(event){
        
        $("input").blur();
        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").innerHTML=imageloader' . $GLOBALS["firstcard"] . ';
        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "button");
        event.preventDefault();

        var name = document.querySelector("#name' . $GLOBALS["firstcard"] . '").value;
        var email = document.querySelector("#email' . $GLOBALS["firstcard"] . '").value;
        var message = document.querySelector("#message' . $GLOBALS["firstcard"] . '").value;

        
        $.ajax({
            url: "' . $arr["formTo"] . '",
            method: "POST",
            data: {
                name: name,
                email: email,
                message: message,
            },
            success: function(res){


                if(res=="success"){
                    setTimeout(() => {
                        form' . $GLOBALS["firstcard"] . '.reset();
                        '.$arr["injectSuccess"].'
                    }, 50);

                    setTimeout(() => {
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").innerHTML="submit";
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    '.$arr["injectFailure"].'
                    setTimeout(() => {
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").innerHTML="submit";
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                    }, 3000);
                }


                if(res=="data lost"){
                    '.$arr["injectFailure"].'
                    setTimeout(() => {
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").innerHTML="submit";
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                    }, 3000);
                }else{
                    
                }

            },
            error: function(res){
                    '.$arr["injectError"].'
                    setTimeout(() => {
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").innerHTML="submit";
                        document.querySelector("#loginbutton' . $GLOBALS["firstcard"] . '").setAttribute("type", "submit");
                    }, 3000);
            }
        })

    }

    </script>
    ';
    $GLOBALS["firstcard"]++;
}
?>