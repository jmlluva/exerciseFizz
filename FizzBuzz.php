<?php
for ($i = 1; $i <= 100; $i++)
{
    if (isDivisibleForThree($i) && isDivisibleForFive($i)) {
        echo "FizzBuzz";
    }
    else if (isDivisibleForThree($i)) {
        echo "Fizz";
    }
    else if (isDivisibleForFive($i)){
        echo "Buzz";
    }
    else {
        echo $i;
    }
    
    echo"<br />";
}

function isDivisibleForThree (int $num): bool{
    
    return ($num % 3 == 0);
}

function isDivisibleForFive (int $num): bool {
    
    return ($num % 5 == 0);
}
?>
