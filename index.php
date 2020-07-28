<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Youtube Thumbnail Downloader</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
					<center><img src="logo.jpg" height="150" ></center>
					<div class="card text-center">
						<div class="card-header text-white bg-primary">
							Youtube Thumbnail Downloader
						</div>
						<div class="card-body">
							<form action="" method="post">
							<div class="form-group">
								<input type="text" name="link"class="form-control" placeholder="Enter Video URL" required="">
							</div>
							<input type="Submit" name="submit"class="btn btn-primary" value="Search" />
							</form>
						</div>
							<?php 
								if(isset($_POST['submit']))
								{
									$url=$_POST['link'];
									$split=explode("v=", $url);
									$video_id=$split[1];
									if(!empty($video_id))
									{?>
										<div class="container">
											<div class="row">
												<div class="col-sm-3">
													<div class="card">
											<div class="card-header text-white bg-danger">
												Low Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/default.jpg" alt="" width="200" height="150">
											</div>
											<div class="card-footer"><a target="_blank"href="http://img.youtube.com/vi/<?php echo $video_id;?>/default.jpg" class="btn btn-success">Preview</a></div>
										</div>
											</div>
											<div class="col-sm-3">
													<div class="card">
											<div class="card-header text-white bg-danger">
												Medium Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/mqdefault.jpg" width="200"height="150">
											</div>
											<div class="card-footer">
											<a target="_blank"href="http://img.youtube.com/vi/<?php echo $video_id;?>/mqdefault.jpg" class="btn btn-success">Preview</a>
											</div>
										</div>
											</div>
											<div class="col-sm-3">
													<div class="card">
											<div class="card-header text-white bg-danger">
												High Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/hqdefault.jpg" alt="" width="200"height="150">
											</div>
											<div class="card-footer">
												<a target="_blank" href="http://img.youtube.com/vi/<?php echo $video_id;?>/hqdefault.jpg" class="btn btn-success">Preview</a>
											</div>
										</div>
											</div>
											<div class="col-sm-3">
													<div class="card">
											<div class="card-header text-white bg-danger">
												Extra High Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/maxresdefault.jpg" alt="" width="200"height="150">
											</div>
											<div class="card-footer">
													<a target="_blank"href="http://img.youtube.com/vi/<?php echo $video_id;?>/maxresdefault.jpg"  class="btn btn-success">Preview</a>
											</div>
										</div>
											</div>
											</div>
										</div>
										
					
					
					
					
									<?php } } ?>
						</div>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>