<html>
<body>
<body bgcolor="#FC9">
<div align="center">
<?
  if ($send == null) 
	{
?>
<div align="center">
  <form method="post" action="<? echo $PHP_SELF; ?>">
    <h1>แบบฟอร์มการค้นหาข้อมูล </h1>
    <h2>
      กรุณากรอกรหัสนักเรียนที่ต้องการค้นหา</h2>
    <p>
	รหัสนักเรียน : <input type="text" name="stu_id"><p>
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
	 $sql = "select student_tbl.stu_id,student_tbl.stu_name,student_tbl.group_id,student_tbl.dep_id,depart_tbl.dep_name,student_tbl.class
 from student_tbl 
inner join depart_tbl on student_tbl.dep_id = depart_tbl.dep_id
where student_tbl.stu_id in ($stu_id);";
     
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสนักเรียน</td>
     <td>ชื่อนักเรียน</td>
     <td>รหัสกลุ่ม</td>
     <td>รหัสสาขา</td>
<td>สาขางาน</td>
     <td>ห้อง</td>
     </tr>
<?php
    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['stu_id']."</td>";
        echo "<td>".$dbarr['stu_name']."</td>";
        echo "<td>".$dbarr['group_id']."</td>";
        echo "<td>".$dbarr['dep_id']."</td>";
        echo "<td>".$dbarr['dep_name']."</td>";
        echo "<td>".$dbarr['class']."</td>";
        echo "</tr>";
    }
}
?>
       </table>
<?
	echo "<a href=stu.php> กลับหน้านักเรียน </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 //mysql_Close($link);

?>
<img src="../img/นักเรียนไทยสวัสดี.jpg" width="250" height="218" /> </div>
</body>
</html>