<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการลบข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสวิชาที่ต้องการลบ</h2>
    <p>
	รหัสวิชา : <input type="text" name="sub_id"><p>
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
	 $sql = "delete from subject_tbl where sub_id ='$sub_id';";
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
    	 echo "<a href=sub.php> กลับหน้ารายวิชา</a><br>";
	 echo "<a href=sub_delete.php> กลับหน้าเว็บการลบข้อมูลรายวิชา </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	}
?>
</div>
<img src="../img/Education-website-design-&amp;-development.png" width="400" height="215" /> </div>
</body>
</html>