<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    function find_missing_letter(array $array): string
    {
        foreach ($array as $index => $letter) {
            $letter++;

            if ($letter !== $array[$index + 1]) {
                return $letter;
            }
        }
    }

    echo find_missing_letter(["m", "n", "p"]);

    ?>

</body>

</html>