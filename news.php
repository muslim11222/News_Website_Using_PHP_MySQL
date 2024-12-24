<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> News Show </title>
     <link rel="stylesheet" href="/News_Website_Using_PHP_MySQL/style.css">
</head>
<body>

     <?php include 'navbar.php' ?>
     <br> <br>

     
     <?php 

          include 'db_conn.php';

          $sql = "SELECT * FROM news_value order by id desc";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)) {
               ?>
                    
                    <div class="main_div">
                         <div class="image_div">
                              <img src="image/<?php echo $row['image']; ?>" alt="">
                         </div>

                         <div class="news_div">
                              <?php echo $row['news']; ?>
                         </div>

                         <div class="date_time_div">
                              <label id="label_one"><?php echo formatDate3($row['date']); ?></label> <br>
                              <label id="label_two"><?php echo formatDate($row['date']); ?></label> <br>
                              <label id="label_three"><?php echo formatDate2($row['date']); ?></label> <br><br>
                              <form action="full_news.php" method="POST">
                                  <input type="submit" id="submit" name="submit" value="Full News Show">
                                  <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
                              </form>
                         </div>
                    </div>
               <?php
          }

     ?>
     
     
</body>
</html>