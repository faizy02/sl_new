<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "SL" ?>
<?php include_once(SHARED_PATH . "/header.php"); ?>
<!--Content-->
<div class="container">

  <p> <a href=<?php echo url_for("/sl/public/login.php"); ?>>Login</a>  <p>
    
  <h1>Search</h1>

  <form class="" action="search.php" method="post">
    <input type="text" name="search" value="" placeholder="Search">
    <input type="submit" name="" value="submit">
  </form>

</div>


<?php include_once(SHARED_PATH . "/footer.php"); ?>
