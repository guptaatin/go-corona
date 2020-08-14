<?php

	include 'dbcon.php';
	
	
	
	if(isset($_POST['submit'])){
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$symp = $_POST['coronasym'];
		$msg = $_POST['msg'];
		
		$chk = "";
		
		foreach($symp as $chk1){
			$chk .= $chk1.",";
		}
		
		$insertquery = "INSERT INTO `coronacase`(`username`, `email`, `mobile`, `symp`, `message`) VALUES ('$username', '$email', '$mobile', '$chk', '$msg')";

		$query = mysqli_query($con, $insertquery);
		
		if($con){
			header('Location:index.php');
			exit;
		}else{
			?>
			<script>
				alert("Not Inserted !");
			</script>
			<?php
		}
	
	}
?>