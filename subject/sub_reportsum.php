<html>
<body bgcolor="#66FFCC">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from subject_tbl;";
     
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
?>
       </table>
<?
        	echo "<a href=sub.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>
</div>
<img src="../img/coe_hp_new.png" width="423" height="226" /> </div>
</body>
</html>