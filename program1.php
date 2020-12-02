<?php
if(isset($_POST['submit'])){
	$ser=$_POST['valn'];

	for($i=1;$i<=5;$i++){
		$var='p'.$i;
		if($_POST[$var] <50){
			$ser=floor($ser/2);
			if($ser<1){
				$ser=1;
			}
		}
		else{
			$ser=floor(2*$ser+1);
			if($ser < 1){
				$ser=1;
			}
		}

	}
	echo "Out-Put: :".$ser;
}

?>
<form method="post" action="">

	Input val of N<input type="text" name="valn"><br>
	Input Process<br>
	<input type="text" name="p1"><br>
	<input type="text" name="p2"><br>
	<input type="text" name="p3"><br>
	<input type="text" name="p4"><br>
	<input type="text" name="p5"><br>
	<br><input type="submit" name="submit">

</form>