<?php
$emp = [
          [1, "Imdadul Haque", "Full Stack Software Developer", 20000],
          [2, "Mizanur Rahman Raihan", "Software Engineer", 25000],
          [3, "Jahid Hasan Shovon", "Full Stack Developer", 20000],
          [4, "Arafat Rahman", "Full Stack Software Developer", 20000]
];

echo "<table border='2px' cellspacing='0px' cellpadding='5px'>
          <tr>
                    <th>Emp Id.</th>
                    <th>Name</th>
                    <th>Degnition</th>
                    <th>Salary</th>
          </tr>";
foreach($emp as list($id, $name, $designation, $salary)){
          echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
echo "</table>";
?>