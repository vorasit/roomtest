<html>
<body bgcolor="#FFFF66">
<div align="center">
<?
$dep_id = $_POST[dep_id];

	 $link = mysql_connect("localhost", "root", "apple");
	 $sql = "use db_exam;";
	 $result = mysql_query($sql);
	 $sql = "select * from depart_tbl where dep_id in ($dep_id);";
     
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
</div>
<img src="../img/2e9438ba11de7909b30deb7285cb79ac.jpg" width="377" height="250" /> </div>
</body>
</html>