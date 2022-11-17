<?php

$m = $_POST['numply'];

$multiple = 1;
while($multiple <= 12 ){
    echo "<h3>สูตรคูณ แม่ ".$m."</h3>";
    echo "<span style='border-radius: 10px border: 1px dotted green;color=>"$m." x ".$multiple." = ".$multiple * $m"<span>";
    echo "<br>";
    $multiple++;
    echo "<meta http-equiv='refresh' content='10; url=multiply.html'>";

}

?>