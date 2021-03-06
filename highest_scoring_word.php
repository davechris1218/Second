<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    function high($x)
    {
        $words = explode(" ", strtolower($x));
        $max = 0;
        $maxWord = '';
        foreach ($words as $w) {
            $value = 0;

            for ($i = 0, $len = strlen($w); $i < $len; $i++) {
                $value += (ord($w[$i]) - ord('a'));
            }

            if ($value > $max) {
                $max = $value;
                $maxWord = $w;
            }
        }
        return $maxWord;
    }

    echo high("test");

    ?>

</body>

</html>