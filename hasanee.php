<?php

    $a = $_POST['side_a'];
    
    $area =  ($a * $a);


?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
        <p style="color: red; font-size: 16px">
        <?php
           echo "พื้นที่สีเหลี่ยมจัตุรัส <br>";
           echo "ความยาวด้าน a =".$a;
           echo "<br>";
           echo "ความยาวด้าน b =".$a;
           echo "<br>";
           echo "มีพื้นที่ เท่ากับ".$area." ตร. เซนติเมตร ";

       
        ?>
        </p>
</body>
</html>
