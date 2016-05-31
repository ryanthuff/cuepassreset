<?php
/**
 * 
 * CUE PASSWORD & PIN RESET
 * @author Ryan Huff <ryan@ryanthomashuff.com>
 * @version 3.0.1
 * 
 */
//*******************************************
//    CHANGE THE PIN AND PASSWORD VALUES
//    AS NEEDED AND HOST THIS FILE IN THE 
//    FOLDER LOCATION AS THE users.txt FILE.
//
//    THIS IS AS-IS SOFTWARE, NO WARRANTIES
//    OF ANY SORT, USE AT YOUR OWN RISK!
//*******************************************

$linePin = null;
$linePassword = null;
$users = file('users.txt');

foreach ($users as $user) {
	$linePin .= 'username ' . strtolower(trim($user)) . ' pin ' . '12345' . "\n";
        $linePassword .= 'username ' . strtolower(trim($user)) . ' password ' . '12345' . "\n";

}
echo "\n<--------- PINS --------->\n";
echo $linePin;
echo "\n<--------- PASSWORDS --------->\n";
echo $linePassword;
?>
