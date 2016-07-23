<?php
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

<body>
	<!-- Container -->
	<div class="container">

		<div class="tabs">

			<div class="sap_tabs">

				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

							<!-- Form -->
							<form  method="post" name="form1" >
								<input type="text" Name="t1" placeholder="Username" onKeyUp="aa();">
								<div id="d1"></div>
							</form>
							<!-- //Form -->

<script type="text/javascript">
	function aa()
	{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("get","sea.php?nm="+document.form1.t1.value,false);
	xmlhttp.send(null);
	document.getElementById('d1').innerHTML=xmlhttp.responseText;
	}

</script>
	
				</div>

			</div>

		</div>

	</div>



</body>
</head>
</html>