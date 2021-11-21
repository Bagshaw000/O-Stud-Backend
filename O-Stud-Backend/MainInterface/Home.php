<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="MainPage.css" />
    <style>
        <?php include 'MainPage.css'; ?>
    </style>
    <title>Main Page</title>
</head>

<body>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body p-0 rounded-bottom">

                    <!--Vertical navigation-->
                    <nav>
                        <div class="align-items-start">
                            <div class="nav flex-column nav-pills rounded-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <form>
                                    <label for="img"></label>
                                    <input type="image" accept="image/*" src="./PicsInt/Pic1.png" class="nav-link my-3 mx-5" id="profile" name="profile" value="profile" onchange="hideIcon(this);" />
                                </form>



                                <button class="nav-link my-3 mx-5" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <a class="fs-4" target="_self" href="Home.php"> <img src="./PicsInt/home.png" alt="Home" id="icons">
                                        Home </a>
                                </button>


                                <button class="nav-link my-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <a class="fs-4" target="_self" href="Class.php"> <img src="./PicsInt/class.png" alt="Class" id="icons" style="height:40px; width:40px">
                                        Class </a>
                                </button>


                                <button class="nav-link my-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    <a class="fs-4" target="_self" href="Meetings.php"> <img src="./PicsInt/meetings.png" alt="Meetings" id="icons">
                                        Meetings </a>
                                </button>

                                <button class="nav-link my-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <a class="fs-4" target="_self" href="ToDoList.php"><img src="./PicsInt/to-do-list.png" alt="To Do List" id="icons">
                                        To Do List </a>
                                </button>

                                <button class="nav-link my-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <a class="fs-4" target="_self" href="MeTime.php"> <img src="./PicsInt/me-time.png" alt="Me Time" id="icons">
                                        Me Time </a>
                                </button>



                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>




        <div class="col-sm mb-3">
            <div class="card">
                <div class="card-body rounded-bottom">

                    <nav class="mx-3">
                        <h1 class="d-flex justify-content-center"><b>Dashboard</b></h1>
                    </nav>


                    <!--Top Content-->
                    <div class="row">
                        <div class="col-3">
                            <div class="card-body rounded-bottom">
                                <img src="./PicsInt/Pic2G.png" alt="Girl's Picture" id="FirstS">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="card">
                                <div class="card-body rounded-bottom fs-3">
                                    <p style="color: black; padding-top: 100px;">Plan educational activites with efficieny to keep you on your A-game</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Middle Content-->

                    <div class="row">
                        <div class="col-7">
                            <div class="card-body rounded-bottom fs-3">
                                <p style="color: black; padding-top: 100px; text-align: right; ">Create time to do the things you love</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body rounded-bottom">
                                    <img src="./PicsInt/Pic3.png" alt="Girl's Picture" id="SecS">
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Bottom content-->
                    <div class="row">
                        <div class="col-3">
                            <div class="card-body rounded-bottom">
                                <img src="./PicsInt/Pic4.png" alt="Board Picture" id="ThirdS">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="card">
                                <div class="card-body rounded-bottom fs-3">
                                    <p style="color: black; padding-top: 100px;">Keep track of your daily and weekly progress</p>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>></script>
    <script src="./script.js"></script> -->
</body>

</html>