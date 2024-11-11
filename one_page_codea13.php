<?php 
    function one_page_codea13(array $arr){
        if(!isset($arr["homePage"])){
            $arr["homePage"]="index.php";
        }
        if(!isset($arr["loaderColor"])){
            $arr["loaderColor"]="#ffffffa0";
        }
        
    echo '
    <style>
        .codeaSpecialLoader{
            width:100px;
            height:100px;
            background-color:white;
            border-radius:50%;
            overflow:hidden;
            border:5px dotted #b0b0bb;
            display:flex;
            justify-content:center;
            align-items:center;
            animation: eben 5s linear infinite;
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
        
    </style>
        <div id="castyHouseLoader" style="position:fixed; display:none; justify-content:center; align-items:center; width:100vw; height:100vh; left:0; z-index:99999; top:0; background-color:'.$arr["loaderColor"].'">
                <div class="codeaSpecialLoader">
                    <div style="width:100%; height:20%; background-color:#f0f0ff; text-align:center">LOADING</div>
                </div>
        </div>


        <div id="castyHouseLoaderError" style="position:fixed;  display:none; justify-content:center; align-items:center; width:100vw; height:100vh; left:0; z-index:99999; top:0; background-color:#ffffffa0">
            <div style="background-color:black; color:white; font-weight:bolder; width:fit-content; border-radius:50px; padding:20px;">Network Error</div>
        </div>
    <div id="codea13MasterBody"></div>
    
    <script>
    document.documentElement.style.scrollBehavior="auto";
    function codea13SupperLoader(pageToLoad) {
        document.querySelector("#castyHouseLoader").style.display = "flex";
        document.querySelector("#castyHouseLoaderError").style.display = "none";
        $.ajax({
            url: pageToLoad,
            type: "GET",
            dataType: "html",
            async: true,
            success: function(response) {
                $("#codea13MasterBody").html(response);
                window.scrollTo(0,0);
                document.querySelector("#castyHouseLoader").style.display = "none";
                document.querySelector("#castyHouseLoaderError").style.display = "none";
            },
            error: function(xhr, status, error) {
                /* Handle error */
                console.error("Error loading page:", error);
                document.querySelector("#castyHouseLoader").style.display = "none";
                document.querySelector("#castyHouseLoaderError").style.display = "flex";

                setTimeout(()=>{
                    document.querySelector("#castyHouseLoaderError").style.display = "none";
                }, 3000)
            }
        });
    }

    window.onload = function() {
        codea13SupperLoader("'.$arr["homePage"].'");
    };
    </script>';
    }
    ?>