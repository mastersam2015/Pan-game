<meta name="viewport" content="width=400" />
<script src="jquery.js"></script>

<script>
var blok="";
var blokt = new Array();

function blokf(){
blokt=blok.split(",");
////////console.log(blokt[0]);
}
</script>
<center>
<div align="center" id="trzy" style="display:none;background-color:000000;">

<input type="button" value="jeden" onclick="dotalia2(blokt[1]);$('#trzy').hide();">
<input type="button" value="trzy" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);$('#trzy').hide();">

</div>

<div align="center" id="cztery" style="display:none;background-color:000000;">

<input type="button" value="jeden" onclick="dotalia2(blokt[1]);$('#cztery').hide();">
<input type="button" value="trzy" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);$('#cztery').hide();">
<input type="button" value="cztery" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);dotalia2(blokt[4]);$('#cztery').hide();">


</div>
<script>


function xhtmlx(x){
	x=x-10;
	if (x==1){
		return "<img src='dziewiecwino.jpg'>";
	}
	
	
		if (x==2){
		return "<img src='dziewiecrzaledz.jpg'>";
	}
	
		if (x==3){
		return "<img src='dziewiecdzwon.jpg'>";
	}
	
		if (x==4){
		return "<img src='dziewiecczerwo.jpg'>";
	}
	
		if (x==5){
		return "<img src='dziesiecwino.jpg'>";
	}
	
		if (x==6){
		return "<img src='dziesiecrzaledz.jpg'>";
	}
		if (x==7){
		return "<img src='dziesiecdzwon.jpg'>";
	}
		if (x==8){
		return "<img src='dziesiecczerwo.jpg'>";
	}
	
	
		if (x==9){
		return "<img src='jopekwino.jpg'>";
	}
	
		if (x==10){
		return "<img src='jopekrzaledz.jpg'>";
	}
	
	
		if (x==11){
		return "<img src='jopekdzwon.jpg'>";
	}
	
	
		if (x==12){
		return "<img src='jopekczerwo.jpg'>";
	}
	
	
		if (x==13){
		return "<img src='damawino.jpg'>";
	}
	
		if (x==14){
		return "<img src='damarzaledz.jpg'>";
		
		
	}
	
		if (x==15){
		return "<img src='damadzwon.jpg'>";
	}
	
		if (x==16){
		return "<img src='damaczerwo.jpg'>";
	}
	
		if (x==17){
		return "<img src='krolwino.jpg'>";
	}
	
		if (x==18){
		return "<img src='krolrzaledz.jpg'>";
	}
	
	
		if (x==19){
		return "<img src='kroldzwon.jpg'>";
	}
	
		if (x==20){
		return "<img src='krolczerwo.jpg'>";
	}
	
		if (x==21){
		return "<img src='aswino.jpg'>";
	}
	
		if (x==22){
		return "<img src='asrzaledz.jpg'>";
	}
	
		if (x==23){
		return "<img src='asdzwon.jpg'>";
	}
	
		if (x==24){
		return "<img src='asczerwo.jpg'>";
	}
	
	
}



function figury(x){
	x=x-10;
	if (x==1){
		return "9";
	}
	
	
		if (x==2){
		return "9";
	}
	
		if (x==3){
		return "9";
	}
	
		if (x==4){
		return "9";
	}
	
		if (x==5){
		return "10";
	}
	
		if (x==6){
		return "10";
	}
		if (x==7){
		return "10";
	}
		if (x==8){
		return "10";
	}
	
	
		if (x==9){
		return "j";
	}
	
		if (x==10){
		return "j";
	}
	
	
		if (x==11){
		return "j";
	}
	
	
		if (x==12){
		return "j";
	}
	
	
		if (x==13){
		return "d";
	}
	
		if (x==14){
		return "d";
		
		
	}
	
		if (x==15){
		return "d";
	}
	
		if (x==16){
		return "d";
	}
	
		if (x==17){
		return "k";
	}
	
		if (x==18){
		return "k";
	}
	
	
		if (x==19){
		return "k";
	}
	
		if (x==20){
		return "k";
	}
	
		if (x==21){
		return "a";
	}
	
		if (x==22){
		return "a";
	}
	
		if (x==23){
		return "a";
	}
	
		if (x==24){
		return "a";
	}
	
	
}



function wagap(x){

x=x-10;
	
	if (x==1){
		return 1;
	}
	
	
		if (x==2){
		return 1;
	}
	
		if (x==3){
		return 1;
	}
	
		if (x==4){
		return 1;
	}
	
		if (x==5){
		return 2;
	}
	
		if (x==6){
		return 2;
	}
		if (x==7){
		return 2;
	}
		if (x==8){
		return 2;
	}
	
	
		if (x==9){
		return 3;
	}
	
		if (x==10){
		return 3;
	}
	
	
		if (x==11){
		return 3;
	}
	
	
		if (x==12){
		return 3;
	}
	
	
		if (x==13){
		return 4;
	}
	
		if (x==14){
		return 4;
		
		
	}
	
		if (x==15){
		return 4;
	}
	
		if (x==16){
		return 4;
	}
	
		if (x==17){
		return 5;
	}
	
		if (x==18){
		return 5;
	}
	
	
		if (x==19){
		return 5;
	}
	
		if (x==20){
		return 5;
	}
	
		if (x==21){
		return 6;
	}
	
		if (x==22){
		return 6;
	}
	
		if (x==23){
		return 6;
	}
	
		if (x==24){
		return 6;
	}
	
	
}



