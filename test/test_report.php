<html>
<body bgcolor="#FF9999">
<div align="center">
<?
$group_id = $_POST[group_id];
        $link = mysql_connect("localhost", "root", "apple");
       $sql = "use db_exam;";
        $result = mysql_query($sql);
        $sql = "select * from test_tbl where group_id in ($group_id) ;";//แก้ 
?>
<div align="center">
     <table border="1">
     <tr>
<td>รหัสจองห้องสอบ</td>
     <td>รหัสกลุ่ม</td>

     <td>รหัสวิชา</td>

     <td>วัน/เดือน/ปี ที่สอบ</td>
     <td>เวลา</td>
     <td>เลขห้องสอบ</td>
      <td>สถานะ</td>
     </tr>
<?php
    $result = mysql_query($sql);
        while ($dbarr = mysql_fetch_array($result)) {
            echo "<tr>";
echo "<td>".$dbarr['test_id']."</td>";
            echo "<td>".$dbarr['group_id']."</td>";
          //  echo "<td>".$dbarr['class']."</td>";
            echo "<td>".$dbarr['sub_id']."</td>";
            //echo "<td>".$dbarr['sub_name']."</td>";
            echo "<td>".$dbarr['day']."</td>";
            echo "<td>".$dbarr['time']."</td>";
            echo "<td>".$dbarr['room_id']."</td>";
            echo "<td>".$dbarr['status']."</td>";
            echo "</tr>";
        } ?>
       </table>

<?php
        echo "<a href=test.php> กลับหน้าตารางสอบ </a><br>";
     echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
        mysql_Close($link);
    
?>
</div>
<img src="../img/329468.jpg" width="377" height="223">
</div>
</body>
</html>