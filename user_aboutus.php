<?php include('include/connect.php');
include('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <link rel="shortcut icon" href="img/aalogo.jpg">

    <title>AA2000 Security and Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Less styles  
	<link rel="stylesheet/less" type="text/css" href="less/bootsshop.less">
	<script src="less.js" type="text/javascript"></script>
	 -->
	 
 <!-- Le styles  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="assets/style.css" rel="stylesheet"/>
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>

	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
     <style>
   body {
    background-image: url("background1.JPG");
    background-repeat: no-repeat;
}
</style>
    <!-- Le fav and touch icons -->
 </head>
<body>
  <!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
					<a id="logoM" href="index.html"><img src="" alt=""/></a>
                  <a data-target="#sidebar" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse">
                    <ul class="nav">
					 	 <li class=""><a href="user_index.php"><i class="icon-home icon-large"></i> Home</a></li>
					  <li class=""><a href="user_products.php"><i class=" icon-th-large icon-large"></i> Products</a></li>
					  <li ><a href="user_contact.php"><i class="icon-signal"></i> Contact Us</a></li>
                      <li class="active"><a href="user_aboutus.php"><i class="icon-flag"></i> About Us</a></li>
              <li class=""><a href="user_order.php"><i class="icon-shopping-cart"></i> Ordered Products</a></li>
               <li class=""><a href="Email.php"><i class="icon-envelope"></i> Email</a></li>
					</ul>
                   
                    <ul class="nav pull-right">
				<li>
				<a href="user_account2.php"><?php $query = mysql_query("select * from customers where CustomerID='$ses_id'") or die(mysql_error());
                $row = mysql_fetch_array($query);
                $id = $row['CustomerID']; ?> <b>Welcome!  </b> <?php echo $row['Firstname'];?> <?php echo $row['Lastname'];?> <span class="badge badge-info"> <?Php include('announce.php');?></span></a>
					</li>
					<li>
						<a href="logout.php"><i class="icon-off"></i> Log Out</a>
					</li>
					</ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<div class="thumbnail">
<?php include ('header2.php'); ?></div>

<center><a href="maps.php"><h2><font color="white">Click here!</h2> LOCATION OF THE COMPANY, <b>MAP</b></a></center></font>
<!-- ==================================================Header End====================================================================== -->

		<div class = "well">
        <font color="red">HISTORY</font><br />
Formed in 2000, AA2000 Security and Technology Solutions Inc, is a Filipino company dedicated to providing top quality electronic security services and safety solutions to meet the changing needs of a diverse and rapidly growing customer base. Our products are carefully sourced direct from the manufacturers and customized according to our customers needs. We provide products at highly competitive prices. We designed, developed and installed a range of Security systems for a variety of commercial and business premises, ranging in size and technical complexity.  We provide excellent pre- and post-sales support to our corporate clients. From the moment you make an enquiry with us, we offer unparalleled support and work with you to find a solution that fits your budget and your specific security and safety requirements.
<br /><br />

<font color="red">OUR KEY POINTS DIFFERENCE</font><br />
<ul>
<li>The quality, professionalism and skill of our staff. Our qualified personnel work closely with each client, on a confidential basis, to evaluate individual security requirement.</li>
<li>Strong technical expertise and experience utilizing the latest IP security technology solutions</li>
<li>Experience and expertise AA2000 have over 10 years experience in developing security system</li>
<li>Business Reputation In choosing a Security Company for your business premises you need to be assured the company has not only been in operation for a number of years, but has an established client portfolio, holds the appropriate licenses and has appropriately trained and qualified personnel.</li>
<li>Tailored Security solutions We design custom solution that is designed to suit your particular business model, premises and portfolios and is more effective because it is tailored to your needs and as a result, will be more cost-effective than the one size fits all system.</li>
</ul>
<font color="red">MISSION STATEMENT</font><br />
1.	To provide world-class security services through leading edge automated security hardware & software technology.<br />
2.	Commitment to serve our clients, peers and community<br />
3.	Performance Excellence<br />
4.	Innovation Improve, develop, evolve, and make a difference.<br />
5.	To be of service to the Filipino community by providing security & anti-crime solutions through the power of technology<br />
<br/><font color="red">VISSION<br /></font>
To be the Philippines BEST Security Solutions Provider with three (3) guiding principles: 
<br/>Strong & Unbreakable Commitment
<br />	Performance Excellence
<br />	Filipino Innovation


		
	
	</div>
<!-- Footer ------------------------------------------------------ -->
<hr class="soft">
<div class="thumbnail"  id="footerSection">
<marquee>&copy; AA 2000 Security and Technology Solution Inc.</marquee>
</div></div></body>
