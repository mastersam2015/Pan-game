
<?
$x=$_POST["karty"];
if(!empty($x)){
$fp = fopen("stul.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

