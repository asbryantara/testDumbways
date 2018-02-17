<!doctype html>
<html> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Admin | Dumbways</title> 
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
	<link rel="icon" type="image/png" href="img/admin-button-icon-hi.png"/>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/togel_menu.js"></script>
	<style>.hide{ display:none !important;  /*visibility:hidden;*/ } </style>
</head>
<body>
	<div class="wrap">
		<div id="header">
			<div id="top">
				<div class="left">
					<p>Welcome, <strong>Bray</strong></p>
				</div>
				<div class="right">
					<div class="align-right">
						<span style="float:left;">Today :</span><p id="date"><strong></strong></p>
					</div>
				</div>
			</div>
		</div>

		<div id="content">
			<div id="sidebar">
				<div class="box">
					<div class="h_title">&#8250; Menu Content</div>
					<ul id="home">
						<li class="b1"><a href="index.php">Home </a></li>
	                    <li class="b2"><a href="tampilan2.php">Komentar</a></li>
						<li class="b1"><a href="#">Menu 3</a></li>
						<li class="b2"><a href="#">Menu 4</a></li>
	                    <li class="b1"><a href="#">Menu 5</a></li>
					</ul>
				</div>
			</div>
			<div id="main">


				<div class="clear"></div>



				<div class="full_w">
					<div class="h_title">Manage pages</div>
					<h2>Title</h2>
					<p>Konten bla bla</p>


					<div class="entry">
						<div class="sep"></div>
					</div>


					<table>
						<thead>
							<tr>
								<th scope="col">Nomor</th>
								<th scope="col">Title</th>
								<th scope="col">Username</th>
								<th scope="col">Comments</th>
							</tr>
						</thead>
						
						<tbody>
							<?php 
							$koneksi = mysqli_connect('localhost','root','','belajar');
							$que="SELECT posts.title,users.username,comments.comment 
								  FROM `posts` JOIN users on posts.createdBy=users.id JOIN comments on comments.postId=posts.id 
								  WHERE posts.id ='1'";
							$result=mysqli_query($koneksi,$que);
							$no=1;
							while ($kolom_db = mysqli_fetch_assoc($result) ) {?>
							<tr>
								<td class="align-center"><?=$no++;?></td>
								<td><?php echo $kolom_db['title'] . "<br />";?></td>
								<td><?php echo $kolom_db['username'] . "<br />";?></td>
								<td><?php echo $kolom_db['comment'] . "<br />";?></td>
								
								<?php

							};?>
							</tr>

						</tbody>
					</table>


				</div>


			</div>
			<div class="clear"></div>
		</div>

		<div id="footer">
			<div class="left">
				<p>Copyright <a href="../index.php">Bray</a></p>
			</div>
			<div class="right">
				<p>@ 2017 </p>
			</div>
		</div>
	</div>

</body>

<script>
	var d = new Date();
	document.getElementById("date").innerHTML = d.toDateString();
</script>

</html>

