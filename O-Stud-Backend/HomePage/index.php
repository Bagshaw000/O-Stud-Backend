<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="HomePage.css" />
    <title>STUD Home Page</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" id="NavCont">
                <a class="navbar-brand">
                    <img src="PicsIndex/Logo.png" alt="logo" id="Logo" class="img-responsive" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="FAQs.php">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" style="background-color: #228ad680" href="../SignUpPage/SignUp.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border rounded-pill" style="border-color: rgba(34, 138, 214, 0.5)" href="../LogInPage/LogIn.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid" id="MidCont">
        <div class="container">
            <img src="PicsIndex/CenterPic.png" alt="CenterPic" id="CentPic" />
        </div>
    </div>

    <div class="container px-4" id="bottom">
        <div class="row gx-5" id="BottomRow">
            <div class="col-4 cols-sm-6" id="BaseDescription">
                <div class="p-4">
                    <h1>Our Mission</h1>
                    <p>
                        O-Stud is here to help all students take control of their lives
                        and achieve stability in their educational journey
                    </p>
                </div>
            </div>
            <div class="col-9 col-md-6" id="DescPic">
                <!--PLEASE CHECK THIS OUT-->
                <div class="p-1">
                    <img src="PicsIndex/BottomPic.png" alt="BottomPic" id="BottomPic" />
                </div>
            </div>
        </div>
    </div>


</body>

</html>