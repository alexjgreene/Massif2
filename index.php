<?php
$width=10;
$height=5;
$arr=[];
for($i=0;$i<$height;$i++){
	$line=[];
	for($j=0;$j<$width;$j++){
		$line[]=rand(0,100);
	}
	$arr[]=$line;
}
foreach($arr as $line){
	foreach($line as $element){
		echo $element." ";
	}
	?>
	</br>
	<?php
}
?>