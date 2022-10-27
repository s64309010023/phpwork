<?php

    $a = $_POST['side_a'];
    $b = $_POST['side_b'];
    $h = $_POST['height_h'];
    $area = ( ($a + $b) /2 ) * $h;

    //echo "พื้นที่สี่เหลี่ยมคางหมู<br>";
    //echo "ความยาวด้าน a = ".$a;
    //echo "<br>";
    //echo "ความยาวด้าน b = ".$b;
    //echo "<br>";
    //echo "ความสูง h = ".$h;
    //echo "<br>";
    //echo "มีพื้นที่ เท่ากับ ".$area." ตร.หน่วย";
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
    <p>
        <?php
           echo "พื้นที่สีเหลี่ยมคางหมู <br>";
           echo "ความยาวด้าน a =".$a;
           echo "<br>";
           echo "ความยาวด้าน b =".$b;
           echo "<br>";
           echo "คาวยาว h =".$h;
           echo "<br>";
           echo "มีพื้นที่ เท่ากับ".$area." ตร. หน่วย ";

       
        ?>
    </p>
</body>
</html>




