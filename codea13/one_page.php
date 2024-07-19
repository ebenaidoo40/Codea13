<?php 
    function one_page(){
    echo '
        <div id="castyHouseLoader" style="position:fixed; display:none; justify-content:center; align-items:center; width:100vw; height:100vh; left:0; z-index:99999; top:0; background-color:#ffffffa0">
            <img src="codea13/assets/Spinner-1s-200px.svg" alt="" srcset="">
        </div>

        <div id="castyHouseLoaderError" style="position:fixed;  display:none; justify-content:center; align-items:center; width:100vw; height:100vh; left:0; z-index:99999; top:0; background-color:#ffffffa0">
            <div style="background-color:black; color:white; font-weight:bolder; width:fit-content; border-radius:50px; padding:20px;">Network Error</div>
        </div>
    <div id="codea13MasterBody"></div>
    
    <script>
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
                window.scrollTo({top:0});
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
        codea13SupperLoader("'.$_SESSION["CastyHouseRefreshStay"].'");
    };
    </script>';
    }
    ?>