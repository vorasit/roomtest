<html>
<body bgcolor="#FF99FF">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสครูที่ต้องการลบ</h2>
    <p>
	รหัสครู : <input type="text" name="teach_id"><p>
	<input type="submit" name="send" value="ตกลง">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>
</div>
<?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "delete from teacher_tbl where teach_id ='$teach_id';";
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
        	echo "<a href=teach.php> กลับหน้าครู </a><br>";
	 echo "<a href=teach_delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>
<img src="../img/download (12).jpg" width="248" height="203" /> </div>
</body>
</html>