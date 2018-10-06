<html>
<body bgcolor="#CC99CC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอรม์การเพิ่มห้องสอบ </h1>
    <p>
	รหัสห้องสอบ : <input type="text" name="room_id"><p>
	ชื่ออาคาร :<input type="text" name="build" size="40"><p>
	
	<input type="submit" name="send" value="บันทึก">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>

<?
	}
   else
	{
	 $link = mysql_connect("localhost", "root","apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "insert into room_tbl values('$room_id','$build');";
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
  echo "<a href=room.php> กลับหน้าห้องสอบ </a><br>";
	 echo "<a href=room_insert.php> กลับหน้าเพิ่มห้องสอบ </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	}

?>
</div>
<img src="../img/339533242cc1a72bed9ab9ea858f408b56141339.png" width="787" height="183">     
</div>
</body>
</html>