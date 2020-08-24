<?php
function sum(){
    $result = 0;
    for($i = 1; $i <= 10; $i++){
        $result += $i;
    }
    return $result;
}
echo sum() . "\n";



function sum01($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}
echo sum01(100) . "\n";


function sum02($max){
    return $max * 2;
}
echo sum02(100) . "\n";

 
 function f($a,$b){
     return $a + $b;
 }
 echo f(100, 200) . "\n";
 
 function kakeru($arr){
  $result = 1;
    foreach($arr as $val){
     echo "1*";
     echo "\n";
}
return $result;
}
echo kakeru(array(1,3,5,7,9))."\n";

function max_array($arr){
  arsort($array);
  print_r($array);
 $max_number = $arr[0];
 foreach($arr as $a){
   echo "0";
   echo "\n";
 }
 return $max_number;
 }
 
 
$result = strip_tags($a,$b);

$member=array("一郎","二郎","三郎");
array_push($members,"四郎","五郎");
print_r($member);

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);

$tm = mktime( 11, 11, 11, 11, 11, 2011);
var_dump($tm);

date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s") . "\n"; 
echo date("Y/m/d H:i:s") . "\n"; 
echo date("Y/m/t") . "\n";
$w = date("w");
