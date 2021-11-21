<?php
require ("classes/db.php");

$dbconnect= new database();
$connection=$dbconnect->connect();



$stmt=$connection->prepare("SELECT * FROM todo ORDER BY date");

$stmt->execute();
$todos=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<body>
<?php
  foreach($todos as $i => $todo): ?>
    <tr>
      <th scope="row"><?php  echo $i + 1 ?></th>
    </td>
      <td><?php echo $todo['name'] ?></td>
      <td><?php echo $todo['date'] ?></td>
      <td>
      <a  href='todo/todo.update.php? id=<?php echo $todo['id']?>'  class="btn btn-sm btn-outline-primary">Edit</a>

      <form style="display:inline-block" method="POST" action="todo/todo.delete.php">
        <input type="hidden" name='id' value="<?php echo $todo['id'] ?>">
      <button href='todo/todo.delete.php?id= <?php echo $todo['id'] ?>' class="btn  btn-sm btn-outline-danger">Delete</button>
      </form>
      </td>
    </tr>

  <?php endforeach; ?>    
</body>
</html>