<?php 
if (isset($_POST['submit'])) {

	$mobile=$_POST['mobile'];

	$message=$_POST['message'];

	$api_key = "923119117623-6a1d1b5c-fcb7-4067-8357-46891db1c940";///YOUR API KEY
	$numbers ="92".$mobile;///Recepient Mobile Number
	$sender = 27811;
	$messagee = $message;

	////sending sms

	foreach(explode(",",$numbers) as $number){

		$post = "sender=".urlencode($sender)."&mobile=".urlencode($number)."&message=".urlencode($messagee)."";
		$url = "https://sendpk.com/api/sms.php?api_key=$api_key";
		$ch = curl_init();
		$timeout = 30; // set to zero for no timeout
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$result = curl_exec($ch);
		/*Print Responce*/
		echo $result;
	}






}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md bg-primary">
	<div class="container-xxl">
		<a href="#intro" class="navbar-brand">
			<span class="fw-bold text-white">SEND MESSAGE</span>
		</a>
		<!-- toggle button for mobile view -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<!-- navbar links -->
	<div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="#"> About us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Reviews</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Get in Touch</a>
			</li>
			<li class="nav-item d-md-none">
				<a class="nav-link text-white" href="#">Pricing</a>
			</li>
		</ul>
	</div>
	</div>
</nav>



<!-- forms starts -->
<div class="background-img">
	<div class="container-lg">
		<div class="row justify-content-center align-items-center">
			<div class="col-6 col-lg-5 m-5">
				<div class="card shadow">
					<div class="card-body">
						<form action="" method="POST">
						<div class="m-3">
						  <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Numbers eg: 31132851831,33032874283" required="">
						</div>
						<div class="m-3">
						  <textarea class="form-control" name="message" rows="3" placeholder="type your message here" required=""></textarea>
						  <button type="submit" name="submit" class="btn btn-primary text-center  mt-3 btn-block">SEND MESSAGE </button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- form ends -->

<!-- Footer -->
<footer class="page-footer font-small bg-primary text-white">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="#" class="text-white"> Fawad Bacha</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- $str = "0330,0311";
foreach(explode(",",$str) as $phone){
echo $phone. "<br>"; -->



</body>
</html>

</body>
</html>