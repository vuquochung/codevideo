//Bai 9
<?php
$strings = array('Phuong');
// Checking for above three strings one by one.
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "Yes,a string is all lower case.\n";
        echo "<br>";
    } else {
        echo "No,a string is not all lower case.\n";
        echo "<br>";
    }
}
?>

//Bai 8
<?php
function Palindrome($MyString) {
    $revString = strrev($MyString);
    if ($revString == $MyString){
        echo $MyString." is a Palindrome string.\n";
        echo "<br>";
    } else {
        echo $MyString." is not a Palindrome string.\n";
        echo "<br>";
    }
}

Palindrome("radar");
Palindrome("phuong");
?>

//bai 6
<?php
$a = 5; 
$b = 5; 
$c = 5;
$arr = [$a, $b, $c];
function sum($arr) {
    $sum = 0;
    foreach($arr as $value) {
        $sum += $value;
    }
    return $sum;
    echo "<br>";
}
function average($arr) {
    $sum = 0;
    foreach($arr as $value) {
        $sum += $value;
    }
    return $sum/count($arr);
    echo "<br>";
}
echo "SUM = ".sum($arr)."<br>";
echo "AVG= ".average($arr) ."<br>";;
?>

//bai 5
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($age as $x => $x_value){
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>

//bai 7
<?php
$my_array = array('abc@gmail.com','xyz@gmail.com','abc@gmail.com');
function array_not_unique($my_array) {
    $same = array();
    natcasesort($my_array);//sap xep phan tu mang theo alphabet ko phan biet hoa thuong
    reset ($my_array);//tro phtu dau, tra ve value cua phtu do (mang trong->false)

    $old_key    = NULL;
    $old_value    = NULL;
    foreach ($my_array as $key => $value) {
        if ($value === NULL) { continue; }
        if ($old_value == $value) {
            $same[$old_key]    = $old_value;
            $same[$key]        = $value;
        }
        $old_value    = $value;
        $old_key    = $key;
    }
return $same;
}
print_r(array_not_unique($my_array));
?>