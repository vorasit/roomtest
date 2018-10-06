<html>
<body bgcolor="#FF99FF">

<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF ?>">
    <h1>แบบฟอร์มการแก้ไขชื่อครู </h1>
    <h2>
      กรุณากรอกรหัสครูที่ต้องการแก้ไข</h2>
    <p>
	รหัสครู : <input type="text" name="teach_id"><p>
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
	 $sql = "select * from teacher_tbl where teach_id ='$teach_id';";
	 $result = mysql_query($sql);
	 echo"<form action=teach_saveupdate.php?Empno=$teach_id method=post>";
     $dbarr = mysql_fetch_array($result);
    echo "รหัสครู"."$dbarr[teach_id]"."<br>";
	echo "ชื่อครู  :<input type=text name=teach_name size=40 value=$dbarr[teach_name]><p>";
	
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>
</div>
<div align="center">
<img src="../img/CC-1133.jpg" width="363" height="237" />
</div>
</body>
</html>