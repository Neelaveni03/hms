<!doctype html>
<head>
    <title>pateint registration form</title>
    <link rel="stylesheet" href="regris.css">
         
</head>
<body>
    <div>
        <form action="regristration.php" method="POST">
            <div class="container">
            <h1>patient regristration</h1>
            <label for="id">id</label>
            <input type="text" name="id">
            <label for="name"><b>Name</b></label>
            <input type="text"  id="name" name="name" required>

            <label for="address"><b>Address</b></label>
            <input type="text" id="address" name="address" required>        
            <label for="phonenumber"><b>phonenumber</b></label>
            <input type="text" id="phonenumber" name="phonenumber" required>
            <label for="problem"><b>problem</b></label>
            <input type="text" id="patientproblem" name="patientproblem" required>
            <label for="age"><b>age</b></label>
            <input type="number" id="age" name="age" required>
            
           <button type="submit" name="create" value="save">Registration</button>
            <button><a href="patientmod.php" class="btn btn-danger">Back</a></button>

  
            </div>
        </form>
    </div>
    <label>

<?php
$conn = mysqli_connect("localhost","root","", "project");
$db = mysqli_select_db($conn, 'project');
if(isset($_POST['create']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phonenumber=$_POST['phonenumber'];
    $patientproblem=$_POST['patientproblem'];
    $age=$_POST['age'];
    $query= "INSERT INTO patient(id, name,  address, phonenumber,patientproblem,age) VALUES ('$id', '$name', '$address','$phonenumber' ,'$patientproblem' ,'$age')";
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