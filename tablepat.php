
<!doctype.html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> PATIENT LIST</h3>
    <style>
    h3{
      text-align:center;
    }
    </style>        
    
</body>

<?php
$connection=mysqli_connect('localhost','root','');
$db= mysqli_select_db($connection, 'project');
$query="SELECT * FROM  patient";
$query_run= mysqli_query($connection,$query);
?>
<table class="table table-bordered" style="background-color:white;">
   <thead class="table-dark">
    <tr>
        <th> ID </th>
        <th> NAME </th>
        <th> age</th>
        <th> patient problem</th>
        <th> DELETE </th>
    
    
    </tr>
</thead>

<?php
   if($query_run)
   {
     while($row = mysqli_fetch_array($query_run))
     {
        ?>
        <tbody>
            <tr>
                <th> <?php echo $row['id']; ?> </th>
                <th> <?php echo $row['name']; ?> </th>
                <th> <?php echo $row['age']; ?> </th>
                <th> <?php echo $row['patientproblem']; ?> </th>

            <form action="deletepa.php"  method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?> " >
                <th> <input type="submit" name="delete" class="btn btn-danger" value="delete"> </th>
                </form>
     
  
            </tr>
        </tbody>
        <?php
   }
}
   else{
    echo "no record found";
   }
?>
</table>
