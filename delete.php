<?
  if ($send == null) 
	{
?>
  <form method="post" action="<? echo $PHP_SELF ?>">แบบฟอร์มการลบข้อมูล <p>
	กรุณากรอกรหัสนักเรียนที่ต้องการลบ<p>
	รหัสนักเรียน : <input type="text" name="stu_id"><p>
	<input type="submit" name="send" value="ตกลง">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>

<?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "delete from employee_tbl where eid ='$eid';";
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

	 echo "<a href=delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>