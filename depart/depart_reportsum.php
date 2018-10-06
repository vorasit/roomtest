<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head> 
<body bgcolor="#FFFF66">
<div align="center">
<?
	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from depart_tbl;";
     
?>
<div align="center">
     <table border="1">
     <tr>
     <td>รหัสแผนก</td>
     <td>ชื่อแผนก</td>
     
     </tr>
<?php
    $result = mysql_query($sql);
	  while ($dbarr = mysql_fetch_array($result))
	{
        echo "<tr>";
        echo "<td>".$dbarr['dep_id']."</td>";
        echo "<td>".$dbarr['dep_name']."</td>";
        
        echo "</tr>";
    }
?>
       </table>

<?
       	 echo "<a href=depart.php> กลับหน้าแผนก </a><br>";
	 echo "<a href=../Mainfunction.html> กลับหน้าเว็บหลัก </a><br>";
	 mysql_Close($link);

?>
<img src="../img/36_04_25600224092118.jpg" width="403" height="220" /> </div>
</body>
</html>
