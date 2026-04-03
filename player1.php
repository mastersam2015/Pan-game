
<?
$x=$_POST["karty"];
if(!empty($x)){
$fp = fopen("player1.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

