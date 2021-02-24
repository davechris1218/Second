<!DOCTYPE html>
<html lang="en">

<body>

      <?php

      for ($i = 1; $i <= 100; $i++) {
            $num = 0;
            for ($j = 1; $j <= $i; $j++) {
                  if ($i % $j == 0) {

                        $num++;
                  }
            }
            if ($num == 2) {

                  echo $i . " = bilangan prima <br/>";
            }
      }

      ?>

</body>

</html>