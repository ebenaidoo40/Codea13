<?php

function video_home(array $arr){

    if(!isset($arr["video"])){
        $arr["video"]="reze_frame_w/video/codea13.mp4";
    }

    if(!isset($arr["title"])){
        $arr["title"]="Codea 13";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }

    if(!isset($arr["videoFrameBorderColor"])){
        $arr["videoFrameBorderColor"]="white";
    }
    if(!isset($arr["innerColor"])){
        $arr["innerColor"]="white";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="black";
    }


    echo '
    <style>
        .mainhome'.$GLOBALS["firstcard"].'{
            min-height:100px;
            background-color:'.$arr["innerColor"].';
            position:relative;
            isolation:isolate;
            box-sizing:border-box;
        }
        .video'.$GLOBALS["firstcard"].'{
            top:2px;
            width:min(500px, 98%);
            object-fit:contain;
            position:relative;
            left:50%;
            transform:translateX(-50%);
            border:15px solid '.$arr["videoFrameBorderColor"].';
            box-shadow: 0 0 5px 2px #333;
            box-sizing:border-box;
        }

        .title'.$GLOBALS["firstcard"].'{
            position:absolute;
            padding:20px;
            background-color:#00000050;
            width:fit-content;
            font-size:45px;
            color:'.$arr["titleColor"].';
            font-weight:bolder;
            top:50%;
            left: 50%;
            transform:translate(-50%, -50%);
        }

        @media (max-width:600px){
            .vidtitle'.$GLOBALS["firstcard"].'{
                font-size:18px;
            }
        }
    </style>
    
    <div class="mainhome'.$GLOBALS["firstcard"].'">
        <video class="video'.$GLOBALS["firstcard"].'" playsinline preload="auto" autoplay muted loop>
            <source src="'.$arr["video"].'">
        </video>

        <div class="title'.$GLOBALS["firstcard"].'">'.$arr["title"].'</div>

        <svg style="z-index:-1; width:100%; height:100%; position:absolute; left:0%" xmlns="http://www.w3.org/2000/svg" viewBox="0 -9 29 9" preserveAspectRatio="none">
	        <path d="M 0 0 L 0 -9 L 29 -9 L 29 0 Z M 2 -1 C 3 -2 2 -2 2 -2 C 2 -2 1 -2 2 -1 M 2 -3 C 1 -4 1 -3 1 -3 C 1 -3 1 -2 2 -3 M 3 -4 C 2 -3 3 -3 3 -3 C 3 -3 4 -3 3 -4 M 2 -5 C 2 -5 1 -5 2 -4 C 3 -5 2 -5 2 -5 M 1 -6 C 1 -6 1 -5 2 -6 C 1 -7 1 -6 1 -6 M 3 -6 C 3 -6 4 -6 3 -7 C 3 -7 2 -6 3 -6 M 2 -8 C 2 -8 1 -7 2 -7 C 3 -7 2 -8 2 -8 M 5 -8 C 5 -9 4 -8 4 -8 C 4 -8 5 -7 5 -8 M 4 -7 C 4.3333 -6.6667 4 -6 5 -6 C 5 -7 4.3333 -6.6667 4 -7 M 5 -4 C 4 -3 3 -2 5 -2 C 7 -2 6 -3 5 -4 M 4 -5 C 6 -3 9 -3 9 -5 C 7 -4 6 -6 4 -5 M 6 -8 C 6 -4 7 -7 10 -6 C 8.6667 -6.6667 7 -9 6 -8 M 27 -1 C 27 -1 28 -2 27 -2 C 26 -2 27 -1 27 -1 M 27 -3 C 27 -3 28 -2 28 -3 C 28 -4 27 -3 27 -3 M 26 -3 C 27 -3 26 -4 26 -4 C 26 -4 25 -3 26 -3 M 27 -4 C 27 -4 28 -5 27 -5 C 26 -5 27 -4 27 -4 M 27 -6 C 27 -6 28 -5 28 -6 C 28 -7 27 -6 27 -6 M 26 -6 C 27 -6 26 -7 26 -7 C 26 -7 25 -6 26 -6 M 27 -7 C 28 -7 27 -8 27 -8 C 27 -8 26 -7 27 -7 M 25 -8 C 25 -8 24 -9 24 -8 C 24 -7 25 -8 25 -8 M 23 -8 C 22 -9 20.3333 -6.6667 19 -6 C 22 -7 23 -4 23 -8 M 20 -5 C 20 -3 23 -3 25 -5 C 23 -6 22 -4 20 -5 M 25 -7 C 24.6667 -6.6667 24 -7 24 -6 C 25 -6 24.6667 -6.6667 25 -7 M 24 -4 C 23 -3 22 -2 24 -2 C 26 -2 25 -3 24 -4" fill="'.$arr["backgroundColor"].'"/>
        </svg>
    </div>
    
    ';
    $GLOBALS["firstcard"]++;
}

?>