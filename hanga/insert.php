<?php
include "index.php";
	if (isset($_POST['submit'])) {
		$trainee_name=$_POST['trainee-name'];
		$email=$_POST['email'];
		$phonenumber=$_POST['phonenumber'];
		$insert=mysqli_query($conn,"INSERT INTO trainee VALUES('','$trainee_name','$email','$phonenumber')");
		if ($insert==true) {
			echo"data is inserted";
	
		}
		else{
			echo"data is not inserted";
		}
	}


	?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form method="post">
<label >trainee-name</label>
<input type="text" name="trainee-name">
<label >email</label>
<input type="text" name="email">
<label for="">phonenumber</label>
<input type="text" name="phonenumber">
		<button name="submit">add trainees</button>
	</form>
    </body>
    </html>