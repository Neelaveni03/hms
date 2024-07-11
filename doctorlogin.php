<?php
   $id= $_POST["id"];
   $password= $_POST["password"];
  
   $conn=new mysqli('localhost','root','','project');
     if($conn->connect_error){
        die('connection failed :' .$conn->connect_error);
    }else{
      $stmt=$conn->prepare("select * from doctor where id=?");
      $stmt->bind_param("s",$id);
      $stmt->execute();
      $stmt_result=$stmt->get_result();
       if($stmt_result->num_rows > 0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']==$password){
          header("location:doctormod.php");
        } else{
        echo "<h2> invalid username or password </h2>";
       }
      }
    }
       ?>