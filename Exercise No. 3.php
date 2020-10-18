<?php
	echo '<h1>Finding GCD</h1>';
?>
<form action= "" method="post">
		Input first number:
		 <br>
	<input type="text" name="n1" value =""><br>
		Input second number:
		 <br>
	<input type="text" name="n2" value =""><br>
	<input type="submit" name="getgcd" value ="submit">
</form>
<?php
if(isset($_POST['getgcd'])) 
{ 
	$n1 = $_POST['n1']; //textbox 1
	$n2 = $_POST['n2']; //textbook 2
	function getgcd($n1, $n2)
	{
		if($n2 == 0)
			return $n1;
		if($n2!= 0)
			return getgcd($n2, $n1%$n2);
	}

    $gcd = getgcd($n1, $n2);
	
	$gcd = getgcd($n1, $n2); //GCD logic
	echo "GCD of $n1 and $n2 is ", $gcd; 
}

?>