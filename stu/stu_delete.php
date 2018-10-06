<html>
<body>
<body bgcolor="#FC9">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสนักเรียนที่ต้องการลบ</h2>
    <p>
	รหัสนักเรียน : <input type="text" name="stu_id"><p>
	<input type="submit" name="send" value="ตกลง">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>
</div>
<div align="center">
  <?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "delete from student_tbl where stu_id ='$stu_id';";
	 $result = mysql_query($sql);
	  if ($result)
	   {
		echo "การลบข้อมูลลงในฐานข้อมูลประสบความสำเร็จ <br>";
		mysql_Close($link);
	   }
	  else
	   {
		echo "ไม่สามารถลบข้อมูลในฐานข้อมูลได้  <br>";
	   }
	echo "<a href=stu.php> กลับหน้านักเรียน </a><br>";
	 echo "<a href=stu_delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>
  <img src="../img/black-pink_jisoo_1509162232_4.jpg" width="600" height="332" /></div>
</body>
</html>