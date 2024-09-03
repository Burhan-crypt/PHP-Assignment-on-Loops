<?php
 $str = "PHP";
    $length = strlen($str);        
    for ($a=$length-1; $a>=0 ; $a--) { 
        echo ($str[$a]);
    }

/* $lenght is a variable which is set to strlen a function of php
    $a is incremented and $a is set to length-1  and  because in PHP language
    a character strats from 0 so the P IS AT 0, H IS AT 1 AND P IS 2ND PLACE,
    but their lenght is 3 so that we will substratct the lenght by 1 so that 
    3-1 is 2, in reverse loop due to $a's incrementation 2 is set to P from revere
    then 2-1 is 1 and 1 is set to H after that 1-1 is 0 and 0 is set to P in the start
    so the result will be PHP*/

?>
