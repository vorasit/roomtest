<html>
<body bgcolor="#CC99CC">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update room_tbl set build='$build' where room_id ='$Empno' ";
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
	 echo "<a href=room.php> กลับหน้าห้องสอบ </a><br>";
	 echo "<a href=room_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";

?>
<img src="../img/339533242cc1a72bed9ab9ea858f408b56141339.png" width="787" height="183">     
</div>
</body>
</html>