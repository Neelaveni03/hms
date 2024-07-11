<!doctype html>
<?php
  include("admod.php")
  ?>  
  <head>
    <link rel="stylesheet" href="dash.css">
</head>
    <body> 
      <?php
    include('database/security.php')
?>
<div class="content">
    <div class="cards">
        <div class="card">
          <div class="box">
          <div class="icon-case">
            <img src="doctor.png">

                    <?php
                
                            $query = "SELECT id FROM doctor ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total doctor: '.$row.'</h4>';
                    ?>
    </div>     
        </div> 
          </div>

  <div class="cards">
    <div class="card">
      <div class="box">
        <div class="icon-case">
          <img src="patientnew.png">
          <?php
                            $query = "SELECT id FROM patient ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total patient: '.$row.'</h4>';
                            ?>
</div>
  </div> 
     </div>
   
    <div class="cards">
      <div class="card">
        <div class="box">
          <div class="icon-case">
            <img src="adminnwe2.png">

        <?php
        $query ="SELECT username FROM admin ORDER BY  username";
        $query_run = mysqli_query($connection,$query);
        $row = mysqli_num_rows($query_run);
        echo '<h4> total admin: '.$row.'</h4>';
        ?>
        </div>
</div>
</div>
</div>
</div>

      
        </div>
</div>


      


      




        
