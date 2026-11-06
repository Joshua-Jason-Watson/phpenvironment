<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php
        /**
         * Add two values
         * @param int|float $x Value 1
         * @param int|float $y Value 2
         * @return float|int The sum of the two values
         */
        function add(int|float $x, int|float $y): int|float {
            return $x + $y;
        }
        /**
         * Summary of subtract
         * @param int|float $x
         * @param int|float $y
         * @return float|int
         */
        function subtract(int|float $x, int|float $y): int|float {
            return $x - $y;
        }
        /**
         * Summary of multiply
         * @param int|float $x
         * @param int|float $y
         * @return float|int
         */
        function multiply(int|float $x, int|float $y): int|float {
            return $x * $y;
        }
        /**
         * Summary of divide
         * @param int|float $x
         * @param int|float $y
         * @return float
         */
        function divide(int|float $x, int|float $y): int|float {    
            return $x / $y;
        }
        /**
         * Summary of modulus
         * @param int|float $x
         * @param int|float $y
         * @return int
         */
        function modulus(int|float $x, int|float $y): int|float {  
            return $x % $y;
        }
    ?>
    <div>13 + 5 = <?= add(13, 5) ?></div>
    <div>12 - 5 = <?= subtract(12, 5) ?></div>
    <div>7 * 8 = <?= multiply(7, 8) ?></div>
    <div>12 + 2 = <?= divide(12, 2) ?></div>
    <div>12 / 0 = Throws an exception
    <?php
        // Division by zero throws an error
        // echo divide(12, 0);
    ?>
    </div>
    <div>21 + 3 = <?= modulus(12, 3) ?></div>
</body>
</html>
