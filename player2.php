<?
$x=$_POST["karty"];

$fp = fopen("player2.txt", "w");
fputs($fp, $x);
fclose($fp);


?>

