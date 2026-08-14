<meta name="viewport" content="width=400" />
<script src="jquery.js"></script>

<script>
var blok="";
var blokt = new Array();

function blokff(){
blokt=blok.split(",");
////////console.log(blokt[0]);
}
</script>
<center>
<div align="center" id="trzy" style="display:none;background-color:000000;">

<input type="button" value="jeden" onclick="dotalia2(blokt[1]);$('#trzy').hide();readyf();">
<input type="button" value="trzy" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);$('#trzy').hide();readyf();">

</div>

<div align="center" id="cztery" style="display:none;background-color:000000;">

<input type="button" value="jeden" onclick="dotalia2(blokt[1]);$('#cztery').hide();readyf();">
<input type="button" value="trzy" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);$('#cztery').hide();readyf();">
<input type="button" value="cztery" onclick="dotalia2(blokt[1]);dotalia2(blokt[2]);dotalia2(blokt[3]);dotalia2(blokt[4]);$('#cztery').hide();readyf();">



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

function strstr(haystack, needle, bool) {
    // Finds first occurrence of a string within another
    //
    // version: 1103.1210
    // discuss at: http://phpjs.org/functions/strstr    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Onno Marsman
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // *     example 1: strstr(‘Kevin van Zonneveld’, ‘van’);
    // *     returns 1: ‘van Zonneveld’    // *     example 2: strstr(‘Kevin van Zonneveld’, ‘van’, true);
    // *     returns 2: ‘Kevin ‘
    // *     example 3: strstr(‘name@example.com’, ‘@’);
    // *     returns 3: ‘@example.com’
    // *     example 4: strstr(‘name@example.com’, ‘@’, true);    // *     returns 4: ‘name’
    var pos = 0;

    haystack += "";
    pos = haystack.indexOf(needle); if (pos == -1) {
        return false;
    } else {
        if (bool) {
            return haystack.substr(0, pos);
        } else {
            return haystack.slice(pos);
        }
    }
}

function taliar(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}


var w,tpom,tlicz,taliap;
var talia = new Array();


<?


$myfile=fopen("player2.txt", "r");
$stare = fread($myfile,filesize("player2.txt"));
fclose($myfile);



$taliap=$stare;
?>



taliap="<? echo $taliap; ?>";


talia=taliap.split(",");
<?

echo "alert('".$stare."');";

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

*/

?>
//talia[12]="";
//////console.log(talia);

function readyf(){
	
	
	$.post( "ready.php", { id: 1 } );
	
	$('#readyb').hide();
}

function readyback(){
	
	
	$.post( "ready.php", { id: 2 } );
	
	$('#readyb').hide();
}

</script>

<style>
#karty.img{
margin-left:20px;
}
</style>

<div id="player2k" ></div>
<br><br><br>
<div id="talia" onclick="blokf=1;$('#readyb').show();"></div>
<br><br><br>

<input type="button" id="readyb" value="ready" style="display:none;" onclick="readyf();blokf=0;">

<br><br><br>
<div id="karty" ></div>

<script>
var taliax = new Array();
var taliar = new Array();
var dotaliar="";
var licz=0;
var dotaliar2="";
var dotaliar3="";
var pompa3="";
var tfix="";
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


var blokf=0;

function dotalia2(x){
	
	
	
	if(blokf==0 && $('#kolej').val()=='ready'){

pompa3="";


//alert(wagap(taliar[taliar.length-2]) );
if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){
readyf();
//$("#talia").html('');
//$("#karty").html('');
pompa="";
for(var i=0;i<=talia.length;i++){
if(xhtmlx(talia[i])!=undefined){


pompa=pompa+talia[i]+",";
}
}
taliap=pompa.replace(x+',', '');

talia=taliap.split(",");
kartyhtml();

dotaliar=dotaliar+x+",";
$.post( "stul.php", { karty: dotaliar } );


}



}
}










var pompa9="";

var fix="";
var stult = new Array();
var stulpom="";
var taliarb = new Array();
var pompa10="";

