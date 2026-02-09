
<?
$x=$_POST["id"];
if(!empty($x)){
$fp = fopen("ready.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

