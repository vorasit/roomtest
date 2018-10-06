<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update subject_tbl set sub_name='$sub_name',teach_id='$teach_id' where sub_id ='$Empno' ";
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
        	echo "<a href=sub.php> กลับหน้ารายวิชา </a><br>";
	 echo "<a href=sub_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";

?>
<img src="../img/3695.jpg" width="250" height="157" /> </div>
</body>
</html>