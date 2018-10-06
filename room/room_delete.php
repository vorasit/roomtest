<html>
<body bgcolor="#CC99CC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสห้องสอบที่ต้องการลบ</h2>
    <p>
	รหัสห้องสอบ : <input type="text" name="room_id"><p>
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
	 $sql = "delete from room_tbl where room_id ='$room_id';";
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
echo "<a href=room.php> กลับหน้าห้องสอบ </a><br>";
	 echo "<a href=room_delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>
</div>
<img src="../img/339533242cc1a72bed9ab9ea858f408b56141339.png" width="787" height="183">     
</div>
</body>
</html>