<html>
<body>
<body bgcolor="#FC9">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "update student_tbl set stu_name='$stu_name', group_id='$group_id',dep_id='$dep_id',class='$class' where stu_id ='$Empno' ";
	 $result = mysql_query($sql);
	  if ($result)
	   {	echo"<center>";
		echo "การแก้ไขข้อมูลในฐานข้อมูลประสบความสำเร็จ <br>";
		echo"</center>";
		mysql_Close($link);	
	   }
	  else
	   {
		echo "ไม่สามารถแก้ไขข้อมูลในฐานข้อมูลได้  <br>";
	   }
echo"<center>";
	echo "<a href=stu.php> กลับหน้านักเรียน </a><br>";
	 echo "<a href=stu_updateload.php> กลับหน้าเว็บการแก้ไขข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
echo"</center>";

?>
<center>
<img src="../img/847e7818d4ec16cf4fcbefafdcd93122.jpg" width="650" height="470" /></div>
</center>
</body>
</html>