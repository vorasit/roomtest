<html>
<body bgcolor="#FF9999">
<div align="center">
<?

        $link = mysql_connect("localhost", "root", "apple");
       $sql = "use db_exam;";
        $result = mysql_query($sql);
        $sql = "select * from test_tbl;";//แก้ 
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสจองห้องสอบ</td>
     <td>รหัสกลุ่ม</td>

     <td>รหัสวิชา</td>
     <td>วัน</td>
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
          
            echo "<td>".$dbarr['sub_id']."</td>";
            echo "<td>".$dbarr['nday']."</td>";
            echo "<td>".$dbarr['day']."</td>";
            echo "<td>".$dbarr['time']."</td>";
            echo "<td>".$dbarr['room_id']."</td>";
            echo "<td>".$dbarr['status']."</td>";
            echo "</tr>";
        } 

?>
       </table>

<?php
$sql = "select count(*) from test_tbl;";
$result = mysql_query($sql);
$dbarr = mysql_fetch_array($result);
$count = $dbarr[0];
echo "รหัสการจองห้องสอบทั้งหมด ".$count." วิชา"."<br>";
        echo "<a href=test.php> กลับหน้าตารางสอบ </a><br>";
     echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
        mysql_Close($link);
    
?>
</div>
<img src="../img/newscms_thaihealth_c_adgnqxy34568.jpg" width="408" height="283" /> </div>
</body>
</html>