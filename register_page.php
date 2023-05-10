<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
</head>

<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Register</h1>
                            <form action="register.php" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullname">Full Name</label>
                                    <input type="text" id="fullname" name="fullname" class="form-control"
                                        placeholder="Nama Lengkap" />
                                </div>
                                <!-- username -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control"
                                        placeholder="username" />
                                </div>
                                <!-- email -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="emailaddress">Email address</label>
                                    <input type="email" id="emailaddress" name="emailaddress" class="form-control"
                                        placeholder="Email" />
                                </div>
                                <!-- prodi -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="prodi">Prodi</label>
                                    <input type="text" id="prodi" name="prodi" class="form-control"
                                        placeholder="Prodi" />
                                </div>
                                <!-- no_telp -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="no_telp">No. Telpon</label>
                                    <input type="tel" id="no_telp" name="no_telp" class="form-control"
                                        placeholder="No. Telp" />
                                </div>
                                <!-- password -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Password" />
                                </div>
                                <!-- confirm password -->
                                <div class="form-outline mb-4">
                                    <label class="form-label " for="confirmpassword">Confirm Password</label>
                                    <input type="password" id="confirmpassword" name="confirmpassword"
                                        class="form-control" placeholder="Confirm Password" />
                                </div>
                                <!-- remember me -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="remember-me"
                                        name="remember-me" checked />
                                    <label class="form-check-label" for="remember-me">
                                        Remember me
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <div class="bottom">
                                    <button type="submit" class="col-12 btn btn-primary btn-block mb-4">
                                        Create new Account
                                    </button>
                            </form>
                        </div>


                        <p class="text-center"> Already have account?<a href="login.html" class="text-primary">
                                Sign in</a></p>
                        <a href="login.php"></a>
                        </section>
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