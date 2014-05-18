<?php
/*
CodeUp
Dev: Frank Pigeon
Date: May 17 2014
Description:
Weekend Challenge
Black jack
sum of the whole total of the hand
only work inside the function
loop thru cards and figure out value of the card
card - suite
a dash is the delimiter
*/


//constants
define ('A', 11);
define ('A_LOW', 1);
define ('K', 10);
define ('Q', 10);
define ('J', 10);

//this is your hand
$hand = array('K-H', 'K-D', '1-C', '1-S', 'A-H');

function getTotal($hand){   
    /* Description:
    loop through hand and calculate total value
    use "explode" function to separate card suit and value
    aces count as 11 unless you are over 21 and then they count as 1
    K, Q, and J count as 10
    numeric cards count as their value
    */

    //variables
    $total = 0; //hold he sum of entire hand
    
    foreach ($hand as $card) {        
        $card_value = $card[0]; //assign value of card to first index in array

        explode('-', $card);
        echo '**************' . PHP_EOL;
        echo "card's value is $card_value\n";
        
        if (!is_numeric($card_value)){
            if ($card_value == 'A' && $total > 21) {
                $card_value = A_LOW;    
            } //end of Low Ace 
            elseif ($card_value == 'A' && $total <= 21) {
                 $card_value = A;
             } //high Ace
             else {
                $card_value = K;
            } //end of King, Queen, or Jack
            
            echo "card's new value is $card_value\n";            
        } //end of not numeric
        
        //calculations
        echo '--------------' . PHP_EOL;
        $total = $total + $card_value;
        echo "Sum is $total\n";       
    } //end of cards   
    return $total;
} // end of Get Total

$grand_total = getTotal($hand) . PHP_EOL;
echo '*************' . PHP_EOL;
echo '*************' . PHP_EOL;        
echo "GRAND TOTAL IS $grand_total\n";














