  <?php
  session_start();
  $name = $_POST["username"]; 
  $password = $_POST["password"]; 

  $con=mysqli_connect("localhost","root","root","pw3");
  // Check connection
  if (mysqli_connect_errno())
  { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM users where users.username = '".$_POST["username"]."'";
  echo $sql;
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result)>0){ 
    echo "here";
    while($row = mysqli_fetch_assoc($result)){
      echo "loop";
      if($row["username"]==$_POST["username"] && $row["password"] == $_POST["password"]){
        echo "validation success";
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["fullname"] = $row["fullname"];
        $_SESSION["power_animal"] = $row["power_animal"];
        header("Location: welcome.php");
        exit;
      }
      else{
        header("Location: login.html");
        exit;
      }
    }
  }
  else{
    echo "0 results";
    header("Location: login.html");
    exit;
  }
  ?>