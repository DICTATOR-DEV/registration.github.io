<html>
<head></head>
<body>
<form method="POST" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name">
<input type="submit" name="submit">
</form>
<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST["name"];
if ($name=="rutuja" || $name=="Rutuja")
echo "Username is correct";
else
echo "Username is not correct";
}
?>
</body>
</html>