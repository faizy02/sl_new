<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "SL" ?>
<?php include_once(SHARED_PATH . "/header.php"); ?>
<!--Content-->
<?php
if(is_post_request()){
  //$id = $_GET['id'];
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

    echo "THIS IS LOGIN REQUEST";
    echo $_POST['email'];
    echo $_POST['password'];

  $sql = "select * from customer where email like '" . $email . "' and password = '" . $password . "'";
  echo $sql;





}else {
  //redirect_to(url_for("/sl/public/login.php"));
}

// }else {
//   redirect_to("/sl/public/login.php");
// }
 ?>
<div class="container">
  <h1>Login</h1>
  <form class="" action="login.php?id=1" method="post">
    Email : <input type="email" name="email" value="" required>
    Password : <input type="password" name="password" value="" required>
    <input type="submit" name="submitlogin" value="submit">
  </form>

  </form>
</div>


<?php include_once(SHARED_PATH . "/footer.php"); ?>
