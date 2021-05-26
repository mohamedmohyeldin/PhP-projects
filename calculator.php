<?php
//isset($_POST["do"]) and 
if (!$_POST)
{
echo '
<form action="#" method="post">
<table><tr><td>
<input type=text name="num1">
<input type=text name="num2">
</td></tr><tr><td>
<input type=submit name="do" value="+">
<input type=submit name="do" value="-">
<input type=submit name="do" value="*">
<input type=submit name="do" value="/">
</tr></td>
</form>

';
}
elseif ($_POST["do"] == "-")
{
$equal = $_POST["num1"] - $_POST["num2"];
echo $equal;
}
elseif($_POST["do"] == "+")
{
$equal = $_POST["num1"] + $_POST["num2"];
echo $equal;
}
elseif($_POST["do"] == "*")
{
$equal = $_POST["num1"] * $_POST["num2"];
echo $equal;
}
elseif($_POST["do"] == "/")
{
$equal = $_POST["num1"] / $_POST["num2"];
echo $equal;
}

?>