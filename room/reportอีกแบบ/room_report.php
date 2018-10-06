<?
$room_id = $_POST[room_id];
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select room_tbl.room_id,room_tbl.build,test_tbl.nday,test_tbl.day,test_tbl.sub_id,test_tbl.time from room_tbl INNER JOIN test_tbl ON room_tbl.room_id = test_tbl.room_id
where room_tbl.room_id in ($room_id);";
     
?>
     <table border="1">
     <tr>
     <td>รหัสห้องสอบ</td>
     <td>ชื่ออาคาร</td>
     <td>วัน</td>
     <td>วัน/เดือน/ปี ที่ใช้งาน</td>
     <td>รหัสวิชา</td>
     <td>เวลาที่ใช้</td>
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
        echo "<td>".$dbarr['sub_id']."</td>";
        echo "<td>".$dbarr['time']."</td>";
        echo "</tr>";
    }
?>
       </table>
<?
      	  echo "<a href=room.php> กลับหน้าห้องสอบ </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>