
<?php
require ("classes/db.php");

$dbconnect= new database();
$connection=$dbconnect->connect();

$stmt=$connection->prepare("SELECT * FROM classes ORDER BY date");

$stmt->execute();
$classes=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<body>
<?php
  foreach($classes as $i => $class): ?>
    <tr>
      <th scope="row"><?php  echo $i + 1 ?></th>
    </td>
      <td><?php echo $class['name'] ?></td>
      <td><?php echo $class['link'] ?></td>
      <td><?php echo $class['date'] ?></td>
      <td>
      <a  href='class/class.update.php? id=<?php echo $class['id']?>'  class="btn btn-sm btn-outline-primary">Edit</a>

      <form style="display:inline-block" method="POST" action="class/class.delete.php">
        <input type="hidden" name='id' value="<?php echo $class['id'] ?>">
      <button href='class/class.delete.php?id=' <?php echo $class['id'] ?>' class="btn  btn-sm btn-outline-danger">Delete</button>
      </form>
      </td>
    </tr>

  <?php endforeach; ?>    
</body>
</html>