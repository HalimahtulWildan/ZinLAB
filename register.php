<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $emailaddress = $_POST['emailaddress'];
    $prodi = $_POST['prodi'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $jenis = "praktikan";

    // Insert data into users table
    $sqlinsert = "INSERT INTO users (fullname, username, emailaddress, prodi, no_telp, password, confirmpassword, jenis) 
            VALUES ('$fullname', '$username', '$emailaddress', '$prodi', '$no_telp', '$password', '$confirmpassword' '$jenis')";
    // CARI USERNAME
    $sqlusername = "SELECT * FROM users WHERE username = '$username'";
    // CARI EMAIL
    $sqlemail = "SELECT * FROM users WHERE emailaddress = '$emailaddress'";

    $resultemail = mysqli_query($conn, $sqlemail);
    $resultusername = mysqli_query($conn, $sqlusername);
    if (mysqli_num_rows($resultemail) == 0){
        if (mysqli_num_rows($resultusername) == 0)
        {
            if (mysqli_query($conn, $sqlinsert)) {
                echo "<center><h1>Data berhasil di tambahkan ke table users.<h1>
                <button><strong><a href= 'login.html'>OK</a></strong></button></center>";
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else
        {
            echo "<center><h1>Username telah digunakan.<h1>
            <button><strong><a href= 'register.html'>OK</a></strong></button></center>";
        }
    } 
    else 
    {
    echo "<center><h1>Email telah digunakan.<h1>
    <button><strong><a href= 'register.html'>OK</a></strong></button></center>";
    }


    mysqli_close($conn);
}
?>
