<?php
for ($i = 1; $i <= 100; $i++)
{
    $div3 = 3;
    $div5 = 5;
    
    if (isDivisibleFor($i,$div3) && isDivisibleFor($i,$div5)) {
        echo "FizzBuzz";
    }
    else if (isDivisibleFor($i,$div3)) {
        echo "Fizz";
    }
    else if (isDivisibleFor($i,$div5)){
        echo "Buzz";
    }
    else {
        echo $i;
    }
    
    echo"<br />";
}

function isDivisibleFor (int $num, int $div): bool {
    
    return ($num % $div == 0);
}
?>
