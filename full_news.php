<?php 

include 'db_conn.php';

?>
     <style>
          img {
               width: 750px;
               height: 300px;
          }
          .div12 {
               width: 700px;
               text-align: center;
               justify-content: center;
               margin-left: 200px;
               margin-top: 40px;
          }
     </style>

<?php

if(isset($_POST['submit'])) {
     $id = $_POST['id'];


     $sql = "SELECT * FROM news_value WHERE id = '$id'";
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result)) {

          ?>
               <div class="div12">
                    <img class="image2" src="image/<?php echo $row['image'] ?>" alt="">
                    <p> <?php echo $row['news']; ?> </p>
                    <h3><?php echo $row['date']; ?></h3>
               </div>
               
          <?php
     }
}

?>