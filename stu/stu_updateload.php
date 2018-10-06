<html>
<body>
<body bgcolor="#FC9">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF ?>">
    <h1>แบบฟอร์มการแก้ไขชื่อนักศึกษา </h1>
    <h2>
      กรุณากรอกรหัสนักศึกษาที่ต้องการแก้ไข</h2>
    <p>
	รหัสนักศึกษา : <input type="text" name="stu_id"><p>
	<input type="submit" name="send" value="บันทึก">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>
</div>

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
	 $sql = "select * from student_tbl where stu_id ='$stu_id';";
	 $result = mysql_query($sql);
	 echo"<form action=stu_saveupdate.php?Empno=$stu_id method=post>";
     $dbarr = mysql_fetch_array($result);
    echo "รหัสนักเรียน"."$stu_id"."<br>";
	echo "ชื่อนักเรียน  :<input type=text name=stu_name  size=30 value=$dbarr[stu_name]><p>";
	echo "รหัสกลุ่ม  :<input type=text name=group_id value=$dbarr[group_id]><p>";
	echo "รหัสสาขางาน :<input type=text name=dep_id value=$dbarr[dep_id]><p>";
	echo "ห้อง : <input type=text name=class value=$dbarr[class]><p>";
	
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>
</div>
<div align="center">
  <img src="../img/847e7818d4ec16cf4fcbefafdcd93122.jpg" width="650" height="470" /></div>
</body>
</html>