<html>
<body bgcolor="#FF9999">
<div align="center">
<?
$test_id = $_POST[test_id];
$group_id = $_POST[group_id];
$sub_id = $_POST[sub_id];
$nday = $_POST[nday];
$day = $_POST[day];
$time = $_POST[time];
$room_id = $_POST[room_id];
$status = "ไม่ว่าง";
 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
$sql="select * from test_tbl where day = '$day' and time = '$time'";
$result = mysql_query($sql);
while($objResult = mysql_fetch_array($result))
{
$wroom_id = $objResult[room_id];
$wday = $objResult[day];
$wtime = $objResult[time];
}
if($day == $wday and $time == $wtime and $room_id ==$wroom_id )
{
?>
	<script>
		alert ("ช่วงเวลานี้มีกลุ่มอื่นจองแล้ว โปรดดูจัดทำรายงานการสอบทั้งหมด");
		window.location.assign("test_insert.html")
	</script>
	<?
}
else
{
 	$sql = "insert into test_tbl values('$test_id','$group_id','$sub_id','$nday','$day','$time','$room_id','$status');";
	 $result = mysql_query($sql);
	  if ($result)
	   {
     	   echo "บันทึกข้อมูลเสร็จสิ้น <br>";
		mysql_Close($link);
	   }
	  else
	   {
		echo "บันทึกล้มเหลว   <br>";
	   }
        echo "<a href=test.php> กลับหน้าตารางสอบ </a><br>";
	 echo "<a href=test_insert.html> กลับหน้าเพิ่มตารางสอบ </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	
}

	

?>
<img src="../img/main@2x.png" width="240" height="240">
</div>
</body>
</html>