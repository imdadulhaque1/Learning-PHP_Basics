<?php

$marks=[
          "Imdadul Haque" =>[
                    "Programming" => 75,
                    "Artificial Intelligence" => 79,
                    "Data Mining" => 80,
                    "Embedded Systems" =>75
          ],
          "Md. Suhel Rana" =>[
                    "Programming" => 85,
                    "Artificial Intelligence" => 81,
                    "Data Mining" => 70,
                    "Embedded Systems" =>78
          ],
          "Mizanur Rahman" =>[
                    "Programming" => 83,
                    "Artificial Intelligence" => 77,
                    "Data Mining" => 81,
                    "Embedded Systems" =>88
          ],
          "Shamima Akter" =>[
                    "Programming" => 84,
                    "Artificial Intelligence" => 85,
                    "Data Mining" => 80,
                    "Embedded Systems" =>87
          ],
          "Md. Lakib Hasan" =>[
                    "Programming" => 85,
                    "Artificial Intelligence" => 80,
                    "Data Mining" => 78,
                    "Embedded Systems" =>77
          ],
];

echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
          <th>Student Name</th>
          <th>Programming</th>
          <th>Artificial Intelligence</th>
          <th>Data Mining</th>
          <th>Embedded Systems</th>
</tr>";
foreach($marks as $key => $v1){
          echo "<tr>
                    <td>$key</td>";
          foreach($v1 as $v2){
                    echo "<td>$v2</td>";
          }
          echo "</tr>";

}
echo "</table>";
// echo "<pre>";
// print_r($marks);
// echo "</pre>";

?>