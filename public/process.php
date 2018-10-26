<?php

require "connection.php";
if (isset($_POST['submit'])) {

    $queryText = $_POST['searchQuery'];

    $mysql_qry = "select * from halls where location like '$queryText'";

    $result = mysqli_query($conn,$mysql_qry);

    if(mysqli_num_rows($result) > 0){

    	echo "Searh Successful";

    }else {
    	echo "Search not successful";
    }

}

 ?>
