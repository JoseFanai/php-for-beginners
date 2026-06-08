<?php 

// use hmang hian admin leh customer folder a mi class kha kan la chhuak a.
// as hmang hian a hming thar tur kan pe.
use OOP\Namespace\admin\user as Admin;
use OOP\Namespace\customer\user as Customer;

// tunah chuan a hrang ve ve in kan hmang thei ta
$hotu = new Admin();
$hotu->intro();

$dawrtu = new Customer();
$dawrtu->intro();

?>