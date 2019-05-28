<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>    
<title>BabyCare Register Form</title>

      <title>Welcome to babycare online shopping</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="home/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="home/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="home/stylesheet" href="home/css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="home/css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="home/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="home/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="home///fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="home///fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<!-- meta_tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Library Membership form A Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta_tag_Keywords-->
<!--css_files-->
	<link rel="stylesheet" href="register/css/jquery-ui.css"/>
	<link href="register/css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-->
	<link rel="register/stylesheet" href="register/css/font-awesome.css"><!--font_wesome_icons-->
	<link href="register///fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet"><!--online_fonts-->
	<link href="register///fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet"><!--online_fonts-->
<!--//css_files-->
<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="js/oh-autoval-script.js"></script>
<script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
</head>
<body>

<div class="header-outs" id="home">
         <div class="inner_page-banner one-img">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+917510614142</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">babycaresupport@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.html">BabyCare</a></h1>
                  </div>
				  
                  <div class="col-lg-5 col-md-6 search-right">
                     <!-- <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form> -->
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                           <li>
                           <p><a href="userhome.userhome">Home</a></p>
						   </li>
						   <!-- <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal1"> <span class="far fa-user"></span></button>
                           </li> --> 
                           <!-- <li class="toyscart toyscart2 cart cart box_1">
                              <form action="/logins_login" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li> -->
						   
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
<div class="w3l-head">
<h1>Register Here</h1>
</div>
<div class="w3ls-form">
<form enctype="multipart/form-data" action="/home_register" method="post">
@csrf
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">First name</label>
				<div class="w3l-div">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="fname"  class="av-name" placeholder="first name" av-message="For name validation (space and . is allowed)" required="" autocomplete="off"/>
				</div>
				</div>
			</div> 
			<div class="w3l-grid2">
			<label class="text">Last name</label>
			<div class="w3l-div">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="lname" class="av-name" placeholder="last name" av-message="For name validation (space and . is allowed)" required="" autocomplete="off"/>
			</div>
			</div>
			<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Phone</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="text" name="phone" class="av-phone" placeholder="phone" av-message="Phone number 7-13 digits long" required="" autocomplete="off"/>
				</div>
			</div>


			
			<div class="w3l-last-grid2">
			<div class="w3l-grid2">
				<label class="text">Type</label>
				<div class="w3l-div">
					<i class="fa fa-users" aria-hidden="true"></i>
					<select class="form-control" name="type" required="">
					<option>---Select---</option>
						<option value="user">User</option>
						<!-- <option value="merchant">Merchant</option> -->
						
					</select>
				</div>
			</div>	
				
			<div class="clear"></div>
		</div>	
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Email</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" class="av-email" placeholder="email"  required="" av-message="Email format validation .+@gmail.com" autocomplete="off"/>
				</div>
			</div>

			
		<div class="w3l-grid2">
			<label class="text">Gender</label>
			<div class="w3l-div">
			<i class="fa fa-users" aria-hidden="true"></i>
					<select class="form-control" name="gender" required="">
					<option>---Select---</option>
						<option >Male</option>
						<option >Female</option>
						
					</select>
			</div>
			</div>
			<div class="w3l-last-grid1">
			<div class="w3l-grid1">
			<label class="text">Upload Your Image</label>
				<div class="w3l-div">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="file" name="photo" placeholder="photo" enctype="multipart/form-data" required=""/>
				</div>
			</div>
			

			</div>
			<div class="w3l-grid2">
				<label class="text">date of birth</label>
				<div class="w3l-div">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<input type="text" class="date" id="datepicker" pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/\d{4}" name="dob" placeholder="dob" value="MM/DD/YYYY" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="" autocomplete="off"/>
				</div>	
			</div>

			<div class="clear"></div>
		</div>

		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Password</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="password" name="password" id="password1" class="av-password" placeholder="password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required="" autocomplete="off"/>
				</div>
			</div>

		

			<div class="w3l-grid2">
				<label class="text">Cpassword</label>
				<div class="w3l-div">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="password" name="cpassword" id="password2" class="av-password" placeholder="cpassword" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required=""/>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		
		<div class="clear"></div>
		<div class="w3ls-submit">
			<input type="submit" value="Register">
		</div>
</form>
</div>
<!--footer>&copy; <a href="http://w3layouts.com/"> W3layouts</a></footer>-->

<!-- Default-JavaScript --> <!-- Default-JavaScript -->
 <script type="text/javascript" src="register/js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="register/js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->
</body>
</html>