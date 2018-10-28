<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "SL" ?>
<?php include_once(SHARED_PATH . "/header.php"); ?>
<?php
$query = $_POST['search'] ?? 'Nothing sent';
echo "QUERY SEARCHED : " . $query;

$sql = "SELECT * FROM hall WHERE city like '%" . $query . "%'";
//echo $sql;

$result = mysqli_query($db, $sql);

confirm_result_set($result);

//$subject = mysqli_fetch_assoc($result);



 ?>
<!--CONTENT-->
<div class="container">
  <table class="table">
    <tr>
      <th>HallID</th>
      <th>Hall Name</th>
      <th>Hall Location</th>
    </tr>
  <?php while($hall = mysqli_fetch_assoc($result)){ ?>

      <tr>
        <td><?php echo h($hall['hallid']) ?></td>
        <td><?php echo h($hall['name']) ?></td>
        <td><?php echo h($hall['city']) ?></td>
      </tr>


  <?php } ?>
  </table>


</div>

<?php  mysqli_free_result($result);?>
<?php include_once(SHARED_PATH . "/footer.php"); ?>
