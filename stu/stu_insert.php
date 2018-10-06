<html>
<body>
<body bgcolor="#FC9">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอรม์การเพิ่มข้อมูลนักเรียน </h1>
    <p>
	รหัสนักเรียน : <input type="text" name="stu_id"><p>
	ชื่อนักเรียน  :<input type="text" name="stu_name" size="30"><p>
    รหัสกลุ่ม  :<input type="text" name="group_id"><p>
	รหัสแผนก :<input type="text" name="dep_id"><p>
	ห้อง : <input type="text" name="class"><p>
	
	
	<input type="submit" name="send" value="บันทึก">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>
  <p>*เปิดตารางแผนกเพื่อดูรหัสแผนกทั้งหมด เพื่อดูประกอบ <a href="../depart/depart_reportsum.php" target="_blank">คลิกที่นี้</a></p>
</div>
<div align="center">
  <?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "insert into student_tbl values('$stu_id','$stu_name','$group_id','$dep_id','$class');";
	 $result = mysql_query($sql);
	  if ($result)
	   {
        echo "บันทึกข้อมูลเสร็จสิ้น <br>";
       
		mysql_Close($link);
	   }
	  else
	   {
		echo "บันทึกล้มเหลว  <br>";
	   }
	echo "<a href=stu.php> กลับหน้านักเรียน </a><br>";
	 echo "<a href=stu_insert.php> กลับหน้าเพิ่มนักเรียน </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	}

?>
  <img src="../img/maxresdefault (1).jpg" width="531" height="373" /></div>
</body>
</html>