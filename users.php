<?php  

require('user.php');

// STEP 1 :
$NewUser = new User();
$NewUser->setId('koko');
$NewUser->setEmail('toto@koko.lo');
$NewUser->setDate('11/11/11');

// STEP 2 :
$NewClient = new Client();
$NewClient->setID('2');
$NewClient->setEmail('2');
$NewClient->setDate('2');

$NewClient2 = new Client();
$NewClient->setID('3');
$NewClient->setEmail('3');
$NewClient->setDate('3');

var_dump($NewClient2);
var_dump($NewClient);

?>