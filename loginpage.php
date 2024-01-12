<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "reze_frame_w/a_e_xiii_library_1.0.1.php";

        navbar([]);
        

        form([
            
            "backgroundColor"=>"#000000aa",
            "labelColor"=>"white",
            "buttonBackgroundColor"=>"gold",
            "input1"=>["list", "Gender", "Male", "Female"],
            "input2"=>["type"=>"email", "name"=>"Email", "caution"=>"You must not forget to fill this form"],
            "input3"=>["name"=>"password", "type"=>"password", "id"=>"password"]
        ]);
    ?>
</body>
</html>