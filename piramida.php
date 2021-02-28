<!DOCTYPE html>
<html lang="en">

<body>
      <?php

      echo "<pre>";
      echo "Input tinggi segitiga: 5" . "<br>" . "<br>";
      for ($i = 1; $i < 5; $i++) {
            $space = str_repeat(" ", 5 - $i);
            $star = str_repeat("*", ($i - 1) * 2 + 1);
            echo $space . $star . "<br>";
      }
      echo "</pre>";

      echo "<br>";
      
      echo "<pre>";
      echo "Input tinggi segitiga: 7" . "<br>" . "<br>";
      for ($i = 1; $i < 7; $i++) {
            $space = str_repeat(" ", 7 - $i);
            $star = str_repeat("*", ($i - 1) * 2 + 1);
            echo $space . $star . "<br>";
      }
      echo "</pre>";

      ?>

</body>

</html>