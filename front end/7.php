<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Admin Login</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Admin Login" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.23" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=1.1.82" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1509519982" rel="stylesheet" type="text/css" />
	<link href="css/7.css?ts=1509519982" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance86" class="wb_element wb-menu"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="About/" target="_self" title="About">About</a></li><li><a href="Register/" target="_self" title="Register">Register</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance87" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Lotus</h4></div><div id="wb_element_instance88" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Hotel</h4></div><div id="wb_element_instance89" class="wb_element wb_element_picture"><a href="Home/"><img alt="gallery/logo_lotus" src="gallery_gen/f37be24b1e4bc3f4791d6b70222d2ffb_100x100.png"></a></div><div id="wb_element_instance90" class="wb_element" style=" overflow: hidden;"><style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
</style><div id="logout"> </div>

<script>
var xmlhttp22;
xmlhttp22 = new XMLHttpRequest();
 xmlhttp22.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("logout").innerHTML =this.responseText;
            }
        };
        xmlhttp22.open("GET","logout.php?q=1",true);
        xmlhttp22.send();
function send_logout(){

var xmlhttp23;
xmlhttp23 = new XMLHttpRequest();
 xmlhttp23.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 window.location.assign("https://hardback-completion.000webhostapp.com/");
            }
        };
        xmlhttp23.open("GET","logout.php?q=2",true);
        xmlhttp23.send();


}



</script></div><div id="wb_element_instance92" class="wb_element" style=" overflow: hidden;">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    width: 800px;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><button type="submit">Login</button>
      <input type="checkbox" checked> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance91" class="wb_element" style=" line-height: normal;"></div><div id="wb_element_instance93" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">ADMIN</h1>
</div><div id="wb_element_instance94" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance95" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance96" class="wb_element" style=" overflow: hidden;"><form action="/updateroom.php" method="post">
  Select Room:<br><input type="radio" name="room" value="1" checked> Standard Room<br><input type="radio" name="room" value="2"> Deluxe Room<br><input type="radio" name="room" value="3"> Super Deluxe Room<br><br>
   Update Price:<br><input type="text" name="price"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance97" class="wb_element" style=" overflow: hidden;"><form action="/deleteroom.php" method="post">


   Enter Room No:<br><input type="text" name="room"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance98" class="wb_element" style=" overflow: hidden;"><form action="/addroom2.php" method="post">
   Enter Room No:<br><input type="text" name="room"><br><br>
   Enter Tariff:<br><input type="text" name="price"><br><br>

   Enter Category:<br><input type="text" name="cat"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance99" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance100" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Update Price</strong></p>
</div><div id="wb_element_instance101" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Add Room</strong></p>
</div><div id="wb_element_instance102" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Delete Room</strong></p>
</div><div id="wb_element_instance103" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance104" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance105" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance106" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Check-out</strong></p>
</div><div id="wb_element_instance107" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Cancel booking</strong></p>
</div><div id="wb_element_instance108" class="wb_element" style=" overflow: hidden;"><form action="/cancelroomadmin.php" method="post">


   Enter Room No:<br><input type="text" name="room"><br>
 Enter User ID:<br><input type="text" name="userid"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance109" class="wb_element" style=" overflow: hidden;"><form action="/checkout.php" method="post">


   Enter Room No:<br><input type="text" name="userid"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance110" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance111" class="wb_element"><a class="wb_button" href="records/"><span>All Bookings</span></a></div><div id="wb_element_instance112" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Records</strong></p>
</div><div id="wb_element_instance113" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(7);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance113");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance113").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance114" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
