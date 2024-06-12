//task 1
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
//task 2

$numbers = [1, 23, 44, 88, 13, 11, 7, 8];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " ";
    }
}

