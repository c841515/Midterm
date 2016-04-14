<?php
	$no=$_GET["no"];
	$link=mysqli_connect("127.0.0.1","candy","	Candy19951123","a");
	$del="DELETE FROM user WHERE userid=".$no;
	mysqli_query($link,$del);
?>
<html>
	<head>
		<title>
			刪除
		</title>
	</head>
	<body>

		
	
		<?php
			$link=mysqli_connect("127.0.0.1","candy","Candy19951123","a");
		
			$read="SELECT * FROM user";
			$readresult=mysqli_query($link,$read);		
			$i=1;
			while($result=mysqli_fetch_array($readresult))
			{
				echo $i;
				echo ".";
				echo "帳號：";
				echo $result[0];
				echo "　密碼：";
				echo $result[1];
				echo "　姓名：";
				echo $result[2];
				echo "　手機：";
				echo $result[3];
				echo "　email：";
				echo $result[4];
			
				
				echo "<br>";
				echo "<br>";

				echo "<a href='profile.php?no=".$result[0]."'></a>";
				echo "  ";
				echo "<a href='checkdel.php?no=".$result[0]."'></a>";

				

				echo "<br>";
				echo "<br>";
				$i=$i+1;
			}
		?>
	
	</body>

        
</html>