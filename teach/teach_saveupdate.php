<html>
<body bgcolor="#FF99FF">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update teacher_tbl set teach_name='$teach_name' where teach_id ='$Empno' ";
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
echo "<a href=teach.php> กลับหน้าครู </a><br>";
	 echo "<a href=teach_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";

?>
<img src="../img/CC-1133.jpg" width="363" height="237" /> </div>
</body>
</html>