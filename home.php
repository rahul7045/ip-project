<<?php 

session_start();
if (!isset($_SESSION['username'])) {
	# code...
	header('location:login.php');
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		IP PROJECT
 	</title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
 	</body>
 	<br>
 	<br>
 <div style="padding-top: 100px" class="container center">
 	<br>
 	<br>
    <h2 class="text-center text-success">welcome <?php  echo $_SESSION['username']; ?> </h2><br>
    <iframe class="text-center" style="padding-left: 150px" width="560" height="315" src="https://www.youtube.com/embed/H13tH_JVbM0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
    <br>
  <a class="btn btn-primary" href="login.php">LOGOUT</a>

</div>

 </body>
 </html>