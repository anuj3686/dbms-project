<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Home" />
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
	<link href="css/1.css?ts=1509519982" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu"><ul class="hmenu"><li class="active"><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="About/" target="_self" title="About">About</a></li><li><a href="Register/" target="_self" title="Register">Register</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Lotus</h4></div><div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Hotel</h4></div><div id="wb_element_instance3" class="wb_element wb_element_picture"><a href="Home/"><img alt="gallery/logo_lotus" src="gallery_gen/f37be24b1e4bc3f4791d6b70222d2ffb_100x100.png"></a></div><div id="wb_element_instance4" class="wb_element" style=" overflow: hidden;"><style>
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



</script></div><div id="wb_element_instance5" class="wb_element" style=" overflow: hidden;">
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
</style><button id="hide_login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

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
	
<div class="wb_cont_inner"><div id="wb_element_instance6" class="wb_element wb_element_picture"><img alt="gallery/02" src="gallery_gen/f3a7c7617ece780621386a5ab211cc19_210x163.jpg"></div><div id="wb_element_instance7" class="wb_element wb_element_picture"><img alt="gallery/01" src="gallery_gen/853415e03452540f7899819938c578ca_210x163.jpg"></div><div id="wb_element_instance8" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Our rooms</h1></div><div id="wb_element_instance9" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance10" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2 people</li>
	<li class="wb-stl-normal">Standard Non AC</li>
	<li class="wb-stl-normal">Swimming Pool</li>
	<li class="wb-stl-normal">Free Parking  </li>
</ul></div><div id="wb_element_instance11" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2 people</li>
	<li class="wb-stl-normal"> AC Room</li>
	<li class="wb-stl-normal">Swimming Pool</li>
	<li class="wb-stl-normal">Free Parking  </li>
</ul></div><div id="wb_element_instance12" class="wb_element wb_element_picture"><img alt="gallery/03" src="gallery_gen/c31f148055be45f055d0e10f722db165_210x163.jpg"></div><div id="wb_element_instance13" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2 people</li>
	<li class="wb-stl-normal">Ac Suite</li>
	<li class="wb-stl-normal">Swimming Pool</li>
	<li class="wb-stl-normal">Free Parking  </li>
	<li class="wb-stl-normal">Free Breakfast</li>
</ul></div><div id="wb_element_instance14" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance15" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">Welcome to the harmony</span></p></div><div id="wb_element_instance16" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance17" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance18" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance19" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Standard Room</p>
</div><div id="wb_element_instance20" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Deluxe Room</p>
</div><div id="wb_element_instance21" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Super Deluxe Room</p>
</div><div id="wb_element_instance22" class="wb_element" style=" overflow: hidden;">
<div id="price">    </div>
<script type="text/javascript">
var xmlhttp;
xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("price").innerHTML = "Price:"+this.responseText;
            }
        };
        xmlhttp.open("GET","show_price.php?q=1",true);
        xmlhttp.send();
 

</script></div><div id="wb_element_instance23" class="wb_element" style=" overflow: hidden;">
<div id="price2">    </div>
<script type="text/javascript">
var xmlhttp;
xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("price2").innerHTML = "Price:"+this.responseText;
            }
        };
        xmlhttp.open("GET","show_price.php?q=2",true);
        xmlhttp.send();
 

</script></div><div id="wb_element_instance24" class="wb_element" style=" overflow: hidden;">
<div id="price3">    </div>
<script type="text/javascript">
var xmlhttp;
xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("price3").innerHTML = "Price:"+this.responseText;
            }
        };
        xmlhttp.open("GET","show_price.php?q=3",true);
        xmlhttp.send();
 

</script></div><div id="wb_element_instance25" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance25");
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
					$("#wb_element_instance25").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance26" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
