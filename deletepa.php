<?php
$connection= mysqli_connect('localhost','root','');
$db =mysqli_select_db($connection,'project');
if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $query="DELETE FROM patient WHERE id='$id' ";
    $query_run=mysqli_query($connection, $query);
    if($query_run)
    {
     echo '<script> alert( "deleted"); </script>';
     header("location:dash.php");
    }
    else{
        echo '<script> alert( " not deleted"); </script>';
    
    }
}
