<html>
	<head>
		<title>
			登入完後
		</title>
	</head>
	<body>
		
            $query="SELECT * FROM user WHERE userid='$userid'";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_row($result);
			echo "歡迎回來 $row[0]!&nbsp;&nbsp;";
		
		<br>
		<br>
		<br>
		<center><font size="5" color=#828282><b>................................................您的上一次登入時間為................................................</b></font>
		<br>
		<br>
	    <center><font size="5" color=#828282><b>................................................您的登入次數為................................................</b></font>
        <br>
        <br>
        <br>
        <a href="http://127.0.0.1/profile.php"><center><font size="5" color=#828282><b>修改資料</b></font>
	    <b></center></b>></a
	
	  
    
	</body>
</html>