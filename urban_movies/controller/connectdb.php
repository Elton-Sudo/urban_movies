<?php
$conn = new mysqli('localhost','root','','urban_movies');

if ($conn->connect_error) {
   die("Error: Something went wrong!".$conn->connect_error);
} else {
    echo "Database connect successfuly";
}
?>