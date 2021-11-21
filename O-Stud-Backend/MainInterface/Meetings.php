<!--Displaying the data-->
<?php
require("../classes/db.php");

$dbconnect = new database();
$connection = $dbconnect->connect();

$stmt = $connection->prepare("SELECT * FROM meetings ORDER BY date");

$stmt->execute();
$classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="MainPage.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                $("#myModal").modal('show');
            });
        });
    </script>
    <style>
        <?php include 'MainPage.css'; ?>
    </style>
    <title>Meetings Page</title>
</head>

<body>
    <div class="row">
        <div class="col-3 navAuto">
            <div class="card">
                <div class="card-body p-0 rounded-bottom">

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
                <div class="card-body p-4 rounded-bottom">

                    <nav class="my-3 mx-3">
                        <h1 class="d-flex justify-content-center"><b>Meeting</b></h1>
                    </nav>


                    <!--MODAL START -->
                    <div id="myModal" class="modal fade" tabindex=" -1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Meeting</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">


                                    <form action="../includes/Meeting.inc.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>

                                        <div class="form-group mb-3 form-control">
                                            <label>Date</label>
                                            <input type="datetime-local" name="date" class="form-control">
                                        </div>

                                        <div class="form-group mb-3 form-control">
                                            <label>Link</label>
                                            <textarea type="text" name="link" class="form-control"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="add"> Submit</button>
                                    </form>



                                </div>

                            </div>
                        </div>
                    </div>

                    <!--MODAL END -->

                    <!--Subjects inputs-->
                    <!--Modal Button trigger-->

                    <button type="button" style="background-color: rgba(34, 138, 214, 0.4); color:black;" class="btn btn-lg btn-primary pop_button px-5 border-0"> Meetings <img src="./PicsInt/add.png" alt="Add" id="icons">
                    </button>

                    <?php
                    foreach ($classes as $i => $class) : ?>

                        <div class="card-body rounded-bottom">
                            <div class=" row sections inputbody py-3">
                                <div class="col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 sections">
                                            Name
                                            <div class="d-flex justify-content-left">

                                                <?php
                                                echo $class['name']
                                                ?>
                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 sections">
                                            Time
                                            <div class="d-flex justify-content-left">

                                                <?php
                                                echo $class['date']
                                                ?>
                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 pb-4 sections">
                                            Link
                                            <div class="d-flex justify-content-left">

                                                <?php echo $class['link'] ?>

                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>

                                <!--Delete and edit buttons-->
                                <div class="col-3 pt-3">
                                    <td>
                                        <a href='../Meetings/Meeting.update.php? id=<?php echo $class['id'] ?>' class="btn btn-sm btn-outline-primary border-dark border-2">Edit</a>

                                        <form style="display:inline-block" method="POST" action="../Meetings/Meeting.delete.php">
                                            <input type="hidden" name='id' value="<?php echo $class['id'] ?>">
                                            <button href='../Meetings/Meeting.delete.php?id=' <?php echo $class['id'] ?> class="btn  btn-sm btn-outline-danger border-dark border-2">Delete</button>
                                        </form>
                                    </td>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>




                    <!--Ending part-->
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>






</body>

</html>