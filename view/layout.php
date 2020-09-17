<!DOCTYPE html>
<html>
	<head>
		<title>NEWSPRORTAL</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstra.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1f784/j6cY/IhtquoHCwR7X9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<meta charset="utf8">
	</head>
	<body>
		<nav class="one">
			<ul class="topmenu">
				<li><a href="#">Kategootiad</i class="fa fa-angle-down"></i></a>
					<ul class="submenu">
					<?php
						Controller::AllCategory();
					?>
					</ul>
				</li>
			</ul>
		</nav>
		
		<section>
			<div class = "divBox">
				<?php
					if(isset($conntent)) {
						echo $content;
					}
					else {
						echo '<h1>Content is gone!</h1>';
					}
				?>
			</div>
		</section>
			
		<hr>
		<p style="display:block; text-allign:center;">JPTVR18 2019 a. &copy</p>
	</body>
</html>