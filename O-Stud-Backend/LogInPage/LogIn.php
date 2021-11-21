<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="LogIn.css" />
    <title>STUD LogIn Page</title>
</head>

<body>
    <form id="form" class="form" action="../includes/login.inc.php" method="POST">
        <div class="container-fluid overflow-hidden">
            <div class="row gx-0 mt-2">




                <div class="col-6" id="FMContainer">
                    <div class="container" id="FCCont">
                        <div>
                            <img src="PicsLog/Logo.png" alt="Logo" id="logo">
                            <h2 class="mt-0"><span class="ms-5"><b>Welcome back </b> </span>
                                <img src="PicsLog/LogInPic.png" alt="Log In Picture">
                            </h2>
                        </div>
                    </div>
                </div>



                <!--Email-->
                <div class="col-6">
                    <div class="container rounded-start" id="SMContainer">
                        <div class="container" id="SCCont">
                            <div class="row">
                                <h3 class="d-flex justify-content-center mb-3 mt-5"> <b>Login</b> </h3>
                                <div class="col-12">
                                    <div class="col-12">
                                        <div class="words">
                                            Email
                                        </div>
                                        <div class="p-1 d-flex justify-content-center">
                                            <input class="rounded-pill border border-dark border-2" type="email" id="email" name="email" />
                                        </div>
                                    </div>
                                </div>



                                <!--Password-->
                                <div class="col-12">
                                    <div class="words">
                                        Password
                                    </div>
                                    <div class="p-1 d-flex justify-content-center">
                                        <input class="rounded-pill border border-dark border-2" type="password" id="passwordA" name="password" />
                                    </div>
                                    <small style="color: red"></small>
                                </div>



                                <!--Submit button-->
                                <div class="col-12">
                                    <div class="p-3 d-flex justify-content-center">
                                        <small id="success" style="color: red"></small>
                                        <button class="rounded-pill border border-dark border-2" type="submit" id="submitBtn" name="submit1">
                                            <b> Submit </b>
                                    </div>
                                    <p style="font-size: 5px; margin-left: 30%;"> <span style="filter:brightness(150%)">Don't have an account? </span><a href="../SignUpPage/SignUp.php"><em><b>Sign Up</b></em></p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="LogInPage/LogIn.js"></script>
</body>

</html>