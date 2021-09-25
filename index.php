<?php
    for ($i = 1; $i <= 15; ++$i) {
        $numbers[] = $i;
    }
    
    foreach ($numbers as $number) {
        echo '<li>' . $number . '</li>';
    }
?>