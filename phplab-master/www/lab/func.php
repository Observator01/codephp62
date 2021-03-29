<?php
//  myFunction();

// function myFunction()
// {
//     echo "my1";
// }

function functon2()
{
    echo "my" . "<br>";

    return "you call me";
}
//$str = functon2();
//echo $str;
//$calFunc = functon2();
//$calFunc;

// function calnumber(&$num1, $num2 = 7)
// {
//     $a = $num1;
//     $b = $num2;
//     $c = $a + $b;
//     $num1 = 6;
//     return $c;
// }
// $num1 = 1;
// $num2 = 6;
// echo calnumber($num1,$num2);
// echo "<br>";
// echo $num1;
// echo "<br>";

// function fatorail($num)
// {
//     if ($num == 0 || $num == 1) {
//         return 1;
//     } else {
//         return $num * fatorail($num - 1);
//     }
// }
// echo fatorail(5) . "<br>";

// $Fullname = "Mr.Suradet Petcharanon";
// $lastname = substr($Fullname,11,3);
// echo $lastname;
// echo strlen($lastname);
// echo "<br>";
// echo max(1,4.33,45);
// echo round(19.987777,2);

echo date("d/m/Y", "1579737600");
echo "<br>";
// echo getdate();
$currentdate = getdate();
echo $currentdate["mday"];
//echo time();
