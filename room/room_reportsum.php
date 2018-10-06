<html>
<body bgcolor="#CC99CC">
<div align="center">
<?

	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select room_tbl.room_id,room_tbl.build,test_tbl.nday,test_tbl.day,test_tbl.sub_id,test_tbl.time,subject_tbl.sub_name from room_tbl 
INNER JOIN test_tbl ON room_tbl.room_id = test_tbl.room_id
INNER JOIN subject_tbl ON test_tbl.sub_id = subject_tbl.sub_id;";
     
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสห้องสอบ</td>
     <td>ชื่ออาคาร</td>
     <td>วัน</td>
     <td>วัน/เดือน/ปี ที่ใช้งาน</td>
     <td>คาบเช้ารหัสวิชาที่ใช้งาน</td>
<td>คาบเช้าชื่อวิชาที่ใช้งาน</td>
     <td>คาบบ่ายรหัสวิชาที่ใช้งาน</td>
<td>คาบบ่ายชื่อวิชาที่ใช้งาน</td>
     </tr>
<?php

    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['room_id']."</td>";
        echo "<td>".$dbarr['build']."</td>";
        echo "<td>".$dbarr['nday']."</td>";
        echo "<td>".$dbarr['day']."</td>";
if($dbarr['time'] == "คาบเช้า09.00-12.00น.")
{
       echo "<td>".$dbarr['sub_id']."</td>";
	echo "<td>".$dbarr['sub_name']."</td>";
}
else
{
	echo "<td>"."<center>"."-"."</center>"."</td>";
	echo "<td>"."<center>"."-"."</center>"."</td>";
}
if($dbarr['time'] == "คาบบ่าย13.00-16.00น.")
{
         echo "<td>".$dbarr['sub_id']."</td>";
	echo "<td>".$dbarr['sub_name']."</td>";
}
else
{
	echo "<td>"."<center>"."-"."</center>"."</td>";
	echo "<td>"."<center>"."-"."</center>"."</td>";
}
        echo "</tr>";
    }
?>
       </table>
<?
      	  echo "<a href=room.php> กลับหน้าห้องสอบ </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>
</div>
<img src="../img/339533242cc1a72bed9ab9ea858f408b56141339.png" width="787" height="183">     
</div>
</body>
</html>