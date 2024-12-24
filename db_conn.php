<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'news_website';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);

     if(!$conn) {
          echo 'database not connected'.mysqli_connect_error();
     }

     function formatDate($date) {
          return date('Y-m-d', strtotime($date));
     }
     function formatDate2($date2) {
          return date('g:i a', strtotime($date2));
     }
     function formatDate3($date3) {
          return date('l', strtotime($date3));
     }
?>