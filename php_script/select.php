<?php
$conn=mysql_connect("localhost", "root", "111");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
$select_str = "select * from users";
$result=mysql_db_query("shop", $select_str, $conn);
if (!$result) {
	echo "failed";
}
echo $result;
while ($row=mysql_fetch_row($result))
{
	for ($i=0; $i<mysql_num_fields($result); $i++ )
	{
		echo $row[$i];
	}
}
mysql_free_result($result);
mysql_close($conn);  
?> 
