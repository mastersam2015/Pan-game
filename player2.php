<?
$x=$_POST["karty"];
if(!empty($x)){
$fp = fopen("player2.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

