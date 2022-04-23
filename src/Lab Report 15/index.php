<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php array</title>
</head>
<body>
	<?php
$original = array( '19','8','9','12','1' );
echo 'Original array : <br>';
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo "<br> After inserting '$' the array is : <br>";
foreach ($original as $x) 
{echo "$x ";}
?>
</body>
</html>