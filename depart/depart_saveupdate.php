<html>
<body bgcolor="#FFFF66">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update depart_tbl set dep_name='$dep_name' where dep_id ='$Empno' ";
	 $result = mysql_query($sql);
	  if ($result)
	   {
		echo "การแก้ไขข้อมูลในฐานข้อมูลประสบความสำเร็จ <br>";
		mysql_Close($link);

		
	   }
	  else
	   {
		echo "ไม่สามารถแก้ไขข้อมูลในฐานข้อมูลได้  <br>";
	   }
       	 echo "<a href=depart.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=depart_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";

?>
<img src="../img/maxresdefault.jpg" width="298" height="245" /> 
</div>
</body>
</html>