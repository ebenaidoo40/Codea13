<?php
/**
 * @param array{
 * title,
 * titleColor,
 * pic1,
 * pic2,
 * pic3,
 * pic4,
 * title1,
 * title2,
 * title3,
 * title4,
 * content1,
 * content2,
 * content3,
 * content4,
 * objectFit,
 * objectPosition,
 * textColor,
 * backgroundColor,
 * innerColor,
 * animation
 * } $arr
 */

function section4_codea13(array $arr)
{

    if (!isset($arr["title"])) {
        $arr["title"] = "Four Section Block";
    }
    if (!isset($arr["pic1"])) {
        $arr["pic1"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["pic2"])) {
        $arr["pic2"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["pic3"])) {
        $arr["pic3"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["pic4"])) {
        $arr["pic4"] = "vendor/rezenebe/codea13/src/images/codea13.png";
    }
    if (!isset($arr["title1"])) {
        $arr["title1"] = "Title 1";
    }
    if (!isset($arr["title2"])) {
        $arr["title2"] = "Title 2";
    }
    if (!isset($arr["title3"])) {
        $arr["title3"] = "Title 3";
    }
    if (!isset($arr["title4"])) {
        $arr["title4"] = "Title 4";
    }
    if (!isset($arr["content1"])) {
        $arr["content1"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. ";
    }
    if (!isset($arr["content2"])) {
        $arr["content2"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    }
    if (!isset($arr["content3"])) {
        $arr["content3"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    }
    if (!isset($arr["content4"])) {
        $arr["content4"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    }
    if (!isset($arr["animation"]) || $arr["animation"] == "on") {
        $arr["animation"] = "scale(0.5)";
    }
    if ($arr["animation"] == "off") {
        $arr["animation"] = "scale(1)";
    }
    if (!isset($arr["backgroundColor"])) {
        $arr["backgroundColor"] = "#d867ae";
    }
    if (!isset($arr["titleColor"])) {
        $arr["titleColor"] = "black";
    }
    if (!isset($arr["textColor"])) {
        $arr["textColor"] = "black";
    }
    if (!isset($arr["innerColor"])) {
        $arr["innerColor"] = "white";
    }
    if (!isset($arr["objectFit"])) {
        $arr["objectFit"] = "cover";
    }
    if (!isset($arr["objectPosition"])) {
        $arr["objectPosition"] = "50% 0%";
    }


    echo '
<style> 

    .section2_main' . $GLOBALS["firstcard"] . '{
        display:flex;
        flex-direction:column;
        background-color:' . $arr["backgroundColor"] . ';
    }

    .section2_h3' . $GLOBALS["firstcard"] . '{
        margin-top:30px;
        text-align:center;
        font-size:35px;
        padding:0 20px;
        transition: all 0.6s;
    }


    .section2' . $GLOBALS["firstcard"] . '{
        min-height : 200px;
        padding: 10px 40px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 250px));
        justify-content: center;
        gap:30px;        
    }

    .section2' . $GLOBALS["firstcard"] . '>*{   
        padding: 10px;
        background-color:' . $arr["innerColor"] . ';
        cursor: pointer;
        position: relative;
        margin: 20px;
        min-height: 300px;
        display:flex;
        flex-direction:column;
        align-items:center;
        transition: all 0.6s;
    }

    .initialpos' . $GLOBALS["firstcard"] . '{
        transform: ' . $arr["animation"] . ';
    }
    
    .squarepic' . $GLOBALS["firstcard"] . '{
        min-width:100%;
        height:220px;
        background:#f0f0ff;
    }
    .img' . $GLOBALS["firstcard"] . '{
        object-fit:'.$arr["objectFit"].';
        object-position:'.$arr["objectPosition"].';
    }

    @media (max-width:900px){
        .section2' . $GLOBALS["firstcard"] . '{
            grid-template-columns: repeat(auto-fit, minmax(250px, 300px));     
        }
        .squarepic' . $GLOBALS["firstcard"] . '{
            height:300px;
        }
    }

    @media (max-width:700px){
        .section2' . $GLOBALS["firstcard"] . '{
            min-height : 200px;
            padding: 10px 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            justify-content: center;
            gap:30px;        
        }
        .squarepic' . $GLOBALS["firstcard"] . '{
            height:350px;
        }
    }

</style>

<section class="section2_main' . $GLOBALS["firstcard"] . '">

<h1 class="section2_h3' . $GLOBALS["firstcard"] . ' initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . ' style="color:' . $arr["titleColor"] . '"> ' . $arr["title"] . ' </h1>
<div class="section2' . $GLOBALS["firstcard"] . '">

<div class="initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
    <div class="squarepic' . $GLOBALS["firstcard"] . '"><img class="img' . $GLOBALS["firstcard"] . '" width="100%" height="100%"  src="' . $arr["pic1"] . '" alt="image1 here"> </div><br>
    <h3 style="width:100%; text-align:center; font-size:22px; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title1"] . '</h3>
    <p style="text-align:center; line-height:28px; color:' . $arr["textColor"] . '">' . $arr["content1"] . '</p>
</div>

<div class="initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
    <div class="squarepic' . $GLOBALS["firstcard"] . '"><img class="img' . $GLOBALS["firstcard"] . '" width="100%" height="100%" src="' . $arr["pic2"] . '" alt="image2 here"> </div><br>
    <h3 style=" width:100%; text-align:center; font-size:22px; font-weight:bolder;color:' . $arr["titleColor"] . '">' . $arr["title2"] . '</h3>
    <p style="text-align:center; line-height:28px; color:' . $arr["textColor"] . '">' . $arr["content2"] . '</p>
</div>

<div class="initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
    <div class="squarepic' . $GLOBALS["firstcard"] . '"><img class="img' . $GLOBALS["firstcard"] . '" width="100%" height="100%" src="' . $arr["pic3"] . '" alt="image3 here"> </div><br>
    <h3 style="width:100%; text-align:center; font-size:22px; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title3"] . '</h3>
    <p style="text-align:center; line-height:28px; color:' . $arr["textColor"] . '">' . $arr["content3"] . '</p>
</div>

<div class="initialpos' . $GLOBALS["firstcard"] . ' intersectionObserver' . $GLOBALS["firstcard"] . '">
    <div class="squarepic' . $GLOBALS["firstcard"] . '"><img class="img' . $GLOBALS["firstcard"] . '" width="100%" height="100%" src="' . $arr["pic4"] . '" alt="image3 here"> </div><br>
    <h3 style="width:100%; text-align:center; font-size:22px; font-weight:bolder; color:' . $arr["titleColor"] . '">' . $arr["title4"] . '</h3>
    <p style="text-align:center; line-height:28px; color:' . $arr["textColor"] . '">' . $arr["content4"] . '</p>
</div>

</div>
</section>


<script>
var observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry) => {
        if(entry.isIntersecting){
            entry.target.classList.remove("initialpos' . $GLOBALS["firstcard"] . '");
        }else{
            entry.target.classList.add("initialpos' . $GLOBALS["firstcard"] . '");
        }
    });
},
{
    threshold:0.1,
}
);

var hiddenElements = document.querySelectorAll(".intersectionObserver' . $GLOBALS["firstcard"] . '");
hiddenElements.forEach((el)=>observer.observe(el));

</script>';

    $GLOBALS["firstcard"]++;
}

?>