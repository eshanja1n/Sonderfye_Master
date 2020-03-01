<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sonderfye</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="order/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="order/css/util.css">
	<link rel="stylesheet" type="text/css" href="order/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">

				

			<form  id="frmVoucher" method="post" class="contact100-form validate-form" action="voucherGen.php">
				<span class="contact100-form-title">
					Sonderfye Website Order Form
				</span>
				

				<div class="alert">Your site has been confirmed.</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input required class="input100" id="name" type="text" name="name" placeholder="Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input required class="input100" id="email" type="text" name="email" placeholder="Email">
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Phone is required">
					<input required class="input100" id="phone" type="text" name="phone" placeholder="Phone">
					<label class="label-input100" for="phone">
						<span class="lnr lnr-phone-handset"></span>
					</label>
				</div>

				<br>

				<h5>Short bio</h5>
				<div class="wrap-input100 validate-input" data-validate = "Short Bio is required">
					<textarea required class="input100" name="sbio"  type="text" id="sbio" placeholder=""></textarea>
				</div>

				<h5>Long bio</h5>
				<div class="wrap-input100 validate-input" data-validate = "Long Bio is required">
					<textarea required class="input100" name="lbio" type="text" id="lbio" placeholder=""></textarea>
				</div>

				<h5>Work Experience</h5>
				<div class="wrap-input100 validate-input" data-validate = "Work Experience is required">
					<textarea required class="input100" name="wexperience" type="text" id="wexperience" placeholder=""></textarea>
				</div>

				<h5>Volunteering Experience</h5>
				<div class="wrap-input100 validate-input" data-validate = "Volunteering Experience is required">
					<textarea required class="input100" name="vexperience" type="text" id="vexperience" placeholder=""></textarea>
				</div>

				<h5>Achievements/Awards</h5>
				<div class="wrap-input100 validate-input" data-validate = "Achievements/Awards are required">
					<textarea required class="input100" name="awards" type="text" id="awards" placeholder=""></textarea>
				</div>

				<h5>Instagram Link</h5>
				<div class="wrap-input100 " >
					<textarea class="input100" name="instagram" type="text" id="instagram" placeholder=""></textarea>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button id="submitbutton" type="submit" class="contact100-form-btn">
							Confirm Site
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->

			<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>
			<!-- Add Firebase products that you want to use -->
  			<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-auth.js"></script>
			<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-firestore.js"></script>
			<script src="../js/firebaseStuff.js"></script>

			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<!--===============================================================================================-->
	<script src="order/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="order/vendor/bootstrap/js/popper.js"></script>
	<script src="order/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="order/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="order/vendor/daterangepicker/moment.min.js"></script>
	<script src="order/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="order/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="order/js/main.js"></script>
	<script src="order/js/main2.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
