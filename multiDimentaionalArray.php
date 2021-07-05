<?php

$arr = [
          [1, "Israt Jahan Maisha", "Female", "Child"],
          [2, "Hena Khatun", "Female", "Nurse"],
          [3, "Enamul Haque", "Male", "Farmer"],
          [4, "Imdadul Haque", "Male", "Engineer"],
          [5, "Shampa Khatun", "Female", "Student"]
];

echo $arr[0][0]."   ";
echo $arr[0][1]."   ";
echo $arr[0][2]."   ";
echo $arr[0][3]."   "."<br>";
echo $arr[1][0]."   ";
echo $arr[1][1]."   ";
echo $arr[1][2]."   ";
echo $arr[1][3]."   "."<br>";
echo $arr[4][0]."   ";
echo $arr[4][1]."   ";
echo $arr[4][2]."   ";
echo $arr[4][3]."   "."<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";

?>