<html>
<body bgcolor="#FCF">
<p>
  <?php
$username = $_POST[username];
$password = $_POST[password];
if(($username == "root") && ($password == "apple"))
	{
		echo "<div align=center>";
		echo "login success"."<br>";
		echo "<a href=Mainfunction.html>ยินดีต้อนรับ</a>";
		echo "</div>";
	}
	else
	{
		echo "error login";
	}

?>
</p>

<p align="center"><img src="img/329468.jpg" width="670" height="385"></p>
</body>
</html>