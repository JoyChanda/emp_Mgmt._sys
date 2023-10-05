 <?php
    $id=$_POST['id'];



    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
      $sql = "DELETE FROM branch WHERE id= $id";}


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



  $conn->close();





    ?>