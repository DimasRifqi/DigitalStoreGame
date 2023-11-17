<?php

session_start();


include('koneksi.php');

$email     = $_POST['email'];
$password      = MD5($_POST['password']);

//query
$query  = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
$result     = mysqli_query($connection, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";

    $_SESSION['id_user']       = $row['id_user'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['username']       = $row['username'];

} else {
    
    echo "error";

}

?>