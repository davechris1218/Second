<!DOCTYPE html>
<html lang="en">

<body>
      <?php

      echo "Bilangan Prima :" . "<br>";

      for ($i = 1; $i <= 100; $i++) {
            $num = 0;
            for ($j = 1; $j <= $i; $j++) {
                  if ($i % $j == 0) {

                        $num++;
                  }
            }
            if ($num == 2) {

                  echo $i . "<br>";
            }
      }

      ?>

</body>

</html>