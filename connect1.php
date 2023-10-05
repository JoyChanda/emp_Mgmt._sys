<?php
    $id=$_POST['id'];
    $branchName=$_POST['branchName'];
    $post=$_POST['post'];

    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
            $stmt=$conn->prepare("insert into branch(id,branchName,post)
            values(?,?,?)");
            $stmt->bind_param("iss",$id,$branchName,$post);
            $execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
            $stmt->close();
            $conn->close();
	}
?>