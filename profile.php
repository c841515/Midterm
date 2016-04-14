<html>
	<head>
		<title>
			修改
		</title>
	</head>
	<body>
		
		
		<center><b>

		<form action="profile.php" method="post"><b>
		
		<?php
			$no=$_GET["no"];
			$link=mysqli_connect("127.0.0.1","candy","Candy19951123","a");

			$read="SELECT * FROM user WHERE userid=".$no;
			$readresult=mysqli_query($link,$read);
			$result=mysqli_fetch_array($readresult);
			echo "<form action='.php' method='post'>";
			echo "<input type='hidden' name='no' value='".$result[0]."'>";
   			echo "密碼：<input type='text' size=8 name='name' value='".$result[1]."'>　";
			echo "email：<input type='text' size=10 name='cellphone' value='".$result[4]."'><br><br>";
			echo "電話：<input type='text' size=8 name='name' value='".$result[3]."'>　";
			
		
		
			echo "<input type='submit' value='修改資料'>";
			echo "</form>";
		?>

	
	</body>
</html>