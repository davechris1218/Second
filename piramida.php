<!DOCTYPE html>
<html lang="en">

<body>
      <?php

      $star = 5;
      echo "Input tinggi segitiga: 5" . "<br>" . "<br>";
      for ($x = $star; $x > 0; $x--) {
            for ($i = 1; $i <= $x; $i++) {
                  echo "&nbsp";
            }
            for ($y = $star; $y >= $x; $y--) {
                  echo "*";
            }
            echo "<br>";
      }

      echo "<br>";

      $star = 7;
      echo "Input tinggi segitiga: 7" . "<br>" . "<br>";
      for ($x = $star; $x > 0; $x--) {
            for ($i = 1; $i <= $x; $i++) {
                  echo "&nbsp";
            }
            for ($y = $star; $y >= $x; $y--) {
                  echo "*";
            }
            echo "<br>";
      }

      ?>

</body>

</html>