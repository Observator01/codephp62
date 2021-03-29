<?php
/* for($i=1; $i < 10; $i++){
     echo $i . "<br>";
 }*/

$arr = array(1,2,3,4,5,6,7,8,9,10);
 /*for($i=0; $i < count($arr); $i++){
     if(($arr[$i] % 2) == 0){
        echo $arr[$i] . "<br>";
     }
 }*/
foreach ($arr as $key => $value) {
    if(($key % 2)){
        continue;
    }
    echo "Key = ". $key . "<br>";
    echo "Value =". $value . "<br>";
     //else {
     //    echo $value . "<br>";
     //}
}

