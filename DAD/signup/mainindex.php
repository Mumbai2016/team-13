<?php

include 'conn.php';
?>

<!DOCTYPE html>
<html>



<!-- Head -->
<head>

<title>Dream a Dream</title>

<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Multi Login & Signup Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Style.CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<!-- Web-Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->

<!-- Horizontal-Tabs-JavaScript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
		});
	});

</script>
<script>


function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
}
</script>
<!-- Horizontal-Tabs-JavaScript -->
<style>
	.yo
	{
	margin-bottom: 25px;
    color: #FFF;
    font-family: 'Lato', sans-serif;
    font-size: 15px;
    display: inline-block;
}

.yo1
	{
	margin-bottom: 25px;
    color: #FFF;
    font-family: 'Lato', sans-serif;
    font-size: 15px;
    
}
.logo{
position:absolute;
left:910px;
top:120px;
}
</style>

</head>
<!-- Head -->



<!-- Body -->
<body>

	<!-- Heading -->
	<h1>Dream a Dream</h1>
	<!-- //Headng -->


	<!-- Container -->
	<div class="container">

		<div class="tabs">
<img src="dream.png" class=logo height=170 width=170>
			<div class="sap_tabs">

				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><h2><span>LOGIN</span></h2></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>SIGNUP</span></li>
						<!--<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>RESET PASSWORD</span></li>-->
						<li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>ADMIN</span></li>
						<div class="clear"> </div>
					</ul>

					<div class="resp-tabs-container">
						
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<!-- Form -->
							<form action="clogin.php" method="post" >
								<input type="text" Name="myusername" placeholder="Username" required="">
								<input type="password" Name="mypassword" placeholder="Password" required="">
								<ul>
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Remember Me</label>
									</li>
								</ul>
								<input type="submit" value="LOGIN">
							</form>
							<!-- //Form -->
						</div>

						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
							<div class="register">

								<form  name="myForm"  method="post" onsubmit="return validateForm()" action="signup.php"  >

									<input type="text" Name="fname" placeholder="First Name" required="">
									<input type="text" Name="lname" placeholder="Last Name" required="">
									<input type="text" Name="Email" placeholder="Email" required="">
									<input type="password" Name="Password" placeholder="Password" required="">
									<input type="password" Name="cpassword" class="lessgap" placeholder="Confirm Password" required="">
									<br>
									<div class="yo">Date of birth</div><input type="date" Name="Dateofbirth" placeholder="Date of birth" required="">
									
									<br>
			<div class="yo">
			Gender:
			<input type="radio" class="yo" name="gender" required="" value="M" >Male
			<input type="radio" class="yo" name="gender" required="" value="F" >Female
			</div>
									<input type="text" Name="U_Phone" placeholder="Phone Number" required="">
									<input type="text" Name="F_Phone" placeholder="Father Number" required="">
									<input type="text" Name="M_Phone" placeholder="Mother Number" required="">
									<input type="text" Name="O_Phone" placeholder="Other Number" required="">
									<input type="text" Name="Edu" placeholder="Education_Detail" required="">
									<div class="yo">
			Course:
			<input type="radio" class="yo" name="cou" required="" value="Career awareness"  >Career awareness
			<input type="radio" class="yo" name="cou" required="" value="Life skill development">Life skill development
			<br><input type="radio" class="yo" name="cou" required="" value="Last mile support program">Last mile support program
			<input type="radio" class="yo" name="cou" required="" value="long term engagement"  >long term engagement
			</div>
									<div class="send-button">
										<input type="submit" value="REGISTER">
									</div>
								</form>
							</div>
						</div>

						

						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
								<!-- Form -->
							<form action="/DAD/checklogin.php" method="post" >
								<input type="text" Name="myusername" placeholder="Username" required="">
								<input type="password" Name="mypassword" placeholder="Password" required="">
								<ul>
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Remember Me</label>
									</li>
								</ul>
								<input type="submit" value="LOGIN">
							</form>
							<!-- //Form -->
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- //Container -->




</body>
<!-- //Body -->



</html>


