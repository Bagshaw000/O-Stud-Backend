<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="SignUp.css" />
    <title>STUD Sign Up Page</title>
</head>

<body>
    <div class="container-fluid" id="TopCont">
        <form id="form" class="form" action=" ../includes/signup.inc.php" method="POST">
            <div class="row gx-0 mt-2">
                <div class="col" id="FMContainer">
                    <h2 class="mt-5"><b>Sign Up</b></h2>
                    <p>
                        <img src="SignUpPic.png" alt="Sign Up Picture">
                    </p>
                </div>


<!--First Name-->
<div class="col-7">
                    <div class="rounded-start" id="SMContainer">
                        <div class="row">
                            <h3 class="d-flex justify-content-center my-5">Create Account</h3>
                            <div class="col-12 mb-3">
                                <div class="words">
                                    First Name
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="text" id="firstName" name="firstname" />
                                    <small style="color: red"></small>
                                </div>
                            </div> 



<!--Last Name-->
<div class="col-12 mb-3">
                                <div class="words">
                                    Last Name
                                    <small style="color: red"></small>
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="text" id="lastName" name="lastname" />
                                    <small style="color: red"></small>
                                </div>
                            </div> 



<!--School-->
<div class="col-12 mb-3">
                                <div class="words">
                                    School
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="text" id="school" name="school" />
                                </div>
                            </div> 


<!--Email-->
<div class="col-12 mb-3">
                                <div class="words">
                                    Email
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="email" id="email" name="email" />
                                </div>
                            </div> 


<!--Password first input-->
<div class="col-12 mb-3">
                                <div class="words">
                                    Password
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="password" id="passwordA" name="password" />
                                </div>
                                <small style="color: red"></small>
                            </div> 


<!--Second password input-->
<div class="col-12 mb-3">
                                <div class="words">
                                    Confirm Password
                                </div>
                                <div class="p-1 d-flex justify-content-center">
                                    <input class="rounded-pill border border-dark border-2" type="password" name="passwordcon" id="passwordB" />
                                    <small style="color: red"></small>
                                </div>
                            </div>




<div class="col-12 mb-5">
                                <div class="p-3 d-flex justify-content-center">
                                    <small id="success" style="color: red"></small>
                                    <button class="rounded-pill border border-dark border-2" type="submit" id="submitBtn" name="Usersubmit">
                                        <b> Sign up </b>
                                </div>
                                <p style="font-size: 1px; margin-left: 38%;"> <span style="filter:brightness(200%)">Already have an account? </span><a href="../LogInPage/LogIn.php" /><em><b>Login here</b></em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="SignUpPage/SignUp.js"></script>
</body>

</html>

