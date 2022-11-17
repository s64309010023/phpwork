<?php

    for($num = 5;$num >= 1;$num--){
        echo $num;
    }
    echo "<hr color='green'>";

    for($score = 10;$score <= 100;$score += 10){
        echo $score;
    }
    echo "<hr color='blue'>";

    for($multiple = 1;$multiple <= 12;$multiple++){
        echo "10 x ".$multiple." = ".$multiple*10;
        echo "<br>";

    }
    echo "<hr color='orange'>";

    for($row = 1;$row <= 5;$row++){
        for($star = 1;$star <= $row;$star++){
            echo "*";
        }
        echo "<br>";

    }
    echo "<hr color='violet'>";

    for($row = 1;$row <= 5;$row++){
        for($star = 5;$star >= $row;$star--){
            echo "*";
        }
        echo "<br>";

    }
    echo "<hr color='pink'>";

    for($row = 1;$row <= 5;$row++){
        for($star = 1;$star <= $row;$star++){
            echo $num = $num + 1;
        }
        echo "<br>";

    }
    echo "<hr color='orange'>";




    
?>