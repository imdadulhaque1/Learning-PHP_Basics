<?php

$arr = [
          [1, "Israt Jahan Maisha", "Female", "tittle child"],
          [2, "Hena Khatun", "Female", "Nurse"],
          [3, "Enamul Haque", "Male", "Farmer"],
          [4, "Imdadul Haque", "Male", "Engineer"],
          [5, "Shampa Khatun", "Female", "Student"]
];

// for($row=0; $row<5; $row++){
//           for($col=0; $col<4; $col++){
//                     echo $arr[$row][$col]." ";
//           }
//           echo "<br>";
// }
echo "<table border='2px' cellspacing='0px' cellpadding='5px'>";
echo "<tr>
          <th>Serial</th>
          <th>Family Name</th>
          <th>Gender</th>
          <th>Occupation</th>
</tr>";
foreach ($arr as $v1){
          echo "<tr>";
          foreach($v1 as $v2){
                    echo "<td>".$v2."</td>";
          }
          echo "</tr>";
}
echo "</table>";

// echo $arr[0][0]."   ";
// echo $arr[0][1]."   ";
// echo $arr[0][2]."   ";
// echo $arr[0][3]."   "."<br>";
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

?>