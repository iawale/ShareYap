<?php
include 'db-connect.php';

$likes = $_GET['likes'];
$aid = $_GET['aid'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//						FOR UPDATING DATABASE 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql = "UPDATE apartment SET likes='".$likes."' WHERE aid=".$aid;
$conn->query($sql); 




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//						FOR UPDATING COUNTS UI
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sql = "SELECT aid,likes,dislike from apartment where aid = ".$aid;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
       echo '

    <button  onclick = "clickFunction(1,'.$row["aid"].','.$row["likes"].')" value = "'.$row["likes"].'" type = "button"> Like ('.$row["likes"].')</button> 
    <button> Dislikes ('.$row["dislike"].')</button>
    <button style="color:red; "> Report </button>';
    }  

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conn->close();


?>