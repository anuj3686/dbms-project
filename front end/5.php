<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Rooms</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Rooms" />
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
	<link href="css/5.css?ts=1509519982" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance56" class="wb_element wb-menu"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="About/" target="_self" title="About">About</a></li><li><a href="Register/" target="_self" title="Register">Register</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance57" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Lotus</h4></div><div id="wb_element_instance58" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Hotel</h4></div><div id="wb_element_instance59" class="wb_element wb_element_picture"><a href="Home/"><img alt="gallery/logo_lotus" src="gallery_gen/f37be24b1e4bc3f4791d6b70222d2ffb_100x100.png"></a></div><div id="wb_element_instance60" class="wb_element" style=" overflow: hidden;"><style>
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



</script></div><div id="wb_element_instance61" class="wb_element"><a class="wb_button" href="http://hardback-completion.000webhostapp.com/booking"><span>My Bookings</span></a></div><div id="wb_element_instance62" class="wb_element"><a class="wb_button" href="Feedback/"><span>Feedback</span></a></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance63" class="wb_element wb_element_picture"><img alt="gallery/02" src="gallery_gen/f3a7c7617ece780621386a5ab211cc19_210x163.jpg"></div><div id="wb_element_instance64" class="wb_element wb_element_picture"><img alt="gallery/01" src="gallery_gen/853415e03452540f7899819938c578ca_210x163.jpg"></div><div id="wb_element_instance65" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Our rooms</h1></div><div id="wb_element_instance66" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance67" class="wb_element wb_element_picture"><img alt="gallery/03" src="gallery_gen/c31f148055be45f055d0e10f722db165_210x163.jpg"></div><div id="wb_element_instance68" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance69" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance70" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance71" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Standard Room</p>
</div><div id="wb_element_instance72" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Deluxe Room</p>
</div><div id="wb_element_instance73" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Super Deluxe Room</p>
</div><div id="wb_element_instance74" class="wb_element" style=" overflow: hidden;"><style> 
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 2px;
    font-size: 2px;
    padding: 12px 16px 12px 20px;
}
</style><form action="/standard.php" method="post">

  Date of check-in:<br><input type="date" name="start_date"><br>
  Date of check-out:<br><input type="date" name="end_date"><br><p> No of rooms : </p>
<select name="no_room"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br><input type="submit" name="Submit" value="Check"><input type="submit" name="Book" value="Book now"></form>
</div><div id="wb_element_instance75" class="wb_element" style=" overflow: hidden;"><style> 
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 2px;
    font-size: 2px;
    padding: 12px 16px 12px 20px;
}
</style><form action="/deluxe.php" method="post">

  Date of check-in:<br><input type="date" name="start_date"><br>
  Date of check-out:<br><input type="date" name="end_date"><br><p> No of rooms : </p>
<select name="no_room"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br><input type="submit" name="Submit" value="Check"><input type="submit" name="Book" value="Book now"></form>
</div><div id="wb_element_instance76" class="wb_element" style=" overflow: hidden;"><style> 
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 2px;
    font-size: 2px;
    padding: 12px 16px 12px 20px;
}
</style><form action="/superdeluxe.php" method="post">

  Date of check-in:<br><input type="date" name="start_date"><br>
  Date of check-out:<br><input type="date" name="end_date"><br><p> No of rooms : </p>
<select name="no_room"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br><input type="submit" name="Submit" value="Check"><input type="submit" name="Book" value="Book now"></form>
</div><div id="wb_element_instance77" class="wb_element" style=" overflow: hidden;">
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
 

</script></div><div id="wb_element_instance78" class="wb_element" style=" overflow: hidden;">
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
 

</script></div><div id="wb_element_instance79" class="wb_element" style=" overflow: hidden;">
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
 

</script></div><div id="wb_element_instance80" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2</li>
	<li class="wb-stl-normal">Ac Suite</li>
	<li class="wb-stl-normal">Free Parking</li>
	<li class="wb-stl-normal">Free Breakfast</li>
	<li class="wb-stl-normal">Swimming Pool</li>
</ul></div><div id="wb_element_instance81" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2</li>
	<li class="wb-stl-normal">Ac Suite</li>
	<li class="wb-stl-normal">Free Parking</li>
	<li class="wb-stl-normal">Swimming Pool</li>
</ul></div><div id="wb_element_instance82" class="wb_element" style=" line-height: normal;"><ul><li class="wb-stl-normal">Room for 2</li>
	<li class="wb-stl-normal">Standard Non AC</li>
	<li class="wb-stl-normal">Free Parking</li>
	<li class="wb-stl-normal">Swimming Pool</li>
</ul></div><div id="wb_element_instance83" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance84" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(5);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance84");
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
					$("#wb_element_instance84").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance85" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
