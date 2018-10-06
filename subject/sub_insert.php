<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอรม์การเพิ่มรายวิชา </h1>
    <p>
	รหัสวิชา : <input type="text" name="sub_id"><p>
	ชื่อวิชา :<input type="text" name="sub_name" size="40"><p>
  	
	รหัสครู :<input type="text" name="teach_id"><p>
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
	 $sql = "insert into subject_tbl values('$sub_id','$sub_name','$teach_id');";
	 $result = mysql_query($sql);
	  if ($result)
	   {
        echo "บันทึกข้อมูลเสร็จสิ้น <br>";
        echo "<a href=sub.php> กลับหน้ารายวิชา </a><br>";
		mysql_Close($link);
	   }
	  else
	   {
		echo "บันทึกล้มเหลว  <br>";
	   }
	 echo "<a href=sub_insert.php> กลับหน้าเพิ่มรายวิชา </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	}

?>
</div>
<div align="center">
<img src="../img/coe_hp_new.png" width="408" height="235" /> </div>
</body>
</html>