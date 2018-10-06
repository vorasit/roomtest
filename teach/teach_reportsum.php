<html>
<body bgcolor="#FF99FF">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from teacher_tbl;";
     
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
?>
       </table>
<?
	echo "<a href=teach.php> กลับหน้าครู </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>
</div>
<img src="../img/ครู.png" width="384" height="210" /> </div>
</div>
</body>
</html>