function taliar(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}


var w,tpom,tlicz,taliap;
var talia = new Array();

function losuj(){

<?
$w=1;
$taliap="";
$tlicz=0;
while($w==1){
$tpom=rand(11, 34);
if(strstr($taliap, $tpom)){


}else{

$taliap=$taliap."".$tpom.",";
////////console.log(tpom);
if($tlicz>=11){
$w=2;
}
$tlicz=$tlicz+1;
}

}


$fp = fopen("player1.txt", "w");
fputs($fp, $taliap);
fclose($fp);

//$taliap=",".$taliap;;
//echo $tpom;


$fp = fopen("stul.txt", "w");
fputs($fp, "");
fclose($fp);
?>
}

losuj();
taliap="<? echo $taliap; ?>";

//talia=taliap.split(",");
<?
/*
$arr=explode(",",$taliap);
for($i=0;$i<=11;$i++){
	if($i==0){
	echo "talia[".$i."]=".$arr[$i].";
";
	}else{
echo "talia[".$i."]=".$arr[$i].";
";
	}	
}
talia[12]="";
*/
?>

//////console.log(talia);
</script>

<style>
#karty.img{
margin-left:20px;
}
</style>

<div id="talia"></div>

<br><br><br>
<div id="karty"></div>


<script>
var taliax = new Array();
var taliar = new Array();
var dotaliar="";
var licz=0;
var dotaliar2="";
var dotaliar3="";
var pompa3="";

function waga(x){
//alert(licz);
////////console.log(taliax);
licz=0;
blok="";
for(var i=0;i<=taliax.length ;i++){
if(figury(taliax[i]) == figury(x)){

licz++;

blok=blok+","+taliax[i];

}
}
//alert(blok);

return licz;
}




function dotalia2(x){

pompa3="";


//alert(wagap(taliar[taliar.length-2]) );
if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){
////////console.log(taliar[taliar.length-2]);

//$("#talia").html('');
//$("#karty").html('');


dotaliar=dotaliar+x+",";
//alert(dotaliar);
taliar=dotaliar.split(",");
for(var i=0;i<=taliar.length ;i++){
if(xhtmlx(taliar[i])!=undefined){
//alert((i-2)+" "+taliar.length);
if((taliar.length - 2) == i){
//alert(i);
pompa3=pompa3 +   "<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>"+",";
}else{
pompa3=pompa3  +  xhtmlx(taliar[i])+",";
}
}
}

//----------tutaj
$.post( "stul.php", { karty: dotaliar } );
taliap=taliap.replace(x+",","");
//taliap=taliap.replace(","+x,"");
//alert(taliap);
talia=taliap.split(",");
kartyhtml();
}



}











var pompa9="";

var fix="";
var stult = new Array();
var stulpom="";
var taliarb = new Array();
var pompa10="";



function ztalia(x){
dotaliar2="";
dotaliar3="";
pompa9="";
stulpom="";
//alert(1);
$("#talia").html('');
//$("#karty").html('');



for(var i=0;i<=taliar.length ;i++){
if(xhtmlx(taliar[i])!=undefined){
	if(taliar[i].indexOf(x) != -1){
		//alert(1);
	}else{
dotaliar2=dotaliar2+","+taliar[i];
}
}
}

fix="<span onclick=\"ztalia("+x+")\">"+xhtmlx(x)+"</span>,";

//alert(fix);
//dotaliar2=dotaliar2.replace(fix,"");
//dotaliar=dotaliar.replace(fix,"");
dotaliar=dotaliar.replace(x+",","");
dotaliar2=","+dotaliar2;
taliar=dotaliar2.split(",");
////////console.log(dotaliar);
//taliar=taliar.sort((a, b) => a - b);
for(var i=0;i<=taliar.length ;i++){
if(taliar[i]!=undefined){
	if(taliar[i]!=""){
//alert((i-2)+" "+taliar.length);
if((taliar.length - 1) == i){
//alert(i);
//$("#talia").html($("#talia").html() +   "<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>");
//pompa9=pompa9+"<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>"+",";
}else{
//$("#talia").html($("#talia").html() +  xhtmlx(taliar[i]));
//pompa9=pompa9+xhtmlx(taliar[i])+",";
}
}else{
	
//pompa9="&nbsp";	
}
}
}


for(var i=0;i<=talia.length-1 ;i++){
if(xhtmlx(talia[i])!=undefined){
dotaliar3=talia[i]+","+dotaliar3;
}
}

dotaliar3=dotaliar3+x+",";
taliap=dotaliar3;
//taliap=taliap.replace(x+",","");
//alert(taliap);
talia=dotaliar3.split(",");


stult=pompa9.split(",");
//////console.log(stult);
for(var i=0;i<=stult.length ;i++){
if(stult[i]!=undefined){
	//alert(stult[i].indexOf(x));
	if(strstr(stult[i], x)==false){
		//alert(1);
		stulpom=stulpom+stult[i]+",";
		
	}else{
//alert(strstr());

}

}
}
//alert(stulpom);
//alert(stulpom);
taliarb=stulpom.split(",");
pompa10="";
////console.log(taliarb);
for(var i=0;i<=taliarb.length-1 ;i++){
if(taliarb[i]!=undefined){
//alert((i-2)+" "+taliar.length);
if((taliarb.length - 1) == i){
//alert(i);
//$("#talia").html($("#talia").html() +   "<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>");
pompa10=pompa10+"<span onclick=\"ztalia("+taliarb[i]+")\">" +xhtmlx(taliarb[i])+ "</span>"+",";
}else{
//$("#talia").html($("#talia").html() +  xhtmlx(taliar[i]));
pompa10=pompa10+xhtmlx(taliarb[i])+",";
}
}else{pompa10="";}
}
//dotaliar=pompa9;

/*
if(dotaliar2==""){
	dotaliar2="nbsp";
}
*/

dotaliar2=dotaliar2+",";
$.post( "stul.php", { karty: dotaliar2 } );
kartyhtml();
}


