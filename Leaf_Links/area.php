<body>

		<h1>PHP-sida 4</h1>

		<form action="area.php" method="post">

			<p>Längd: <input type="text" name="length" size="20" /></p>

			<p>Bredd: <input type="text" name="width" size="20" /></p>

			<p><input type="submit" value="CALCULATE" name="calc" /></p>

		</form>




<?php



if (isset($_POST['calc']))
{
	$length= $_POST['length'];
	$width= $_POST['width'];
	echo "length:" . $length. "<br><br>";
	echo "width:" . $width. "<br><br>";
	

function perimeter($length, $width)
{

return  2* ($length+ $width);

}
$perimeter= perimeter($length, $width);

echo "perimeter:" . $perimeter. "<br>", "<br>";
	
function area($length, $width)
{
	return $length* $width;
}
$area = area($length, $width);
echo "area:" . $area ;

}
 
?>



	</body>