var dclick=0;
var eclick=0;
var t2fix;
function ztalia(x){
		tfix="";
	if($('#kolej').val()=='ready'){
	dclick++;
	if (dclick==1){
dotaliar2="";
dotaliar3="";
pompa9="";
stulpom="";
//alert(1);
$("#talia").html('');
//$("#karty").html('');


	tfix="";
for(var i2=0;i2<=talia.length-1 ;i2++){
	if(xhtmlx(talia[i2])!=undefined){
tfix=tfix+talia[i2]+",";
}
}
dotaliar2=dotaliar.replace(x+',', '');
tfix=tfix+x+",";
//dotaliar2=dotaliar2+",";
$.post( "stul.php", { karty: dotaliar2 } );
talia=tfix.split(",");
kartyhtml();
}
}
console.log(tfix);
}

//alert(strstr("van","k"));





function dotalia(x){
	
	if(blokf==0 && $('#kolej').val()=='ready'){

dclick++;
pompa3="";

if (waga(x)==3){
	if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){
	//readyback();
$("#trzy").show();
blokff();
	}
}else if(waga(x)==4){
	//readyback();
	if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){
$("#cztery").show();
blokff();
	}
}else{
	
	if (dclick==1){
////////console.log(wagap(x)+" i "+wagap(taliar[taliar.length-2]));
//alert(wagap(taliar[taliar.length-2]) );
if(wagap(x)>=wagap(taliar[taliar.length-2]) || wagap(taliar[taliar.length-2]) == undefined){

readyf();
//$("#talia").html('');
//$("#karty").html('');
pompa="";
for(var i=0;i<=talia.length;i++){
if(xhtmlx(talia[i])!=undefined){


pompa=pompa+talia[i]+",";
}
}
taliap=pompa.replace(x+',', '');

talia=taliap.split(",");
kartyhtml();

dotaliar=dotaliar+x+",";
$.post( "stul.php", { karty: dotaliar } );


}

}
////////console.log(dotaliar);
////////console.log(x);
}
}
}

var pompa="";

function kartyhtml(){
pompa="";
taliax=talia;

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

$.post( "player2.php", { karty: pompa } );

////////console.log(talia);
}
//kartyhtml();

var pompa2;
var pompa6;
var player2t = new Array();




function reflesh(){
	
	$("#player2k").html('');
	eclick++;
	if (eclick==4){
		eclick=0;
		dclick=0;
		
	}
pompa3="";
$("#karty").html('');
$("#talia").html('');
$.post( "player2.txt", function( data ) {
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
//console.log(pompa9);
//console.log(talia);
//dotaliar=pompa9;
dotaliar=pompa9;



$.post( "ready.txt", function( data ) {

if(data==2){
	
	$('#kolej').val('ready');
	
	
}


if(data==1){
	
	$('#kolej').val('wait');
	
}

});


$.post( "player1.txt", function( data ) {


player2t=data.split(",");
//alert(data);
});

for(var i=0;i<=player2t.length-1 ;i++){
	if(player2t[i]!=''){
	$("#player2k").html($("#player2k").html() + "<img src='talia.png'>");
}
	
	

}


$.post( "end1.txt", function( data ) {


$("#end1").val(data);
//alert(data);
});


$.post( "end2.txt", function( data ) {


$("#end2").val(data);
//alert(data);
});


if($("#end1").val()=="ready" && $("#end2").val()=="ready"){
	
	
	location.href="czekaj2.php";
	
}
}

setInterval(reflesh, 500);

//$( document ).ready( dotalia );
//$( document ).ready( readyback );
$( document ).ready( kartyhtml );



function endf(){
	
		$.post( "end2.php", { id: "ready" } );
	

}
	
	
</script>

<input type="text"  style="width:60px;" id="kolej">

<br><br><br>
<input type="button"  style="width:60px;" value="end" onclick="endf();">
<input type="text"  style="width:60px;" id="end1">
<input type="text"  style="width:60px;" id="end2">

<script>

</script>