  <?php

  $year = $_GET["year"]; 
  $gender = $_GET["gender"]; 

  

  $con=mysqli_connect("localhost","root","root","hw3");

  if (mysqli_connect_errno())
  { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql ="";
  if($year === all && $gender === all){
    $sql = "SELECT * FROM babynames order by babynames.year, babynames.ranking, babynames.gender ";
  }
  elseif($year === all ){
    $sql = "SELECT * FROM babynames where babynames.gender = '".$gender."' order by  babynames.ranking,babynames.year ";
  }
  elseif($gender === all){
    $sql = "SELECT * FROM babynames where babynames.year = '".$year."' order by  babynames.ranking , babynames.gender";
  }
  else{
    $sql = "SELECT * FROM babynames where babynames.year = '".$year."' and babynames.gender = '".$gender."' order by babynames.ranking";
  }
  
  $result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result)>0){
   echo "<table border = '1'>";
   echo "<tr bgcolor='wheat'>";
     echo "<th>Rank</th>";
     echo "<th>Year</th>";
     echo "<th>Name</th>";
     echo "<th>Gender</th>";
     echo "</tr>" ;

     while($row = mysqli_fetch_assoc($result)){

       echo "<tr>";
       echo "<td>".$row[ranking]."</td>";
       echo "<td>".$row[year]."</td>";
       echo "<td>".$row[name]."</td>";
       echo "<td>".$row[gender]."</td>";
       echo "</tr>";  

     }
     echo " </table>";
 }
 else{
  echo "<p> No results found for your search criteria. results </p>";
  header("Location: babynames.html");
  exit;
}
?>