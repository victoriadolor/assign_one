<?php
	echo '<h1>Calculator</h1>';
	echo 'Input first number: ';
	echo "<br>";
?>
<form action= "" method="post">
	<input type="text" name="n1" value =""><br>
		Input second number:
		 <br>
	<input type="text" name="n2" value =""><br>
	<input type="submit" name="a" value =" + ">
	<input type="submit" name="s" value =" - ">
	<input type="submit" name="m" value =" * ">
	<input type="submit" name="d" value =" / ">
</form>
<?php
if(isset($_POST['a'])) //a is addition button name
{
	$n1 = $_POST['n1']; //textbox 1
	$n2 = $_POST['n2']; //textbox 2
	$add = $n1+$n2; //addition logic
	echo "Addition is ".$add; //calculate
}

if(isset($_POST['s'])) //s is subtraction button name
{
	$n1 = $_POST['n1']; //textbox 1
	$n2 = $_POST['n2']; //textbox 2
	$s= $n1-$n2; //subtraction logic
	echo "Subtraction is ".$s; //calculate
}

if(isset($_POST['m'])) //m is multiplication button name
{
	$n1 = $_POST['n1']; //textbox 1
	$n2 = $_POST['n2']; //textbox 2
	$m = $n1*$n2; //multiplication logic
	echo "Multiplication is ".$m; //calculate
}

if(isset($_POST['d'])) //d is division button name
{
	$n1 = $_POST['n1']; //textbox 1
	$n2 = $_POST['n2']; //textbox 2
	$d = $n1/$n2; //division logic
	echo "Division is ".$d; //calculate
}
?>