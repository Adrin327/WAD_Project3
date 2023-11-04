<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //koneksi ke database
    $conn = mysqli_connect($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

    //ambil data dari tabel database / query data
    $result = mysqli_query($conn,"SELECT * FROM nama tabel");

    //ambil data (fetch) data dari object $result
    //mysqli_fetch_row() // mengembalikan array numerik
    //mysqli_fetch_assoc() // mengembalikan array associative
    //mysqli_fetch_array() // mengembalikan array keduanya
    //mysql_fetch_object() // mengembalikan objek
?>