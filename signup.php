<?php
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="test5";
				if(isset($_POST['submit'])){
					try{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
						$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
						$fname= $_POST['fullname'];
						$user= $_POST['username'];
						$mail= $_POST['email'];
						$phon= $_POST['phone'];
						$pass=$_POST['password'];
						$sql="INSERT INTO signup (fullname,username,email,phone,password) VALUES ('$fname','$user','$mail','$phon','$pass')";
						$conn->query($sql);
						echo "successfully filled";
					}
					catch(PDOException $e){
						echo "connection failed";
					}
				}else{
					echo "lkahgoihoi";
				}
				//Configuration file
	?>