//alert(strstr("van","k"));



function dotalia(x){

pompa3="";

if (waga(x)==3){
$("#trzy").show();
blokf();
}else if(waga(x)==4){
$("#cztery").show();
blokf();
}else{
////////console.log(wagap(x)+" i "+wagap(taliar[taliar.length-2]));
//alert(wagap(taliar[taliar.length-2]) );
if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){


//$("#talia").html('');
//$("#karty").html('');


dotaliar=dotaliar+x+",";//-------------------------------tutaj cos
//alert(dotaliar);
taliar=dotaliar.split(",");

for(var i=0;i<=taliar.length ;i++){
if(xhtmlx(taliar[i])!=undefined){
//alert((i-2)+" "+taliar.length);
if((taliar.length - 2) == i){
//alert(i);
pompa3=pompa3 +   "<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>"+",";
}else{
pompa3=pompa3  +  xhtmlx(taliar[i])+",";
}
}
}

//----------tutaj
$.post( "stul.php", { karty: dotaliar } );
taliap=taliap.replace(x+",","");
//taliap=taliap.replace(","+x,"");
//alert(taliap);
talia=taliap.split(",");
kartyhtml();
}

}
////////console.log(dotaliar);
////////console.log(x);
}

var pompa="";

function kartyhtml(){
pompa=""
taliax=talia.sort((a, b) => a - b);

for(var i=0;i<=taliax.length;i++){
if(xhtmlx(taliax[i])!=undefined){

/*
for(var i=0;i<=taliax.length;i++){
if(xhtmlx(taliax[i])!=undefined){
$("#karty").html($("#karty").html() + "<span onclick=\"dotalia("+taliax[i]+")\">" + xhtmlx(taliax[i])+ "</span>");
*/
pompa=pompa+taliax[i]+",";
}
}
$.post( "player1.php", { karty: pompa } );
////////console.log(talia);
}
kartyhtml();

var pompa2;
var pompa6;
function reflesh(){
pompa3="";
$("#karty").html('');
$("#talia").html('');
$.post( "player1.txt", function( data ) {
pompa2=data;
});
if(pompa2 != undefined){
taliax=pompa2.split(",");
}
taliax=taliax.sort((a, b) => a - b);
for(var i=0;i<=taliax.length;i++){
if(xhtmlx(taliax[i])!=undefined){
$("#karty").html($("#karty").html() + "<span onclick=\"dotalia("+taliax[i]+")\">" + xhtmlx(taliax[i])+ "</span>");



}
}


$.post( "stul.txt", function( data ) {

pompa9=data;

//alert(data);
});

//pompa9=","+pompa9;


taliar=pompa9.split(",");






for(var i=0;i<=taliar.length ;i++){
if(xhtmlx(taliar[i])!=undefined){
	
//alert((i-2)+" "+taliar.length);
if((taliar.length - 2) == i){
//alert(i);
pompa3=pompa3 +   "<span onclick=\"ztalia("+taliar[i]+")\">" +xhtmlx(taliar[i])+ "</span>"+",";
}else{
pompa3=pompa3  +  xhtmlx(taliar[i])+",";
}

}
}
$("#talia").html(pompa3);
console.log(pompa9);
//dotaliar=pompa9;
dotaliar=pompa9;

}

setInterval(reflesh, 500);

$( document ).ready( reflesh );
$( document ).ready( kartyhtml );
$( document ).ready( dotalia );
$( document ).ready( ztalia );
$( document ).ready( dotalia2 );
</script>