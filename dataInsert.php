<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Insert Page </title>
</head>
<body>
     <?php include 'navbar.php' ?>

     <div class="form_area">
          <h1>News Insert </h1>
          <form action="" method="POST" enctype="multipart/form-data">
               <textarea name="news" rows="10" cols="80" placeholder="Enter Your News" required></textarea> <br>
               <input type="file" name="image" value="" required> 
               <input type="submit" name="submit" value="Submit">
          </form>



          <?php 

               include 'db_conn.php';

               if (isset($_POST['submit'])) {
                   
                    $news        = $_POST['news'];
                    $image       = $_FILES['image']['name'];
                    $image_type  = $_FILES['image']['type'];
                    $image_size  = $_FILES['image']['size'];
                    $image_tem   = $_FILES['image']['tmp_name'];
                    $image_store = "image/" . $image;
               
                    if (move_uploaded_file($image_tem, $image_store)) {
                         $sql = "INSERT INTO news_value(news, image) VALUES('$news', '$image')";
                         $result = mysqli_query($conn, $sql);
               
                         if ($result == true) {
                              echo 'Data inserted successfully';
                         } else {
                              echo 'Data not inserted successfully';
                         }
                    } else {
                         echo 'Failed to upload the image.';
                    }
               }
                

          ?>
     </div>
</body>
</html>