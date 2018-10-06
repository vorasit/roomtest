<html>
<body bgcolor="#FFFF66">

<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการแก้ไขแผนก </h1>
    <h2>
      กรุณากรอกรหัสแผนกที่ต้องการแก้ไข</h2>
    <p>
	รหัสแผนก : <input type="text" name="dep_id"><p>
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
	 $sql = "select * from depart_tbl where dep_id ='$dep_id';";
	 $result = mysql_query($sql);
	 echo"<form action=depart_saveupdate.php?Empno=$dep_id method=post>";
     $dbarr = mysql_fetch_array($result);
    echo "รหัสแผนก"."$dbarr[dep_id]"."<br>";
	echo "แผนก  :<input type=text name=dep_name size=40 value=$dbarr[dep_name]><p>";
	
	 echo "<input type=submit name=submit value=Submit>";
	 echo "<input type=reset name=reset value=Cancel>";
	 echo "</form>";
	mysql_Close($link);

	}
?>

<div align="center">
<img src="../img/maxresdefault.jpg" width="298" height="245" />
</div>
</body>
</html>