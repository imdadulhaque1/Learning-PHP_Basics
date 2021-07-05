<?php
          // $num = (int)readline("Enter an Integer number: ");

          $marks = -9;
          if($marks >= 80 && $marks <=100){
                    echo "A+";
          }
          elseif($marks >= 75 && $marks <=79){
                    echo "A";
          }
          elseif($marks >= 70 && $marks <=74){
                    echo "A";
          }
          elseif($marks >= 65 && $marks <=69){
                    echo "B+";
          }
          elseif($marks >= 60 && $marks <=65){
                    echo "B";
          }
          elseif($marks >= 55 && $marks <=59){
                    echo "B-";
          }
          elseif($marks >= 50 && $marks <=54){
                    echo "C+";
          }
          elseif($marks >= 45 && $marks <=49){
                    echo "C";
          }
          elseif($marks >= 40 && $marks <=44){
                    echo "D";
          }
          elseif($marks>= 0 && $marks <40){
                    echo "Failed!";
          }
          else{
                    echo "Please, Enter a valid  marks!";
          }

?>