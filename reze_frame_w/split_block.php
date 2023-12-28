<?php

function split_block(array $arr){

    if(!isset($arr["badgeColor"])){
        $arr["badgeColor"]="purple";
    }
    if(!isset($arr["quoteColor"])){
        $arr["quoteColor"]="black";
    }

    $openquotes = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M4.58341 17.3211C3.55316 16.2274 3 15 3 13.0103C3 9.51086 5.45651 6.37366 9.03059 4.82318L9.92328 6.20079C6.58804 8.00539 5.93618 10.346 5.67564 11.822C6.21263 11.5443 6.91558 11.4466 7.60471 11.5105C9.40908 11.6778 10.8312 13.159 10.8312 15C10.8312 16.933 9.26416 18.5 7.33116 18.5C6.2581 18.5 5.23196 18.0095 4.58341 17.3211ZM14.5834 17.3211C13.5532 16.2274 13 15 13 13.0103C13 9.51086 15.4565 6.37366 19.0306 4.82318L19.9233 6.20079C16.588 8.00539 15.9362 10.346 15.6756 11.822C16.2126 11.5443 16.9156 11.4466 17.6047 11.5105C19.4091 11.6778 20.8312 13.159 20.8312 15C20.8312 16.933 19.2642 18.5 17.3312 18.5C16.2581 18.5 15.232 18.0095 14.5834 17.3211Z" fill="'.$arr["quoteColor"].'"></path></svg>';
    $closequote = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M19.4167 6.67891C20.4469 7.77257 21.0001 9 21.0001 10.9897C21.0001 14.4891 18.5436 17.6263 14.9695 19.1768L14.0768 17.7992C17.4121 15.9946 18.0639 13.6539 18.3245 12.178C17.7875 12.4557 17.0845 12.5533 16.3954 12.4895C14.591 12.3222 13.1689 10.8409 13.1689 9C13.1689 7.067 14.7359 5.5 16.6689 5.5C17.742 5.5 18.7681 5.99045 19.4167 6.67891ZM9.41669 6.67891C10.4469 7.77257 11.0001 9 11.0001 10.9897C11.0001 14.4891 8.54359 17.6263 4.96951 19.1768L4.07682 17.7992C7.41206 15.9946 8.06392 13.6539 8.32447 12.178C7.78747 12.4557 7.08452 12.5533 6.39539 12.4895C4.59102 12.3222 3.16895 10.8409 3.16895 9C3.16895 7.067 4.73595 5.5 6.66895 5.5C7.742 5.5 8.76814 5.99045 9.41669 6.67891Z" fill="'.$arr["quoteColor"].'"></path></svg>';

    $badge2='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"><path d="M12 10C14.2091 10 16 8.20914 16 6 16 3.79086 14.2091 2 12 2 9.79086 2 8 3.79086 8 6 8 8.20914 9.79086 10 12 10ZM5.5 13C6.88071 13 8 11.8807 8 10.5 8 9.11929 6.88071 8 5.5 8 4.11929 8 3 9.11929 3 10.5 3 11.8807 4.11929 13 5.5 13ZM21 10.5C21 11.8807 19.8807 13 18.5 13 17.1193 13 16 11.8807 16 10.5 16 9.11929 17.1193 8 18.5 8 19.8807 8 21 9.11929 21 10.5ZM12 11C14.7614 11 17 13.2386 17 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5 15.9999C5 15.307 5.10067 14.6376 5.28818 14.0056L5.11864 14.0204C3.36503 14.2104 2 15.6958 2 17.4999V21.9999H5V15.9999ZM22 21.9999V17.4999C22 15.6378 20.5459 14.1153 18.7118 14.0056 18.8993 14.6376 19 15.307 19 15.9999V21.9999H22Z" fill="'.$arr["badgeColor"].'"></path></svg>';
    $badge1='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="'.$arr["badgeColor"].'"></path></svg>';

    
    if(!isset($arr["badge1"])){
        $arr["badge1"]=$badge1;
    }

    if(!isset($arr["badge2"])){
        $arr["badge2"]=$badge2;
    }

    if(!isset($arr["badge3"])){
        $arr["badge3"]=$badge1;
    }

    if(!isset($arr["title"])){
        $arr["title"]="TITLE HERE";
    }

    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }

    if(!isset($arr["contentColor"])){
        $arr["contentColor"]="black";
    }

    if(!isset($arr["content"])){
        $arr["content"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo rem recusandae est velit amet? Aut dolore facilis dicta soluta nulla quibusdam eligendi consequuntur. Sequi, alias totam velit recusandae minus quidem?";
    }

    if(!isset($arr["title1"])){
        $arr["title1"]="TITLE 1";
    }

    if(!isset($arr["title2"])){
        $arr["title2"]="TITLE 2";
    }

    if(!isset($arr["title3"])){
        $arr["title3"]="TITLE 3";
    }

    if(!isset($arr["content1"])){
        $arr["content1"]="Text goes in here";
    }

    if(!isset($arr["content2"])){
        $arr["content2"]="Text goes in here";
    }
    if(!isset($arr["content3"])){
        $arr["content3"]="Text goes in here";
    }
    if(!isset($arr["middleBackgroundColor"])){
        $arr["middleBackgroundColor"]="#f0f0ff";
    }
    if(!isset($arr["lowerBackgroundColor"])){
        $arr["lowerBackgroundColor"]="#cccccc";
    }
    if(!isset($arr["upperBackgroundColor"])){
        $arr["upperBackgroundColor"]="slateblue";
    }

    if(!isset($arr["subTitleColor"])){
        $arr["subTitleColor"]="white";
        $subTitleColor=false;
    }else{
        $subTitleColor=true;
    }

    if(!isset($arr["subContentColor"])){
        $arr["subContentColor"]="white";
        $subContnentColor=false;
    }else{
        $subContnentColor=true;
    }

    if(!isset($arr["image"])){
        $arr["image"]="reze_frame_w/images/eben.webp";
    }
    if(!isset($arr["reviewText"])){
        $arr["reviewText"]="sadf asdf saf asf asdf asd asdf asfasf sadf asdf asdf asdf asdfasdfasfasf asd sdaf sadf asdf asdf as aslkd lksad fjlksdf lkjsdaf jlksad lksdf jklsdlk fjsdjlkf lksadf";
    }
    if(!isset($arr["reviewTextColor"])){
        $arr["reviewTextColor"]="black";
    }

    if(!isset($arr["reviewTextBackgroundColor"])){
        $arr["reviewTextBackgroundColor"]="white";
    }

    if(!isset($arr["dividerColor"])){
        $arr["dividerColor"]="slateblue";
    }
    if(!isset($arr["imageBorderColor"])){
        $arr["imageBorderColor"]="white";
    }
    if(!isset($arr["middleBackgroundImage"])){
        $arr["middleBackgroundImage"]="url(reze_frame_w/images/blackStarBackground.webp)";
        $master_middle_background_color_switcher="#00000020";
    }else{
        $arr["middleBackgroundImage"]="url(".$arr["middleBackgroundImage"].")";
        $master_middle_background_color_switcher="#00000020";
    }

    if($arr["middleBackgroundImage"]=="none"){
        $arr["middleBackgroundImage"]="none";
        $master_middle_background_color_switcher="inherit";

        if($subTitleColor==false){
            $arr["subTitleColor"]="black";
        }

        if($subContnentColor==false){
            $arr["subContentColor"]="black";
        }
    }

    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }

    


    

    

    echo '
        <style>
            .initialpos'.$GLOBALS["firstcard"].'{
                transform: '.$arr["animation"].';
            }

            .mainblock'.$GLOBALS["firstcard"].'{
                width:100%;
                min-height:300px;
                background-color:white;
                position:relative;
            }
            .topblock'.$GLOBALS["firstcard"].'{
                background-color:'.$arr["upperBackgroundColor"].';
                min-height:100px;
                padding:100px;
                box-sizing:border-box;
                padding:2% 10%;
            }
            .middleblock'.$GLOBALS["firstcard"].'{
                min-height:200px;
                background-color: white;
                position:relative;
            }
            .bottomblock'.$GLOBALS["firstcard"].'{
                width:100%;
                min-height:200px;
                background-color:'.$arr["lowerBackgroundColor"].';
                position:relative;
                top:0%;
                display:flex;
                padding:2% 10%;
                box-sizing:border-box;
                justify-content:center;
                align-items:center;
            }

            .bottomblock'.$GLOBALS["firstcard"].'>*{
                display:flex;
                justify-content:center;
                align-items:center;
                margin:0px 20px;
            }


            .middleupperbk'.$GLOBALS["firstcard"].'{
                top:0; 
                position:absolute; 
                height:50%; 
                width:100%; 
                background-color:'.$arr["upperBackgroundColor"].';
            }
            .middlelowerbk'.$GLOBALS["firstcard"].'{
                bottom:0; 
                position:absolute; 
                height:50%; 
                width:100%; 
                background-color: '.$arr["lowerBackgroundColor"].';
            }

            .middlebk'.$GLOBALS["firstcard"].'{
                width:80%;
                height:100%;
                background-color:'.$arr["middleBackgroundColor"].';
                background-image:'.$arr["middleBackgroundImage"].';
                background-position:center;
                position:relative;
                margin:0 auto;
                padding:20px;
                display:flex;
                border-radius:5px;
                transition: all 0.6s;
            }
            .middlebk'.$GLOBALS["firstcard"].'>*{
                flex:1;
                margin:10px 0;
                min-height:250px;
                background-color:'.$master_middle_background_color_switcher.';
                border-left:4px solid '.$arr["dividerColor"].';
                border-right:4px solid '.$arr["dividerColor"].';
                border-radius:10px;
                padding:20px;
                box-sizing:border-box;
            }

            .middlebkchildren'.$GLOBALS["firstcard"].':first-child{
                border-left:none;
            }

            .middlebkchildren'.$GLOBALS["firstcard"].':last-child{
                border-right:none;
            }

            .middlebkchildren'.$GLOBALS["firstcard"].'>*{
                margin:15px 0;
                text-align:center;
            }

            @media (max-width:800px){
                .middlebk'.$GLOBALS["firstcard"].'{
                    flex-direction:column;
                }
                .bottomblock'.$GLOBALS["firstcard"].'{
                    flex-direction:column;
                }
                .middlebk'.$GLOBALS["firstcard"].'>*{
                    margin:0 10px;
                    border-bottom:4px solid '.$arr["dividerColor"].';
                    border-top:4px solid '.$arr["dividerColor"].';
                    border-left:none;
                    border-right:none;
                    display:flex;
                    flex-direction:column;
                    justify-content:center;
                }
                .middlebkchildren'.$GLOBALS["firstcard"].':first-child{
                    border-top:none;
                }
    
                .middlebkchildren'.$GLOBALS["firstcard"].':last-child{
                    border-bottom:none;
                }

            }
        </style>

        <div class="mainblock'.$GLOBALS["firstcard"].'">

            <div class="topblock'.$GLOBALS["firstcard"].'">
                <h1 style="font-size:30px; font-weight:bold; color:'.$arr["titleColor"].'">'.$arr["title"].'</h1><br>
                <p style="width:min(100%, 700px); line-height:1.5; color:'.$arr["contentColor"].' ">'.$arr["content"].'</p>
            </div>

            <div class="middleblock'.$GLOBALS["firstcard"].'">
                <div class="middleupperbk'.$GLOBALS["firstcard"].'"></div>
                <div class="middlelowerbk'.$GLOBALS["firstcard"].'"></div>
                
                <div class="middlebk'.$GLOBALS["firstcard"].' initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">

                    <div class="middlebkchildren'.$GLOBALS["firstcard"].'">
                        <div style="font-size:30px; font-weight:bold; color:'.$arr["subTitleColor"].'">'.$arr["title1"].'</div>
                        <div style="color:'.$arr["subContentColor"].'">'.$arr["content1"].'</div>
                        <div >'.$arr["badge1"].'</div>
                    </div>

                    <div class="middlebkchildren'.$GLOBALS["firstcard"].'">
                        <div style="font-size:30px; font-weight:bold; color:'.$arr["subTitleColor"].'">'.$arr["title2"].'</div>
                        <div style="color:'.$arr["subContentColor"].'">'.$arr["content2"].'</div>
                        <div>'.$arr["badge2"].'</div>
                    </div>

                    <div class="middlebkchildren'.$GLOBALS["firstcard"].'">
                        <div style="font-size:25px; font-weight:bold; color:'.$arr["subTitleColor"].'">'.$arr["title3"].'</div>
                        <div style="color:'.$arr["subContentColor"].'">'.$arr["content3"].'</div>
                        <div>'.$arr["badge3"].'</div>
                    </div>

                </div>
            </div>

            <div class="bottomblock'.$GLOBALS["firstcard"].'">
                <img style=" border:10px solid '.$arr["imageBorderColor"].'; border-radius:50%; width:200px; height:200px" src="'.$arr["image"].'">
                '.$openquotes.'
                <div style="width:min(90%, 500px); font-size:20px; background-color:'.$arr["reviewTextBackgroundColor"].'; padding:20px; border-radius:20px; color:'.$arr["reviewTextColor"].'">'.$arr["reviewText"].'</div>
                '.$closequote.'
            </div>
        </div>


        <script>
    var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.remove("initialpos'.$GLOBALS["firstcard"].'");
            }else{
                entry.target.classList.add("initialpos'.$GLOBALS["firstcard"].'");
            }
        });
    },
    {
        threshold: 0.1,
    }
    );

    var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
    hiddenElements.forEach((el)=>observer.observe(el));

    </script>
    ';

    $GLOBALS["firstcard"]++;
}

?>