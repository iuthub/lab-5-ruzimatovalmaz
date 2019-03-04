<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
if($_REQUEST["name"] == "" || $_REQUEST["creditNumber"] == "" || $_REQUEST["comboBox"] == ""|| $_REQUEST["card"] == "")
{
header("Location:redirect.html");
}
	else{
$name = $_POST["name"];
$creditNumber =  $_POST["creditNumber"];
$section =$_POST["comboBox"];
$creditType = $_POST["card"];

$myFile = fopen("suckerInfo.txt", "a") or die ("No Suckers Info!");
fwrite($myFile, $name.";".$section.";".$creditNumber.";".$creditType."\n");
fclose($myFile);
 ?>


<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $section ?></dd>

			<dt>Credit Card</dt>
			<dd>Credit Card Number: <?= $creditNumber?><br>
				Credit Card Type: <?= $creditType ?></dd>
		</dl>
		<pre font-size="20px">Here are the all suckers:		
			<?php 
				$myFile = fopen("suckerInfo.txt", "r");
				echo "<br>";
				while (!feof($myFile)){
					echo fgets($myFile);
				}
				fclose($myFile);
			 }?>
		</pre>
<h4 align="center"><a href="buyagrade.html">Back</a></h4>
	</body>
</html>  