<html>
<body bgcolor="#FFFF66">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสแผนกที่ต้องการลบ</h2>
    <p>
	รหัสแผนก : <input type="text" name="dep_id"><p>
	<input type="submit" name="send" value="ตกลง">
	<input type="reset" name="cancel" value="ยกเลิก">
  </form>

<?
	}
   else
	{
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "delete from depart_tbl where dep_id ='$dep_id';";
	 $result = mysql_query($sql);
	  if ($result)
	   {
        		
		echo "การลบข้อมูลลงในฐานข้อมูลประสบความสำเร็จ <br>";
		mysql_Close($link);

		
	   }
	  else
	   {
		echo "ไม่สามารถลบข้อมูลในฐานข้อมูลได้  <br>";
	   }
	echo "<a href=depart.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=depart_delete.php> กลับหน้าเว็บการลบข้อมูล </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>
</div>
<img src="../img/329468.jpg" width="670" height="385" /> </div>
</body>
</html>