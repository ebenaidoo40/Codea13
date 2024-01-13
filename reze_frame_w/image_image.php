<?php 

function image_image(array $arr){

    
    if(!isset($arr["pic1"])){
        $arr["pic1"]="reze_frame_w/images/codea13.png";
    }
    if(!isset($arr["pic2"])){
        $arr["pic2"]="reze_frame_w/images/codea13.png";
    }
    
    if(!isset($arr["title1"])){
        $arr["title1"]="Title 1";
    }
    if(!isset($arr["title2"])){
        $arr["title2"]="Title 2";
    }
    
    if(!isset($arr["content1"])){
        $arr["content1"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corrupti doloribus, similique commodi quia iusto si.";
    }
    if(!isset($arr["content2"])){
        $arr["content2"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corrupti doloribus, similique commodi quia iusto sit,";
    }
    
    if(!isset($arr["animation"]) || $arr["animation"]=="on"){
        $arr["animation"]="scale(0.5)";
    }
    if($arr["animation"]=="off"){
        $arr["animation"]="scale(1)";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="#f0f0ff";
    }
    if(!isset($arr["titleColor"])){
        $arr["titleColor"]="black";
    }
    if(!isset($arr["textColor"])){
        $arr["textColor"]="black";
    }
    if(!isset($arr["cardColor"])){
        $arr["cardColor"]="#ffffff";
    }
    

echo '
<style> 

    .section2_main'.$GLOBALS["firstcard"].'{
        display:flex;
        flex-direction:column;
        background-color:'.$arr["backgroundColor"].';
    }

    .section2_h3'.$GLOBALS["firstcard"].'{
        margin-top:30px;
        text-align:center;
        font-size:35px;
        padding:0 20px;
        transition: all 0.6s;
    }


    .section2'.$GLOBALS["firstcard"].'{
        min-height : 200px;
        padding: 10px 40px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 500px));
        justify-content: center;
        gap:30px;        
    }

    .initialpos'.$GLOBALS["firstcard"].'{
        transform: '.$arr["animation"].';
    }

    .section2'.$GLOBALS["firstcard"].'>*{   
        padding: 10px;
        background-color: '.$arr["cardColor"].';
        cursor: pointer;
        position: relative;
        margin: 20px;
        min-height: 300px;
        display:flex;
        flex-direction:column;
        align-items:center;
        transition: all 0.6s;
    }
    .squarepic'.$GLOBALS["firstcard"].'{
        min-width:100%;
        height:220px;
        background:#f0f0ff;
    }

    .img'.$GLOBALS["firstcard"].'{
        object-fit:cover;
    }

    @media (max-width:700px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height:200px;
            padding: 10px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(550px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

    @media (max-width:650px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height:200px;
            padding: 10px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

    @media (max-width:600px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height:200px;
            padding: 10px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

    @media (max-width:550px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height:200px;
            padding: 10px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

    @media (max-width:500px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height:200px;
            padding: 10px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

    @media (max-width:360px){
        .section2'.$GLOBALS["firstcard"].'{
            min-height : 200px;
            padding: 10px 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            justify-content: center;
            gap:30px;        
        }
    }

</style>

<section class="section2_main'.$GLOBALS["firstcard"].'">

<div class="section2'.$GLOBALS["firstcard"].'">

<div class="innerblock initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
    <div class="squarepic'.$GLOBALS["firstcard"].'"><img class="img'.$GLOBALS["firstcard"].'" width="100%" height="100%" src="'.$arr["pic1"].'" alt="image1 here"> </div><br>
    <h3 style="width:100%; text-align:center; font-size:22px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title1"].'</h3>
    <p style="text-align:center; line-height:28px; color:'.$arr["textColor"].'">'.$arr["content1"].'</p>
</div>

<div class="innerblock initialpos'.$GLOBALS["firstcard"].' intersectionObserver'.$GLOBALS["firstcard"].'">
    <div class="squarepic'.$GLOBALS["firstcard"].'"><img class="img'.$GLOBALS["firstcard"].'" width="100%" height="100%" src="'.$arr["pic2"].'" alt="image2 here"> </div><br>
    <h3 style=" width:100%; text-align:center; font-size:22px; font-weight:bolder; color:'.$arr["titleColor"].'">'.$arr["title2"].'</h3>
    <p style="text-align:center; line-height:28px; color:'.$arr["textColor"].'">'.$arr["content2"].'</p>
</div>


</div>
</section>

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
    threshold:0.1,
}
);

var hiddenElements = document.querySelectorAll(".intersectionObserver'.$GLOBALS["firstcard"].'");
hiddenElements.forEach((el)=>observer.observe(el));

</script>';

$GLOBALS["firstcard"]++;
}

?>