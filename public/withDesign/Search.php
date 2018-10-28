<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap - Prebuilt Layout</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="custom/custom.css" rel="stylesheet">
  <script type="text/javascript" src="js/glyphjs.js"></script>
	</head>
	<body>
    <div class="mynavbar">

    </div>
		<div id="mycontainer" class="container-fluid">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
          </form>
          <form class="form" action="process.php" method="post">

            <div class="input-group">
              <input type="text" class="form-control form-control-lg searchBar" placeholder="Search" name="searchQuery">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary searchBtn" name="submit">Search</button>
              </div>
            </div>

          </form>
          </div>
        </div>
      </div>

		</div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 offset-lg-2">
          <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Thing1</h5>
              <p class="card-text">Category > Things</p>
              <p class="card-text">54000 pkr</p>
              <div class="btn-group float-right" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary"><svg-icon><src href="icons/si-glyph-heart.svg"/></svg></button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="rowmywrapper">
        <div class="col-lg-2">
          <img id="searchImg" src="images/card-img.png" alt="">
        </div>
        <div class="col-lg-2">
            wow
        </div>

      </div>

    </div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.2.1.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap-4.0.0.js"></script>
	</body>
</html>
