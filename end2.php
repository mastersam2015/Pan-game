
<?
$x=$_POST["id"];
if(!empty($x)){
$fp = fopen("end2.txt", "w");
fputs($fp, $x);
fclose($fp);
}

?>