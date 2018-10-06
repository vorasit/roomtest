<?
	$link = mysql_connect("localhost", "root", "apple");
	$sql = "create database db_exam;";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างฐานข้อมูลสำเร็จ db_exam <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างฐานข้อมูลได้ db_exam <br>";
	  }
	$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table student_tbl(stu_id varchar(10),stu_name varchar(50),group_id varchar(8),dep_id varchar(10),class varchar(8),primary key(stu_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ student_tbl <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ student_tbl <br>";
	  }


	$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table teacher_tbl(teach_id varchar(6),teach_name varchar(50),primary key(teach_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ teacher_tbl <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ teacher_tbl <br>";
	  }
	
	$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table room_tbl(room_id int(4),build varchar(20),primary key(room_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ room_tbl<br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ room_tbl<br>";
		}

	$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table depart_tbl(dep_id varchar(10),dep_name varchar(50),primary key(dep_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ depart_tbl <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ depart_tbl <br>";
		}
		
	$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table subject_tbl(sub_id varchar(9),sub_name varchar(50),teach_id varchar(3),primary key(sub_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ subject_tbl <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ subject_tbl <br>";
		}
		
		$sql = "Use db_exam;";
	$result = mysql_query($sql);
	$sql = "create table test_tbl(test_id varchar(10),group_id varchar(10),sub_id varchar(9),nday varchar(30),day varchar(35),time varchar(50),room_id int(4),status varchar(30),primary key(test_id));";
	$result = mysql_query($sql);
	 if ($result)
	  {
		echo "การสร้างตารางสำเร็จ test_tbl <br>";
		
	  }
	 else
	  {
		echo "ไม่สามารถสร้างตารางได้ test_tbl <br>";
		}
	mysql_Close($link);

?>
