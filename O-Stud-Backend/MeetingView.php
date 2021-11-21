<?php
require ("classes/db.php");

$dbconnect= new database();
$connection=$dbconnect->connect();



$stmt=$connection->prepare("SELECT * FROM meetings ORDER BY date");

$stmt->execute();
$meetings=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<body>
<?php
  foreach($meetings as $i => $meeting): ?>
    <tr>
      <th scope="row"><?php  echo $i + 1 ?></th>
    </td>
      <td><?php echo $meeting['name'] ?></td>
      <td><?php echo $meeting['link'] ?></td>
      <td><?php echo $meeting['date'] ?></td>
      <td>
      <a  href='Meetings/Meeting.update.php? id=<?php echo $meeting['id']?>'  class="btn btn-sm btn-outline-primary">Edit</a>

      <form style="display:inline-block" method="POST" action="Meetings/Meeting.delete.php">
        <input type="hidden" name='id' value="<?php echo $meeting['id'] ?>">
      <button href='Meetings/Meeting.delete.php?id= <?php echo $meeting['id'] ?>' class="btn  btn-sm btn-outline-danger">Delete</button>
      </form>
      </td>
    </tr>

  <?php endforeach; ?>    
</body>
</html>