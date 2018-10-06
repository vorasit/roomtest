<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการแก้ไขวิชา </h1>
    <h2>
      กรุณากรอกรหัสวิชาที่ต้องการแก้ไข</h2>
    <p>
	รหัสวิชา : <input type="text" name="sub_id"><p>
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
	 $sql = "select * from subject_tbl where sub_id ='$sub_id';";
	 $result = mysql_query($sql);
	 echo"<form action=sub_saveupdate.php?Empno=$sub_id method=post>";
     $dbarr = mysql_fetch_array($result);
    echo "รหัสวิชา"."$dbarr[sub_id]"."<br>";
	echo "ชื่อวิชา  :<input type=text name=sub_name size=40 value=$dbarr[sub_name]><p>";

	echo "รหัสครู :<input type=text name=teach_id value=$dbarr[teach_id]><p>";
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>
</div>
<div align="center">
<img src="../img/3695.jpg" width="250" height="157" />
</div>
</body>
</html>