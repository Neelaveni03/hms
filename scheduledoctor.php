
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
$query="SELECT * FROM  docschedule";
$query_run= mysqli_query($connection,$query);
?>
<table class="table table-bordered" style="background-color:white;">
   <thead class="table-dark">
    <tr>
        <th>DOCTOR NAME</th>
        <th> AVAILBLE</th>
        <th> CONSULT FEE</th>
        <th> DATE</th>
    
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
                <th> <?php echo $row['docname']; ?> </th>
                <th> <?php echo $row['available']; ?> </th>
                <th> <?php echo $row['consult fee']; ?> </th>
                <th> <?php echo $row['date']; ?> </th>

    
     
  
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
