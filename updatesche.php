<?php
$connection= mysqli_connect('localhost','root','');
$db =mysqli_select_db($connection,'project');
if(isset($_POST['delete']))
{
    $doctorname=$_POST['doctorname'];
    $query="DELETE FROM adminschedule WHERE doctorname='$doctorname' ";
    $query_run=mysqli_query($connection, $query);
    if($query_run)
    {
     echo '<script> alert( "deleted"); </script>';
     header("location:schedule.php");
    }
    else{
        echo '<script> alert( " not deleted"); </script>';
    
    }
}
