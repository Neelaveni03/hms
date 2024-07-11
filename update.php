<!doctype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    <body>
        <?php
        $connection= mysqli_connect('localhost','root','');
        $db =mysqli_select_db($connection,'project');
        $id=$_POST['id'];
        $query="SELECT * FROM doctor WHERE id='$id' ";
        $query_run=mysqli_query($connection,$query);
        if($query_run)
        {
         while($row=mysqli_fetch_array($query_run))
         {
            ?>
          <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
           <div class="form-group">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control"value="<?php echo $row['name'] ?>"
             placeholder="Enter Name" required>
   </div>
        <div class="form-group">
        <label for="">email</label>
        <input type="text" name="email" class="form-control"value="<?php echo $row['email'] ?>"

placeholder="Enter Email" required>
        </div>

        <div class="form-group">
        <label for="">phone number</label>
        <input type="text" name="phone" class="form-control"value="<?php echo $row['phone'] ?>"
            placeholder="Enter Number" required>
        </div> 

        <div class="form-group">
        <label for="">specilist</label>
        <input type="text" name="specilist" class="form-control"value="<?php echo $row['specilist'] ?>"
                placeholder="Enter Specilist" required>
       </div>
       <button type="submit" name="update" class="btn btn-primary">update data</button>
       <a href="doctor.php" class="btn btn-danger">cancel</a>
 </form>
<?php
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $specilist=$_POST['specilist'];
    $query ="UPDATE doctor SET name='$name',email='$email',phone='$phone',specilist='$specilist' WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
        echo '<script> alert("data updated"); </script>';
        header("location:doctor.php");
       
    }
    else{
        echo '<script> alert("data not updated"); </script>';
    
    }
}
         ?>
         <?php
         }
        }
        
        