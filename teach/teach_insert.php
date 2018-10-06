<html>
<body bgcolor="#FF99FF">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอรม์การเพิ่มข้อมูลครู </h1>
    <p>
	รหัสครู : <input type="text" name="teach_id"><p>
	ชื่อครู  :<input type="text" name="teach_name" size="40"><p>
	<input type="submit" name="send" value="บันทึก">
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
	 $sql = "insert into teacher_tbl values('$teach_id','$teach_name');";
	 $result = mysql_query($sql);
	  if ($result)
	   {
        echo "บันทึกข้อมูลเสร็จสิ้น <br>";
		mysql_Close($link);
	   }
	  else
	   {
		echo "บันทึกล้มเหลง  <br>";
	   }
       	 echo "<a href=teach.php> กลับหน้าครู </a><br>";
	 echo "<a href=teach_insert.php> กลับหน้าเพิ่มครู </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	}

?>
<img src="../img/newscms_thaihealth_c_adgnqxy34568.jpg" width="435" height="226" /> </div>
</body>
</html>