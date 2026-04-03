<?
$x=$_POST["karty"];
if(is_int($x)){
$fp = fopen("player2.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

