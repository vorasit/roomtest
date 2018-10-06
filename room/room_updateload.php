<html>
<body bgcolor="#CC99CC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF ?>">
    <h1>แบบฟอร์มการแก้ไขห้องสอบ </h1>
    <h2>
      กรุณากรอกรหัสห้องสอบที่ต้องการแก้ไข</h2>
    <p>
	รหัสห้องสอบ : <input type="text" name="room_id"><p>
	<input type="submit" name="send" value="บันทึก">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>

<?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from room_tbl where room_id ='$room_id';";
	 $result = mysql_query($sql);
	 echo"<form action=room_saveupdate.php?Empno=$room_id method=post>";
     $dbarr = mysql_fetch_array($result);
    echo "รหัสห้องสอบ"."$dbarr[room_id]"."<br>";
	echo "ชื่ออาคาร  :<input type=text name=build size=40 value=$dbarr[build]><p>";
	
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>
</div>
<div align="center">
<img src="../img/339533242cc1a72bed9ab9ea858f408b56141339.png" width="787" height="183">     
</div>
</body>
</html>