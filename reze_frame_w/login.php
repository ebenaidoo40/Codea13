<?php


function login(array $arr){

    if(!isset($arr["number"])){
        $arr["number"]=2;
    }
    if(!isset($arr["type"])){
        $arr["type"]="";
    }


    echo '
    <style>
        .form{
            max-width:350px;
            position:relative;
            top:0px;
            left:50%;
            transform:translateX(-50%);
            padding:40px;
            border-radius: 50px 1px;
        }

        .formlabel{
            position:relative;
            background-color:white;
            width:fit-content;
            padding:0px 10px;
            top:7px;
            left:15px;
        }

        .forminput{
            box-sizing:border-box;
            width:100%;
            height:40px;
            padding: 5px 20px;
            border:1px solid black;
            border-radius:5px;
            box-shadow: 0 0 3px 1px #ccc;
            margin-bottom:15px;
        }
    </style>
    
    
    <form class="form">';
        echo '<h1 style="text-align:center; font-size:25px; font-weight:bold">log in</h1>
            <div style="height:5px; background-color:purple;margin: 10px 0px"></div>';
            $logintypebag = ["email","password"];
        for($i=0; $i<sizeof($logintypebag); $i++){
            echo '
                <label class="formlabel" for="">'.$logintypebag[$i].'</label><br>
                <input class="forminput" type="'.$logintypebag[$i].'" name="'.$logintypebag[$i].'"><br>
            ';
        }

        echo '<br><button class="forminput" style="cursor:pointer">submit</button>';

    echo '</form>';
}



?>