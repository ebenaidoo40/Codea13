<?php 
    function subOnePage_codea13(array $arr){
        if(!isset($arr["homePage"])){
            $arr["homePage"]="index.php";
        }
        if(!isset($arr["loaderColor"])){
            $arr["loaderColor"]="#ffffffa0";
        }
        
    echo '
        <div id="castyHouseLoader2" style="position:absolute; display:none; justify-content:center; align-items:center; width:100%; height:100%; left:0; z-index:5; top:0; background-color:'.$arr["loaderColor"].'">
            <img src="codea13/assets/Spinner-1s-200px.svg" alt="" srcset="">
        </div>

        <div id="castyHouseLoaderError2" style="position:absolute;  display:none; justify-content:center; align-items:center; width:100%; height:100%; left:0; z-index:5; top:0; background-color:'.$arr["loaderColor"].'">
            <div style="background-color:black; color:white; font-weight:bolder; width:fit-content; border-radius:50px; padding:20px;">Network Error</div>
        </div>
    <div id="codea13MasterBody2"></div>
    
    <script>
    function codea13SupperLoader2(pageToLoad) {
        document.querySelector("#castyHouseLoader2").style.display = "flex";
        document.querySelector("#castyHouseLoaderError2").style.display = "none";

        $.ajax({
            url: pageToLoad,
            type: "GET",
            dataType: "html",
            async: true,
            success: function(response) {
                $("#codea13MasterBody2").html(response);
                window.scrollTo(0,0);
                document.querySelector("#castyHouseLoader2").style.display = "none";
                document.querySelector("#castyHouseLoaderError2").style.display = "none";
            },
            error: function(xhr, status, error) {
                /* Handle error */
                console.error("Error loading page:", error);
                document.querySelector("#castyHouseLoader2").style.display = "none";
                document.querySelector("#castyHouseLoaderError2").style.display = "flex";

                setTimeout(()=>{
                    document.querySelector("#castyHouseLoaderError2").style.display = "none";
                }, 3000)
            }
        });
    }

        codea13SupperLoader2("'.$arr["homePage"].'");
    </script>';
    }
    ?>