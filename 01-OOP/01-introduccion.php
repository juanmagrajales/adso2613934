<?php
# Liner programing

$num1 = 54;
$num2 = 32;

echo "{num1} * {num2} =" . ($num1 * $num2);
echo "<br>";
$string = "hello";
echo "MD5({$string})". md5($string);
echo "<br>";
echo "PASSWORD_HASH({$string})=" . password_hash($string, PASSWORD_DEFAULT);
echo "<br>";
$hash = password_hash($string, PASSWORD_DEFAULT);

IF (password_verify($string, $hash )){
    echo "verified successful";
}
#

#Structured programing

#Object oriented programing

?>