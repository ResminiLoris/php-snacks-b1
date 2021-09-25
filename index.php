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
    
    function get_average($votes){
        return round(array_sum($votes) / count($votes));
    };
    
    foreach ($students as $student ){
        echo $student["name"] . "<br>";
        echo "media voti: " . get_average($student["votes"]) . "<br>";  
    };
?>
