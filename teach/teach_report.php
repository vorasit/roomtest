<html>
<body bgcolor="#FF99FF">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการค้นหาข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสครูที่ต้องการค้นหา</h2>
    <p>
	รหัสครู : <input type="text" name="teach_id"><p>
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
	 $sql = "select * from teacher_tbl where teach_id in ($teach_id);";
     
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสครู</td>
     <td>ชื่อครู</td>
     
     </tr>
<?php
    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['teach_id']."</td>";
        echo "<td>".$dbarr['teach_name']."</td>";
        
        echo "</tr>";
    }
}
?>
       </table>
<?
	echo "<a href=teach.php> กลับหน้าครู </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 //mysql_Close($link);

?>
</div>
<img src="../img/yj.jpg" width="380" height="239" /> </div>
</body>
</html>