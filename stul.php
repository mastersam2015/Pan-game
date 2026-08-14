
<?
$x=$_POST["karty"];

$fp = fopen("stul.txt", "w");
fputs($fp, $x);
fclose($fp);


?>

