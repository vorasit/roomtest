<html>
<body>
<body bgcolor="#FC9">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select student_tbl.stu_id,student_tbl.stu_name,student_tbl.group_id,student_tbl.dep_id,depart_tbl.dep_name,student_tbl.class
 from student_tbl 
inner join depart_tbl on student_tbl.dep_id = depart_tbl.dep_id;";
     
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
?>
       </table>
<?
	echo "<a href=stu.php> กลับหน้านักเรียน </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>
<img src="../img/main@2x.png" width="240" height="240" /> </div>
</body>
</html>