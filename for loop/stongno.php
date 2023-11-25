ot.
<?Php
$n1=$_POST['n1'];
echo "<form method=POST action=''>
<input type=text name=n1 value='$n1'> 
<input type=submit value=Submit>
</form>";
function fact($n){
$factorial=1;
for ($i=1; $i<=$n;$i++){
	$factorial=$factorial*$i;
}
return $factorial;
}
$sum=0;
$n2=$n1;
while($n1>0){
	$d=$n1%10; // reminder of division 
	$sum = $sum  + fact($d);
	$n1=floor($n1/10); // floor value
}
if($n2==$sum){
	
echo "$n2 is  a Strong Number ";	
}else{
echo "$n2 is NOT a Strong Number ";		
}