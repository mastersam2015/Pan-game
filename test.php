while($w==1){
$tpom=rand(11, 34);
//$tpom=$tpom.",";
if(strstr($taliap, $tpom)){


}else{
	$tlicz=$tlicz+1;
	$taliap=$taliap."".$tpom.",";
	/*
if($tlicz<=11){
	$tlicz=$tlicz+1;
$taliap=$taliap."".$tpom.",";
}
////////console.log(tpom);
if($tlicz>=12){
	$tlicz=$tlicz+1;
$taliap2=$taliap."".$tpom.",";
}
*/


if($tlicz>=24){
$w=2;
}

}

}