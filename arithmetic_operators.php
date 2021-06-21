<?php
          $a = 11;
          $b = 20;
          define('num', 40, true);
          $sum = $a + $b + NUM;
          echo "Summation: ".$sum."<br>";

          $add = $a + $b;
          $sub = $add - num;
          echo "Substruction: ".$sub."<br>";

          echo "Production: ".$a*$b*num."<br>";

          echo "Divission: ".NUM/$a."<br>";

          echo "Modulus: ".NUM%$a."<br>";

?>