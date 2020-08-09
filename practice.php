<?php
echo 'hello php!';
$a = 3;
$b = 7;
$c = $a + $b;
echo $c;

$array_month = [1,2,3,4,5,6,7,8,9,10,11,12];
echo $array_month[7];
$hello = "Hello";
$name = "櫻井";
$world = "'s world!";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .="boost";
echo $tech_boost;

$calendar2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar2018["December"];

$name="櫻井";
if ($name =="櫻井") {
  echo "私は櫻井です。";
} else{
  echo "私は櫻井ではない。";
}
echo "\n";
$total = 0;
echo $total;
for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "lemon","peech","banana");
  foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
  }

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
  
  if($i % 5 == 0) {
    echo $i;
  }
}
