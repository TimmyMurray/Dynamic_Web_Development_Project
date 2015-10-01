<html>
<body>
<form method="post" action="display()">
<input type="text" name="studentname">
<input type="submit" value="click">
</form>
<?php
function display()
{
echo "hello".$_POST["studentname"];
}
display();
?>
</body>
</html>