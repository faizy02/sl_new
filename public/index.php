<?php require_once("../private/initialize.php"); ?>

<?php $page_title = "SL" ?>
<?php include_once(SHARED_PATH . "/header.php"); ?>


<div class="container">
	<div class="row justify-content-center">
			<div class="col-lg-4">
			<p class="lead">Welcome to SL</p>
		</div>
		<div class="col-lg-5">
			<p class="lead">Find your ideal hotel and compare prices</p>
		</div>
		</div>
		<div class="row justify-content-center">
		<div class="col-lg-9">
			<form class="" action="index.html" method="post">

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
		<br>
		</div>
	<div class="row"><br></div>
	<div class="row justify-content-center">

		<div class="col-lg-9">
		<p class="lead">Featured</p>
		</div>
	</div>
	<div class="row text-center justify-content-center">
		<div class="col-lg-3">
				<div class="card mb-4 shadow-sm">
							<img class="card-img-top" data-src="" alt="Thumbnail [100%x225]" style="height: 155px; width: 100%; display: block;" src="images/image1.jpg" data-holder-rendered="true">
							<div class="card-body">
								<p class="card-text lead text-left"><b>Thing1</b> <small class="text-muted">This is the best one there is</small></p>
										 <div class="d-flex justify-content-between align-items-center">
										 <div class="flex-row">
														 <div class="p-1"><p class="lead price"><strong>53,000 pkr</strong></p></div>
														 <button type="button" class="btn btn-sm btn-info">View Deal</button>
										 </div>
				<!--<div class="btn-group">
					<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
					<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
				</div>
				<small class="text-muted">9 mins</small>-->
				</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3"></div>
		<div class="col-lg-3"></div>
	</div>
</div>
<?php include_once(SHARED_PATH . "/footer.php"); ?>
