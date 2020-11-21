<?php
$rate = 28.3;
$data = array(50000, 30000, 45000, 80000, 120000);
for ($i=0; $i<count($data); $i++) {
    echo "新台幣" . $data[$i] . "元換算成美金是" .
    round($data[$i] / $rate, 2) . "元<br>";
}

$rate1 = array(28.3, 30, 30.5, 40, 60);
$name1 = array("日幣", "韓元", "英鎊", "美金", "澳幣");
$data1 = 50000;
for ($i=0; $i<count($rate1); $i++) {
    echo "新台幣" . $data1 . "元換算成". $name1[$i] . "是" .
    round($data1 / $rate1[$i], 2) . "元<br>";
}
?>

