
<?
$x=$_POST["karty"];

$fp = fopen("player1.txt", "w");
fputs($fp, $x);
fclose($fp);


?>

