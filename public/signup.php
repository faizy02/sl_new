<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "SL" ?>
<?php include_once(SHARED_PATH . "/header.php"); ?>
<!--Content-->
<?php
if(is_post_request()){
  //$id = $_GET['id'];
  $name = isset($_POST['name']) ?? '';
  $email = isset($_POST['email']) ?? '';
  $password = isset($_POST['password']) ?? '';

    echo "THIS IS LOGIN REQUEST";
    echo $_POST['email'];
    echo $_POST['password'];

}else {
  //redirect_to(url_for("/sl/public/login.php"));
}

// }else {
//   redirect_to("/sl/public/login.php");
// }
 ?>
<div class="container">
  <h1>Sign Up</h1>
  <form class="" action="login.php?id=2" method="post">
    <dl class="attributes">
      <dt>Email :</dt>
      <dd><input type="email" name="email" value="" required></dd>
    </dl>
    <dl class="attributes">
      <dt>Email :</dt>
      <dd><input type="email" name="email" value="" required></dd>
    </dl>
    <dl class="attributes">
      <dt>Password : </dt>
      <dd><input type="password" name="password" value="" required></dd>
    </dl>
    <dl class="attributes">
      <dt>Confirm Password :</dt>
      <dd><input type="password" name="confirm_password" value="" required></dd>
    </dl>

    <dl class="">
      <dt></dt>
      <dd><input type="submit" name="submitsignup" value="submit"></dd>
    </dl>

  </form>
</div>


<?php include_once(SHARED_PATH . "/footer.php"); ?>
