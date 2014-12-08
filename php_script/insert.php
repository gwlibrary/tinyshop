<?php
$conn=mysql_connect("localhost", "root", "111");
if (!$conn)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("shop", $conn);

$sql="INSERT INTO users (name, password)
VALUES
('$_POST[name]','$_POST[password]')";

if (!mysql_query($sql,$conn))
{
	die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($conn)
?>
