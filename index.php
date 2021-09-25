<?php
    function print_numbers($min,$max){
        for ($i = $min; $i <= $max; ++$i) {
            $numbers[] = $i;
        }
        foreach ($numbers as $number) {
            echo '<li>' . $number . '</li>';
        }
    }
    print_numbers(0,15);
?>