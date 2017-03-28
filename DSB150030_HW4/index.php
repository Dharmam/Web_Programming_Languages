<?php 



$con = mysqli_connect("localhost","root","root","HW4"); 

$url = $_SERVER['PHP_SELF'];
$comp = explode("/", $url);


$query= "";
if(count($comp) == 3){
	$id = $comp[2];
	if($id == ""){
		$query="SELECT title, price, category FROM book";
	}
	else{
		$query= "SELECT  book.title, book.year, book.price, book.category, GROUP_CONCAT(authors.Author_Name separator ', ') authors 
		FROM book 
		JOIN book_authors ON book.Book_id = book_authors.Book_id 
		JOIN authors ON book_authors.Author_id= authors.Authors_id 
		GROUP BY  book.Book_id, book.title 
		HAVING  book.Book_id = '".$id."'";
	}
}else{
	$query="SELECT title, price, category FROM book";
}

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