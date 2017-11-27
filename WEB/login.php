<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
// Mencegah MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

if ($username == 'admin' && $password == 'admin123') {
header("location: index.php"); // Mengarahkan ke halaman profil
} else {
$error = "Username atau Password belum terdaftar";
}

}
}
?>