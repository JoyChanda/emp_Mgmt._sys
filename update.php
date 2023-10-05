<?php
    $id=$_POST['id'];
    $branchName=$_POST['branchName'];
    $post=$_POST['post'];




    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{

      $sql = "UPDATE branch SET branchName='$branchName',post='$post' WHERE id=$id";

    }


    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}   else {
    echo "Error updating record: " . $conn->error;
}



  $conn->close();





    ?>