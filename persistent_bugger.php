<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function persistence(int $num): int
    {
        $num = (int)$num;
        $total = 1;

        $numArray = str_split($num);
        if (true === $numArray) {
            return 0;
        }
        $numArrayCount = count($numArray);
        $count = 0;

        if ($numArrayCount > 1) {
            for ($i = 0; $i < $numArrayCount; $i++) {
                $total *= $numArray[$i];
            }
            $count++;
            if (strlen($total) > 1) {
                return $count + persistence($total);
            }
            return $count;
        }
        return $count;
    }

    echo persistence(39);

    ?>

</body>

</html>