<?php

session_start();
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];
    $selected_jenis = $_POST['jenis'];
    $query_sql = "SELECT * FROM users WHERE emailaddress = '$emailaddress' AND password = '$password'";

    $result = mysqli_query($conn, $query_sql);
    if ($result) 
    { // Check if query execution is successful
        if (mysqli_num_rows($result) > 0) 
        {

            $row = mysqli_fetch_assoc($result);
            // Authentication is successful, set session variables
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['prodi'] = $row['prodi'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['confirmpassword'] = $row['confirmpassword'];
            $_SESSION['emailaddress'] = $row['emailaddress'];
            $_SESSION['jenis'] = $row['jenis'];
            if ($_SESSION['jenis'] == "asisten") 
            {
                header("Location: dashboard/index.php");
            } 
            else 
            {  
                header("Location: dashboard praktikan/index.php");
            }
        } 
        else 
        {
            echo "<center><h1>Email atau Password atau Role Salah Silahkan Coba Lagi.<h1>
            <button><strong><a href= 'login_page.php'>Login</a></strong></button></center>";
        }
    } 
    else 
    {
        echo "Query execution failed: " . mysqli_error($conn);
    }
}
