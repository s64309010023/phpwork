<?php

    $num = 5;

    while($num >= 1){
        echo $num;
        $num--;
    }
    echo "<hr color='green'>";

    $score = 10;
    while($score <= 100){
        echo $score;
        //$score = $score + 10;
        $score += 10;
    }
    echo "<hr color='red'>";

    //แสดงสูตรคูณแม่ 10 ตั้งแต่ 10x1 ถึง 10x12
    // 10 x 10 = 10
    // 10 x 12 = 20
    //....
    // 10 x 12 = 120

    $multiple = 1;
    while($multiple <= 12 ){
        echo "10 x ".$multiple." = ".$multiple*10;
        echo "<br>";
        $multiple++;

    }
    echo "<hr color='pink'>";

    $multiple = 1;
    while($multiple <= 12 ){
        echo "12 x ".$multiple." = ".$multiple*12;
        echo "<br>";
        $multiple++;
    }
    echo "<hr color='yellow'>";

    

?>