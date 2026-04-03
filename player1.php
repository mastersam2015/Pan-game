
<?
$x=$_POST["karty"];
if(is_int($x)){
$fp = fopen("player1.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

