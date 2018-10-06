<html>
<body bgcolor="#FF9999">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสตารางกลุ่มที่ต้องการลบ</h2>
    <p>
	รหัสการจอง : <input type="text" name="test_id"><p>
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
	 $sql = "delete from test_tbl where test_id ='$test_id';";
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
        	echo "<a href=test.php> กลับหน้าตารางสอบ </a><br>";
	 echo "<a href=test_delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>

<img src="../img/847e7818d4ec16cf4fcbefafdcd93122.jpg" width="410" height="308" />
</div>
</body>
</html>