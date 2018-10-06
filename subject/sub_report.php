<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการค้นหาข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสวิชาที่ต้องการค้นหา</h2>
    <p>
	รหัสวิชา : <input type="text" name="sub_id"><p>
	<input type="submit" name="send" value="ตกลง">
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
	 $sql = "select * from subject_tbl where sub_id in ($sub_id);";
     
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสวิชา</td>
     <td>ชื่อวิชา</td>
     <td>รหัสครู</td>
     </tr>
<?php
    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['sub_id']."</td>";
        echo "<td>".$dbarr['sub_name']."</td>";
        echo "<td>".$dbarr['teach_id']."</td>";
        echo "</tr>";
    }
}
?>
       </table>
<?
        	echo "<a href=sub.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 //mysql_Close($link);

?>
</div>
<div align="center">
<img src="../img/n20120302163651_255337.jpg" width="320" height="240" /> </div>
</body>
</html>