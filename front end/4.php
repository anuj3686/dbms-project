<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>booking</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="booking" />
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
	<link href="css/4.css?ts=1509519982" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance115" class="wb_element wb-menu"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="About/" target="_self" title="About">About</a></li><li><a href="Register/" target="_self" title="Register">Register</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance116" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Lotus</h4></div><div id="wb_element_instance117" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Hotel</h4></div><div id="wb_element_instance118" class="wb_element wb_element_picture"><a href="Home/"><img alt="gallery/logo_lotus" src="gallery_gen/f37be24b1e4bc3f4791d6b70222d2ffb_100x100.png"></a></div><div id="wb_element_instance119" class="wb_element" style=" overflow: hidden;"><style>
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



</script></div><div id="wb_element_instance121" class="wb_element"><a class="wb_button" href="Feedback/"><span>Feedback</span></a></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance120" class="wb_element" style=" line-height: normal;"></div><div id="wb_element_instance122" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance123" class="wb_element" style=" overflow: hidden;">
<div id="table_display">    </div>
<script type="text/javascript">
var xmlhttp;
xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table_display").innerHTML =this.responseText;
            }
        };
        xmlhttp.open("GET","show_bookings.php?q=21",true);
        xmlhttp.send();
 

</script></div><div id="wb_element_instance124" class="wb_element" style=" overflow: hidden;"><div id="name"> </div>
<script type="text/javascript">
var xmlhttp2;
xmlhttp2 = new XMLHttpRequest();
 xmlhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("name").innerHTML =this.responseText;
            }
        };
        xmlhttp2.open("GET","show_bookings.php?q=123",true);
        xmlhttp2.send();</script></div><div id="wb_element_instance125" class="wb_element" style=" overflow: hidden;"><form action="/cancelroom.php" method="post">


   Enter Room No:<br><input type="text" name="room"><br><br><input type="submit" value="Submit"></form></div><div id="wb_element_instance126" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance127" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance128" class="wb_element wb-elm-orient-vertical"><div class="wb-elm-line"></div></div><div id="wb_element_instance129" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>My Bookings</strong></p>
</div><div id="wb_element_instance130" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Cancel Bookings</strong></p>
</div><div id="wb_element_instance131" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(4);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance131");
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
					$("#wb_element_instance131").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance132" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
