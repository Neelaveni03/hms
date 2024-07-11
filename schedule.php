<!doctype.html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> SCHEDULE </h3> 
    <style>
        h3{
            text-align:center;
            padding:10px 10px; 
        }
        </style>
    
</body>

<?php
$connection=mysqli_connect('localhost','root','');
$db= mysqli_select_db($connection, 'project');
$query="SELECT * FROM  adminschedule";
$query_run= mysqli_query($connection,$query);
?>
<table class="table table-bordered" style="background-color:white;">
   <thead class="table-dark">
    <tr>
        <th> DOCTOR NAME </th>
        <th>  DATE</th>
        <th>schedule </th>
        <th>delelte</th>

    
    
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
                <th> <?php echo $row['doctorname']; ?> </th>
                <th> <?php echo $row['date']; ?> </th>
                <th> <?php echo $row['schedule']; ?> </th>
                <form action="updatesche.php"  method="POST">
            <input type="hidden" name="doctorname" value="<?php echo $row['doctorname'] ?> " >
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
