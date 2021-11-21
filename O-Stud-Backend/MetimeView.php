<?php
require ("classes/db.php");

$dbconnect= new database();
$connection=$dbconnect->connect();



$stmt=$connection->prepare("SELECT * FROM metime ORDER BY date");

$stmt->execute();
$metimes=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<body>
<?php
  foreach($metimes as $i => $metime): ?>
    <tr>
      <th scope="row"><?php  echo $i + 1 ?></th>
    </td>
      <td><?php echo $metime['name'] ?></td>
      <td><?php echo $metime['date'] ?></td>
      <td>
      <a  href='Metime/Metime.update.php? id=<?php echo $metime['id']?>'  class="btn btn-sm btn-outline-primary">Edit</a>

      <form style="display:inline-block" method="POST" action="Metime/Metime.delete.php">
        <input type="hidden" name='id' value="<?php echo $metime['id'] ?>">
      <button href='Metime/Metime.delete.php?id= <?php echo $metime['id'] ?>' class="btn  btn-sm btn-outline-danger">Delete</button>
      </form>
      </td>
    </tr>

  <?php endforeach; ?>    
</body>
</html>