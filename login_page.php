<?php
// start the session
session_start();



// check if the user is logged in

if (isset($_SESSION['id']) && isset($_SESSION['jenis']))
{
    $id = $_SESSION['id'];
    $fullname = $_SESSION['fullname'];
    $username = $_SESSION['username'];
    $emailaddress = $_SESSION['emailaddress'];
    $password = $_SESSION['password'];
    $confirmpassword = $_SESSION['confirmpassword'];
    $prodi = $_SESSION['prodi'];
    $jenis = $_SESSION['jenis'];
    $asisten = "asisten";
    if ($_SESSION['jenis'] == $asisten) 
    {
        header('Location: dashboard/');
    }
    else 
    {
        header('Location: dashboard praktikan/');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- META --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- link Bootstrap CSS -->

        <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Masuk ke folder CSS nya-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--selesai-->
</head>


<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Login</h1>
                            <form action="login.php" method="POST">
                                <form class="form-login">
                                    <!-- Email -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1">Email address</label>
                                        <input type="email" id="emailaddress" name="emailaddress" class="form-control"
                                        placeholder="Email" />
                                    </div>
                                    <!-- Password -->
                                    <div class="form-outline mb-4">

                                        
                                        <label class="form-label " for="form2Example2">Password</label>
                                        <!-- forgot password-->
                                        <a href="#!" class="float-end text-primary">Forgot password?</a>
                                        <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Password"/>
                                    </div>
                                    <!-- Password -->
    
                                    <br>
                                    <!-- 2 kolom untuk inline styling -->
                                    <div class="row mb-4">
                                        <div class="col d-flex">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                    checked />
                                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit  -->
                                    <div class="bottom">
                                        <button type="submit" class="col-12 btn btn-primary btn-block mb-4">
                                            Login
                                        </button>
                                    </div>
                                    <p class="text-center"> Don't have account yet?<a href="register_page.php" class="text-primary"> Sign up</a></p>
                                </form>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>