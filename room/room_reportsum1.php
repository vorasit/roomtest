<html>
<body bgcolor="#CC99CC">
<div align="center">
<?

	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from room_tbl;";
     
?>
<div align="center">
แสดงรายชื่อห้องทั้งหมด
     <table border="1">
     <tr>
     <td>รหัสห้องสอบ</td>
     <td>ชื่ออาคาร</td>
     </tr>
<?php
    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['room_id']."</td>";
        echo "<td>".$dbarr['build']."</td>";

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