<html>
<body bgcolor="#FFFF66">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอรม์การเพิ่มแผนก </h1>
    <p>
	รหัสแผนก : <input type="text" name="dep_id"><p>
	ชื่อแผนก :<input type="text" name="dep_name" size="40"><p>
	
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
	 $sql = "insert into depart_tbl values('$dep_id','$dep_name');";
	 $result = mysql_query($sql);
	  if ($result)
	   {
        echo "บันทึกข้อมูลเสร็จสิ้น <br>";

		mysql_Close($link);
	   }
	  else
	   {
		echo "บันทึกล้มเหลว<br>";
	   }
        echo "<a href=depart.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=depart_insert.php> กลับหน้าเพิ่มแผนก </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าหลัก </a><br>";
	}

?>
</div>
<img src="../img/2e9438ba11de7909b30deb7285cb79ac.jpg" width="650" height="651" /> </div>
</body>
</html>