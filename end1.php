
<?
$x=$_POST["id"];
if(!empty($x)){
$fp = fopen("end1.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>

