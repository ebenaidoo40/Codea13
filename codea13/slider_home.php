<?php

function slider_home(array $arr){
    if(!isset($arr["image1"])){
        $arr["image1"]="codea13/images/codea13.png";
    }
    if(!isset($arr["image2"])){
        $arr["image2"]="codea13/images/codea13.png";
    }
    if(!isset($arr["image3"])){
        $arr["image3"]="codea13/images/codea13.png";
    }
    if(!isset($arr["title1"])){
        $arr["title1"]="Enter First Title Here";
    }
    if(!isset($arr["title2"])){
        $arr["title2"]="Enter Second Title Here";
    }
    if(!isset($arr["title3"])){
        $arr["title3"]="Enter Third Title Here";
    }
    if(!isset($arr["loaderType"])){
        $arr["loaderType"]="dashed";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="white";
    }
    if(!isset($arr["loaderColor"])){
        $arr["loaderColor"]=$arr["titleColor"];
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#000000bb";
    }
    if(!isset($arr["boxShadow"])){
        $arr["boxShadow"]="0 0 5px 4px black";
    }
    if(!isset($arr["imageFit"])){
        $arr["imageFit"]="fill";
    }
    if(!isset($arr["imagePosition"])){
        $arr["imagePosition"]="none";
    }
    if(!isset($arr["mobileHeight"])){
        $arr["mobileHeight"]="450px";
    }

    echo '<style>

        .mainSliderBlock' . $GLOBALS["firstcard"] . '{
            position:relative;
            height:500px;
            width:100%;
            overflow:hidden;
        }

        .homeSlider1' . $GLOBALS["firstcard"] . '{
            width:100%;
            position:absolute;
            top:0px;
            height:500px;
            background-color:white;
            z-index:0;
            transform:translateX(0%);
            transition: transform 1s linear;
        }

        .homeSlider2' . $GLOBALS["firstcard"] . '{
            width:100%;
            position:absolute;
            top:0px;
            height:500px;
            background-color:white;
            z-index:0;
            transform:translateX(-100%);
            transition: transform 1s linear;
        }

        .homeSlider3' . $GLOBALS["firstcard"] . '{
            width:100%;
            position:absolute;
            top:0px;
            height:500px;
            background-color:white;
            z-index:0;
            transform:translateX(100%);
            transition: transform 1s linear;
        }

        

        .sliderHomeAnimate1' . $GLOBALS["firstcard"] . '{
            transform: translateX(0%);
            z-index:0;
        }
        .sliderHomeAnimate2' . $GLOBALS["firstcard"] . '{
            transform: translateX(-100%);
            z-index:-1;
        }
        .sliderHomeAnimate3' . $GLOBALS["firstcard"] . '{
            transform: translateX(100%);
            z-index:-2;
        }

        .header' . $GLOBALS["firstcard"] . '{
            width:min(900px, 90%);
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            font-size:35px;
            font-weight:bolder;
            color:#f0f0ff;
            position:absolute;
            top:50%;
            left:50%;
            transition: all 1s linear;
            opacity:0.2;
            transform:translate(-30%, -30%) scale(0.5);
            background-color:'.$arr["backgroundColor"].';
            box-shadow: '.$arr["boxShadow"].';
            box-sizing:border-box;
            padding:20px;
            border-radius:10px;
        }
        
        .updateHeader' . $GLOBALS["firstcard"] . '{
            transform:translate(-50%, -50%) scale(1);
            opacity:1;
        }
        .headtitle' . $GLOBALS["firstcard"] . '{
            font-size:35px;
            text-align:center;
            color:'.$arr["titleColor"].';
        }

        .loader' . $GLOBALS["firstcard"] . '{
            width:0%;
            height: 0px;
            background-color:#00000000;
            border-bottom: 15px '.$arr["loaderType"].' '.$arr["loaderColor"].';
            transition: all 2s linear;

        }
        .loaderUpdate' . $GLOBALS["firstcard"] . '{
            width:100%;
        }

        @media (max-width:700px){
            .mainSliderBlock' . $GLOBALS["firstcard"] . '{
                height:'.$arr["mobileHeight"].';
            }

            .homeSlider1' . $GLOBALS["firstcard"] . ', .homeSlider2' . $GLOBALS["firstcard"] . ', .homeSlider3' . $GLOBALS["firstcard"] . '{
                height:'.$arr["mobileHeight"].';
            }

            .headtitle' . $GLOBALS["firstcard"] . '{
                font-size:35px;
            }
        }

        
    
    </style>
    
    <div class="mainSliderBlock' . $GLOBALS["firstcard"] . '">

       <div id="homeSlider1' . $GLOBALS["firstcard"] . '" class="homeSlider1' . $GLOBALS["firstcard"] . ' codea13Slider1' . $GLOBALS["firstcard"] . '">
            <img id="imgs1' . $GLOBALS["firstcard"] . '" style="width:100%; height:500px; object-fit:'.$arr["imageFit"].'; object-position:'.$arr["imagePosition"].';" src="'.$arr["image1"].'" >
            <div class="header' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                <div class="headtitle' . $GLOBALS["firstcard"] . '">'.$arr["title1"].'</div>
                <div class="loader' . $GLOBALS["firstcard"] . ' loaderObserver' . $GLOBALS["firstcard"] . '"></div>
            </div>
        </div>

        <div id="homeSlider2' . $GLOBALS["firstcard"] . '" class="homeSlider2' . $GLOBALS["firstcard"] . ' codea13Slider1' . $GLOBALS["firstcard"] . '">
            <img id="imgs2' . $GLOBALS["firstcard"] . '" style="width:100%; height:500px; object-fit:'.$arr["imageFit"].'; object-position:'.$arr["imagePosition"].';" src="'.$arr["image2"].'">
            <div class="header' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                <div class="headtitle' . $GLOBALS["firstcard"] . '">'.$arr["title2"].'</div>
                <div class="loader' . $GLOBALS["firstcard"] . ' loaderObserver' . $GLOBALS["firstcard"] . '"></div>
            </div>
        </div>

        <div id="homeSlider3' . $GLOBALS["firstcard"] . '" class="homeSlider3' . $GLOBALS["firstcard"] . ' codea13Slider1' . $GLOBALS["firstcard"] . '">
            <img id="imgs3' . $GLOBALS["firstcard"] . '" style="width:100%; height:500px; object-fit:'.$arr["imageFit"].'; object-position:'.$arr["imagePosition"].';" src="'.$arr["image3"].'">
            <div class="header' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                <div class="headtitle' . $GLOBALS["firstcard"] . '">'.$arr["title3"].'</div>
                <div class="loader' . $GLOBALS["firstcard"] . ' loaderObserver' . $GLOBALS["firstcard"] . '"></div>
            </div>
        </div>';

        
        $mykeys = array_keys($arr);
        for ($i = 0; $i < sizeof($arr); $i++) {
            if (is_array($arr[$mykeys[$i]])) {
                if (!isset($arr[$mykeys[$i]]["image"])) {
                    $arr[$mykeys[$i]]["image"] = "codea13/images/codea13.png";
                }
                if (!isset($arr[$mykeys[$i]]["title"])) {
                    $arr[$mykeys[$i]]["title"] = "New Title Here";
                }
                echo '
                    <div id="homeSlider3' . $GLOBALS["firstcard"] . '" class="homeSlider3' . $GLOBALS["firstcard"] . ' codea13Slider1' . $GLOBALS["firstcard"] . '">
                        <img id="imgs3' . $GLOBALS["firstcard"] . '" style="width:100%; height:500px; object-fit:'.$arr["imageFit"].'; object-position:'.$arr["imagePosition"].';" src="'.$arr[$mykeys[$i]]["image"].'">
                        <div class="header' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
                            <div class="headtitle' . $GLOBALS["firstcard"] . '">'.$arr[$mykeys[$i]]["title"].'</div>
                            <div class="loader' . $GLOBALS["firstcard"] . ' loaderObserver' . $GLOBALS["firstcard"] . '"></div>
                        </div>
                    </div>
                ';
            }
        }

        
    echo '</div>

    <script>
        var homeSliderBag' . $GLOBALS["firstcard"] . ' = document.querySelectorAll(".codea13Slider1' . $GLOBALS["firstcard"] . '");
        var counter' . $GLOBALS["firstcard"] . ' = -1;
        var leftcounter' . $GLOBALS["firstcard"] . ' = -2;
        var now' . $GLOBALS["firstcard"] . ' = new Date();
        var sec' . $GLOBALS["firstcard"] . ' = now' . $GLOBALS["firstcard"] . '.getSeconds();

        function positiveModulo(a, n){
            return ( a % n + n) % n;
        }


        function animateSliderHome' . $GLOBALS["firstcard"] . '(){

            var currentSec' . $GLOBALS["firstcard"] . ' = Date.now();
            if(currentSec' . $GLOBALS["firstcard"] . ' - sec' . $GLOBALS["firstcard"] . ' >= 8000){

            
            counter' . $GLOBALS["firstcard"] . ' =  positiveModulo(counter' . $GLOBALS["firstcard"] . ' + 1, homeSliderBag' . $GLOBALS["firstcard"] . '.length);
            leftcounter' . $GLOBALS["firstcard"] . ' =  positiveModulo(leftcounter' . $GLOBALS["firstcard"] . ' + 1, homeSliderBag' . $GLOBALS["firstcard"] . '.length);
            
        
            for(var i=0; i<homeSliderBag' . $GLOBALS["firstcard"] . '.length; i++){
                if(homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.contains("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '")){
                }else{
                    homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.add("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '");
                }
                if(homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.contains("sliderHomeAnimate1' . $GLOBALS["firstcard"] . '")){
                    homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.remove("sliderHomeAnimate1' . $GLOBALS["firstcard"] . '");
                }
                if(homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.contains("sliderHomeAnimate2' . $GLOBALS["firstcard"] . '")){
                    homeSliderBag' . $GLOBALS["firstcard"] . '[i].classList.remove("sliderHomeAnimate2' . $GLOBALS["firstcard"] . '");
                }
            }

            if(homeSliderBag' . $GLOBALS["firstcard"] . '[counter' . $GLOBALS["firstcard"] . '].classList.contains("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '")){
                homeSliderBag' . $GLOBALS["firstcard"] . '[counter' . $GLOBALS["firstcard"] . '].classList.remove("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '");
            }
            if(homeSliderBag' . $GLOBALS["firstcard"] . '[leftcounter' . $GLOBALS["firstcard"] . '].classList.contains("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '")){
                homeSliderBag' . $GLOBALS["firstcard"] . '[leftcounter' . $GLOBALS["firstcard"] . '].classList.remove("sliderHomeAnimate3' . $GLOBALS["firstcard"] . '");
            }
            homeSliderBag' . $GLOBALS["firstcard"] . '[counter' . $GLOBALS["firstcard"] . '].classList.add("sliderHomeAnimate1' . $GLOBALS["firstcard"] . '");
            homeSliderBag' . $GLOBALS["firstcard"] . '[leftcounter' . $GLOBALS["firstcard"] . '].classList.add("sliderHomeAnimate2' . $GLOBALS["firstcard"] . '");

                sec' . $GLOBALS["firstcard"] . ' = Date.now();
            }

            requestAnimationFrame(animateSliderHome' . $GLOBALS["firstcard"] . ');
           
        }
        animateSliderHome' . $GLOBALS["firstcard"] . '();



        var observer = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                setTimeout(()=>{
                    entry.target.classList.add("updateHeader' . $GLOBALS["firstcard"] . '");
                });
                
            }else{
                entry.target.classList.remove("updateHeader' . $GLOBALS["firstcard"] . '");
            }
            });
        },
        {
            threshold:0.5,
        }
        );

        var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
        hiddenElements.forEach((el)=>observer.observe(el));



        var observer2 = new IntersectionObserver((entries)=>{
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                setTimeout(()=>{
                    entry.target.classList.add("loaderUpdate' . $GLOBALS["firstcard"] . '");
                });
                
            }else{
                entry.target.classList.remove("loaderUpdate' . $GLOBALS["firstcard"] . '");
            }
            });
        },
        {
            threshold:0.5,
        }
        );

        var hiddenElements2 = document.querySelectorAll(".loaderObserver' . $GLOBALS["firstcard"] . '");
        hiddenElements2.forEach((el)=>observer2.observe(el));


    </script>
    ';

    $GLOBALS["firstcard"]++;
}

?>