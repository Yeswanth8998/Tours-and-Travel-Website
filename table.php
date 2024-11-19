 <?php
$servername="localhost";
$username="root";
$password="";
$dbname="booking_db";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql = "CREATE TABLE book_form(id INT(255) AUTO_INCREMENT PRIMARY KEY, Name1 varchar(255), Email varchar(255), Phone varchar(10), Address1 varchar(255), Location1 varchar(255), Guests INT(255), Arrivals DATE, Leaving DATE)";

if($conn->query($sql)==TRUE) {
    echo "table book_form created successfully";
}
else{
    echo "error creating in table".$conn->error;
}
$conn->close();
?>