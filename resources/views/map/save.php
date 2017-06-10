<html>
<body>


<?php
$con = mysql_connect("event","coordinates","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cis_id", $con);

$sql="INSERT INTO latlng (latlng)
VALUES
('$_POST[latlng]')";

if (!mysql_query($sql,$con))
{
    die('Error: ' . mysql_error());
}
echo "Coordinates saved";

mysql_close($con)
?>
</body>
</html>