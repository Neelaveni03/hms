<!doctype html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <hr>
    <div class="container">
    <form action="" method="post">
    <div class="form-group">
        <label for="">Id</label>
        <input type="text" name="id" class="form-control" placeholder="enter Id"  required> 

    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
   </div>
        <div class="form-group">
        <label for="">email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
        <label for="">phone number</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter Number" required>
        </div> 

        <div class="form-group">
        <label for="">specilist</label>
        <input type="text" name="specilist" class="form-control" placeholder="Enter Specilist" required>
       </div>
        
       <button type="submit"name="insert" class="btn btn-primary">savedata</button>
       <a href="doctor.php" class="btn btn-danger">back</a>
</form>   
</body>
<?php
$conn = mysqli_connect("localhost","root","", "project");
$db = mysqli_select_db($conn, 'project');
if(isset($_POST['insert']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $specilist=$_POST['specilist'];
    $query= "INSERT INTO doctor(id, name, email, phone, specilist)  VALUES ('$id','$name','$email','$phone','$specilist')";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
      echo '<script> alert("data saved"); </script>';

    }
    else
    {
        echo '<script> alert("data not saved");</script>';
    }
    
}
  ?>