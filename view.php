<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Videos</title>

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		} video {
			width: 640px;
			height: 360px;
		} a {
			text-decoration: initial;		
			color: black;
			font-size: 1.5rem;
		}
	</style>

</head>
<body>

	<a href="index.php">UPLOAD</a>||<a href="view_img.php">IMAGENS</a>

	<div class="alb">
		<?php

			include "db_conn.php";
			$sql = "SELECT * FROM videos ORDER BY id DESC";
			$res = mysqli_query($conn, $sql);

			if (mysqli_num_rows($res) > 0) {
				while ($video = mysqli_fetch_assoc($res)) { 

					?>
				
					  <video src="uploads/<?=$video['videos_url']?>"
					  	controls >
					  		<p><?=$uploads['videos_url']?></p>
					  	</video>

				<?php } }?>
	</div>

</body>
</html>