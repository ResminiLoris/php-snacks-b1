<?php
    /*function print_numbers($min,$max){
        for ($i = $min; $i <= $max; ++$i) {
            $numbers[] = $i;
        }
        foreach ($numbers as $number) {
            echo '<li>' . $number . '</li>';
        }
    }
    print_numbers(0,15);*/

    $students=[
        [
            "name"=>"loris",
            "votes"=>["9","6","8",]
        ],
        [
            "name"=>"lex",
            "votes"=>["10","5","2",]
        ],
        [
            "name"=>"leo",
            "votes"=>["7","6","6",]
        ],
        [
            "name"=>"simo",
            "votes"=>["3","4","7",]
        ],
    ];
    
    foreach ($students as $student ){
        echo $student["name"] . "<br>";
        $average = 0;
        foreach ($student["votes"] as $vote )
        $average = $average + $vote;
        echo 'MEDIA:' .  round($average / count($student["votes"])) . "<br>";
    };
    ?>
