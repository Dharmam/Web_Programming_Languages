<?php 
	$con = mysqli_connect("localhost","root","root","PW5"); 
	$query="SELECT * FROM book";
	$result = mysqli_query($con,$query);
	
	if($result->num_rows==0){
			echo "Unable to connect";
			exit;
		}
	else	{
		echo '[ <br>';
			 for ($i=0;$i<mysqli_num_rows($result);$i++) {
				echo json_encode(mysqli_fetch_object($result));
				echo ",";
				echo ('<br>');
				
			}
			
			echo ']';
	}
	@mysql_close($con);
?>