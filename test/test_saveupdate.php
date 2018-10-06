<html>
<body bgcolor="#FF9999">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update test_tbl set sub_id='$sub_id',nday='$nday',day='$day',time='$time',room_id='$room_id' where test_id ='$Empno' ";
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
        echo "<a href=test.php> กลับหน้าตารางสอบ </a><br>";
	 echo "<a href=test_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";

?>
<img src="../img/นักเรียนไทยสวัสดี.jpg" width="339" height="332" /> </div>
</body>
</html>