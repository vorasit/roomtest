<html>
<body bgcolor="#FF9999">

<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF ?>">
    <h1>แบบฟอร์มการแก้ไขตารางสอบ </h1>
    <h2>
      กรุณากรอกรหัสตารางสอบที่ต้องการแก้ไข</h2>
    <p>
	รหัสการจอง : <input type="text" name="test_id"><p>
	<input type="submit" name="send" value="บันทึก">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>

<?
	}
   else
	{
?>
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from test_tbl where test_id ='$test_id';";
	 $result = mysql_query($sql);
	 echo"<form action=test_saveupdate.php?Empno=$test_id method=post>";
     $dbarr = mysql_fetch_array($result);
echo "รหัสการจอง"."$dbarr[test_id]"."<br>";
    echo "รหัสกลุ่ม"."$dbarr[group_id]"."<br>";
	echo "รหัสวิชา  :<input type=text name=sub_id value=$dbarr[sub_id]><p>";
 echo "วันที่สอบ  :<input type=text name=nday value=$dbarr[nday]><p>";
    echo "วัน/เดือน/ปี ที่สอบ  :<input type=text name=day value=$dbarr[day]><p>";
    echo "เวลา :<input type=text name=time value=$dbarr[time]><p>";
    echo "รหัสห้องสอบ  :<input type=text name=room_id value=$dbarr[room_id]><p>";
    
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>
</div>
<div align="center">
<img src="../img/นักเรียนไทยสวัสดี.jpg" width="339" height="332" />
</div>
</body>
</html>