

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Html form that displays the content -->
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href="app.cs">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Classes</title>
  </head>
  <body>
    <h1>Add Classes</h1>




  <form action="includes/todo.inc.php" method="POST" >
  <div class="form-group mb-3">
    <label >Name</label>
    <input type="text" name="name" class="form-control">
  </div>

  
  <div class="form-group mb-3">
    <label >Date</label>
    <input type="datetime-local" name="date" class="form-control" >
  </div>

  
  <button type="submit" class="btn btn-primary" name= "submit">Submit</button>
 

</form>

  </body>
</html>