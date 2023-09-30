<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!DOCTYPE html>
<html lang="zxx">
<?php
require("./connect.php");
?>
<head>
    <title>Echo Wheels Signup Form</title>
		<!-- Meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- //Meta tags -->
    <link rel="stylesheet" href="css/styleee.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
</head>

<body>
	<section class="w3l-form-36">
		<div class="form-36-mian section-gap">
			<div class="wrapper">
				<div class="form-inner-cont">
					<h3>Create your account</h3>
					<form action="php/phpreg.php" method="post" class="signin-form">
						<div class="form-input">
							<span class="fa fa-user" aria-hidden="true"></span> <input type="text" name="fname" placeholder="First name" required />
						</div>
						<div class="form-input">
							<span class="fa fa-user" aria-hidden="true"></span> <input type="text" name="lname" placeholder="Last name" required />
						</div>
						<div class="form-input">
							<span class="fa fa-envelope" aria-hidden="true"></span> <input type="email" name="email" placeholder="Email" required />
						</div>
						<div class="form-input">
							<span class="fa fa-phone" aria-hidden="true"></span> <input type="text" name="contact" placeholder="Contact" required />
						</div>
						<div class="form-input">
							<span class="fa fa-home" aria-hidden="true"></span> <input type="text" name="housename" placeholder="Housename" required />
						</div>	
						<div class="form-input">
							<span class="fa fa-map-marker" aria-hidden="true"></span> <input type="text" name="streetname" placeholder="Streetname" required />
						</div>	
						<div class="form-input">
							<span class="fa fa-map-marker" aria-hidden="true"></span> <input type="text" name="statename" placeholder="State" required />
						</div>		
						<div class="form-input">
							<span class="fa fa-map-marker" aria-hidden="true"></span>
								<select class="form-input"  name="district">
                                    <option selected disabled>Select District</option>
                                    <?php
									
                                    $sql = "select * from district";
                                    $result = select_data($sql);
                                    if (mysqli_num_rows($result) > 0) {
                                      while ($arr = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?php echo $arr['district_name']; ?>">
                                          <?php echo $arr['district_name']; ?>
                                        </option>
                                    <?php
                                      }
                                    }
                                    ?>

                    		</select>
						</div>	
						<div class="form-input">
							<span class= "fa fa-map-marker" aria-hidden="true"></span> <input type="text" name="pincode" placeholder="Pincode" required />
						</div>		
						<div class="form-input">
							<span class="fa fa-birthday-cake" aria-hidden="true"></span> <input type="date" name="dateofbirth" placeholder="Date Of Birth" required />
						</div>	
						<div class="form-input">
							<span class="fa fa-lock" aria-hidden="true"></span> <input type="password" name="password" placeholder="Password" required />
						</div>
						<div class="form-input">
							<span class="fa fa-lock" aria-hidden="true"></span> <input type="password" name="cpassword" placeholder="confirm passsword" required />
						</div>				
						<div class="login-remember d-grid">
							<label class="check-remaind">
								<input type="checkbox">
								<span class="checkmark"></span>
								<p class="remember">Remember me</p>
							</label>
							<button class="btn theme-button" name="submit">Signup</button>
						</div>
					</form>
					<div class="social-icons">
						<p class="continue"><span>Or</span></p>
						<div class="social-login">
						<a href="#facebook">
							<div class="facebook">
								<span class="fa fa-facebook" aria-hidden="true"></span>
								
							</div>
						</a>
						<a href="#google">
							<div class="google">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</div>
						</a>
					</div>
				</div>
					<p class="signup">Already a member? <a href= "login.html"class="signuplink">Login</a></p>
				</div>

				<!-- copyright -->
				<div class="copy-right">
					<p>© 2023 Echo Wheels signup Form. All rights reserved</p>
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</section>
</body>
</html>