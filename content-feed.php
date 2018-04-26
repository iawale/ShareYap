<?php

$stmt->execute();

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                      FOR UPDATING  UI
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$result = $stmt->get_result();
if($result->num_rows === 0) exit('No rows');
while($row = $result->fetch_assoc()) {

    echo '<div class="card-main">
    <h2> '.$row["heading"].'</h2>
    <h5>'.$row["street"].', '.$row["city"].', '.$row["state"].', '.$row["zip"].'</h5>
    <img style="height:250px; width: 350px;" src = "'.$row["photo"].'">
    <div id = "'.$row["aid"].'">
    <button onclick = "clickFunction(1,'.$row["aid"].','.$row["likes"].')" value = "'.$row["likes"].'" type = "button"> Like ('.$row["likes"].')</button> 
    <button onclick = "clickFunction(2,'.$row["aid"].','.$row["dislike"].')" value = "'.$row["dislike"].'" type = "button"> Dislike ('.$row["dislike"].')</button> 
    <button style="color:red; "> Report </button>      
    </div>
    <p><strong>Description</strong></p>
    <div> Price:  '.$row["price"].'</div>
    <div> Rating:  '.$row["rating"].'</div>
    <div> No of Bed/Baths:  '.$row["noofbedroom"].'/'.$row["noofbaths"].'</div>
    <div> Gender Looking for:  '.$row["gender"].'</div>
    <div> Pets:  '.$row["pets"].'</div>
    <div> Laundry:  '.$row["laundry"].'</div>
    <p></p>
    </div>';


  }
 

$stmt->close();
$conn->close();
?>
