<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Youtube Thumbnail Downloader</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<center><img src="logo.jpg" height="100"></center>
					<div class="card">
						<div class="card-header  text-center bg-primary text-white text-uppercase">
							Youtube Thumbnail Downloader
						</div>
						<div class="card-body text-center">
							<form action="" method="post">
								<div class="form-group">
									<input type="text" name="link" class="form-control" placeholder="Enter Video URL" required="">
								</div>
								<input type="submit" name="submit" value="Search" class="btn btn-success">
							</form>
						</div>
						<?php
							if(isset($_POST['submit']))
							{
								$url=$_POST['link'];
								$split=explode("v=",$url);
								$video_id=$split[1];
								if(!empty($video_id))
								{?>
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<div class="card text-center">
											<div class="card-header bg-danger text-white">
												Low Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/default.jpg" width="200" height="150">
											</div>
											<div class="card-footer">
												<a href="http://img.youtube.com/vi/<?php echo $video_id;?>/default.jpg" target="_blank" class="btn btn-success">Preview</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card text-center">
											<div class="card-header bg-danger text-white">
												Medium Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/mqdefault.jpg" width="200" height="150">
											</div>
											<div class="card-footer">
												<a href="http://img.youtube.com/vi/<?php echo $video_id;?>/mqdefault.jpg" target="_blank" class="btn btn-success">Preview</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card text-center">
											<div class="card-header bg-danger text-white">
												High Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/hqdefault.jpg" width="200" height="150">
											</div>
											<div class="card-footer">
												<a href="http://img.youtube.com/vi/<?php echo $video_id;?>/hqdefault.jpg" target="_blank" class="btn btn-success">Preview</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card text-center">
											<div class="card-header bg-danger text-white">
												Extra High Quality
											</div>
											<div class="card-body">
												<img src="http://img.youtube.com/vi/<?php echo $video_id;?>/maxresdefault.jpg" width="200" height="150">
											</div>
											<div class="card-footer">
												<a href="http://img.youtube.com/vi/<?php echo $video_id;?>/maxresdefault.jpg" target="_blank" class="btn btn-success">Preview</a>
											</div>
										</div>
									</div>
								</div>
							</div>
								<?php }
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script></body>
</html>