<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Stylish Slice - Cake Decorating</title>


<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/prices.css">
<link rel="stylesheet" href="css/chosen.css">

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>

<script>
$(document).ready(function(){
		$(".chzn-select").chosen();
	});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35654416-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
	
<div id="header_container">
    <div id="header">
        <img src="images/hdr-cake1.png" width="119" height="100">
        <a href="index.html"><img src="images/logo.png" width="251" height="181" alt="The Stylish Slice" id="logo"></a>
        <img src="images/hdr-cake2.png" width="119" height="100">
        <div id="nav">
            <ul>                                        
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="flavors.html">Flavors</a></li>
                <li><a href="prices.html" class="current">Prices</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!---/nav--->
    </div>
    <!---/header--->
</div>
<!---/header_container--->
    
    
<div id="content_container">
    <div id="content">	

	<?  
	// Enter your email address here
	$adminaddress = "bonniemellott@gmail.com"; 

	// Enter the address of your email here 
	$siteaddress ="http://www.bonniemellott.com"; 

	// Enter your company name or site name here 
	$sitename = "The Stylish Slice"; 

	// Gets the date and time from your server
	$date = date("m/d/Y H:i:s");

	// Gets the IP Address
	if ($REMOTE_ADDR == "") $ip = "no ip";
	else $ip = getHostByAddr($REMOTE_ADDR);

	//Process the form data!
	// and send the information collected in the  form to Your nominated email address
	mail("$adminaddress","Inquiry from The Stylish Slice", 
	"Inquiry from: The Stylish Slice

	Name: $inputName

	Email: $emailAddr

	Phone: $phone
	
	Cake Type: $cake_type
	
	Special Requests: $special_requests

	------------------------------

	Date/Time:  $date","FROM:$adminaddress") or die("There was a problem sending your email.  You may send your message to $adminaddress with an email client.  Sorry for the incovenience."); 

	//This sends a confirmation to your visitor
	mail("$emailAddr","Thank You for visiting $sitename","Thank you for contacting me.  I will respond to your email ASAP.","FROM:$adminaddress") or die("There was a problem sending your email. <br>You may send your message to $adminaddress with an email client. <br>Sorry for the incovenience."); 
	
	?>
    
    <h1>Thank You for Contacting Us!</h1>
    <p>Thanks for contacting The Stylish Slice for a quote. I will be in touch with you soon!</p>
       
    </div>
    <!---/content--->

	<br class="clear" /> 
    
</div>
<!---/content_container--->

<div id="footer_container">
    	
    <div id="footer">
    
        <div id="footer_left">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="flavors.html">Flavors</a></li>
                <li><a href="prices.html">Prices</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            
            <p>&copy; Copyright 2012 <a href="http://www.bonniemellott.com" target="_blank">Bonnie Mellott</a></p>
        </div>
        <!---/footer_left--->
        
        <div id="footer_right">
            <ul>
                <li><a href="http://www.facebook.com/TheStylishSlice" target="_blank" id="social_facebook">Facebook</a></li>
                <li><a href="http://pinterest.com/bonnie_mellott/the-stylish-slice-cake-design/" target="_blank" id="social_pinterest">Pinterest</a></li>
            </ul>
        </div>
        <!---/footer_right--->
    
    </div>
    <!---/footer--->

</div>
<!---/footer_container--->
    
</body>
</html>