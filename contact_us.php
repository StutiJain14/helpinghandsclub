<?php
	$conn = mysqli_connect("localhost","root","","helpinghandsclub");
	if (!$conn) {
		die("<span class='text-danger'>Connection failed: </span>" . mysqli_connect_error());
	} else {
		/*
		echo "<span class='text-success'>Connected successfully</span>";
		*/
	}
	
?>

<?php
			if(isset($_POST['savebtn'])) {
				$name = $_POST['nametxt'];
				$email = $_POST['emailtxt'];	
				$number = $_POST['numbertxt'];	
				$message = $_POST['messagetxt'];
				
				$qrysave = "insert into contact_us (Name, Email, Number, Message) values ('$name','$email','$number','$message')";
			
				if (mysqli_query($conn, $qrysave)) {
					echo '<script>
					window.alert("Thanks For Contact");
					window.location.href="index.html";
					</script>';
				} else {
					echo "Error: ".mysqli_error($conn);
				}				
			}				
		?>	
