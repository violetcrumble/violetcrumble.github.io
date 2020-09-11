<!DOCTYPE html>
<head>
<title>Bonnie Mellott - Web Development Knoxville</title>
<meta name="keywords" content="web site design, knoxville web designer, knoxville web developer, web development knoxville, web sites, web page, graphic design, interface design, search engine optimization, seo, html, css, mobile web development" />
<meta name="description" content="Bonnie Mellott is a web designer in Knoxville, Tennessee who specializes in web development and web design." />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bonniemellott.css" rel="stylesheet">

<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/response.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24531813-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<header>
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    <a href="index.html"><img src="images/logo.gif" alt="Bonnie Mellott - Interactive Media Design" id="logo"></a>
                </div>

            </div>
            
            <div class="row">
                
                <nav>
                    <ul>
                      <li class="col-sm-3"><a href="index.html">Home</a></li>
                      <li class="col-sm-3"><a href="portfolio.html">Portfolio</a></li>
                      <li class="col-sm-3"><a href="about.html">About Me</a></li>
                      <li class="col-sm-3"><a href="contact.html" class="active">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


<div id="container_sub">
 <h1 class="contact">contact</h1>
	<?  
					// Enter your email address here
					$adminaddress = "bonniemellott@gmail.com"; 

					// Enter the address of your email here 
					$siteaddress ="http://www.bonniemellott.com"; 

					// Enter your company name or site name here 
					$sitename = "Bonnie Mellott's Portfolio"; 

					// Gets the date and time from your server
					$date = date("m/d/Y H:i:s");

					// Gets the IP Address
					if ($REMOTE_ADDR == "") $ip = "no ip";
					else $ip = getHostByAddr($REMOTE_ADDR);

					//Process the form data!
					// and send the information collected in the  form to Your nominated email address
					mail("$adminaddress","Inquiry from Your Portfolio site", 
					"Inquiry from: Your Portfolio

					Name: $inputName

					Email: $emailAddr

					Message: $message

					------------------------------

					Date/Time:  $date","FROM:$adminaddress") or die("There was a problem sending your email.  You may send your message to $adminaddress with 					an email client.  Sorry for the incovenience."); 

					//This sends a confirmation to your visitor
					mail("$emailAddr","Thank You for visiting $sitename","Thank you for contacting me.  I will respond to your email ASAP.","FROM:$adminaddress") or die("There was a problem sending your email. <br>You may send your message to $adminaddress with an email client. <br>Sorry for the incovenience."); 


?>

						<p>Thanks for contacting me.  You should recieve a confirmation email within the next few minutes.<br><br>
					   <a href="index.html">Return to the homepage.</a> or <a href="portfolio.html">the portfolio page</a>.</p>
 
</div>
<!--/container_sub-->


<footer>
        <div class="container">
            <!---row2--->
            <div class="row">
                
                <div class="col-md-4 stalking">
                    <h2>stalk me:</h2>
                    <a href="http://www.facebook.com/bonnie.mellott" target="_blank">
                        <img src="images/social_icons/facebook.png" alt="Facebook" border="0" />
                    </a>
                    <a href="http://www.linkedin.com/in/bonniemellott" target="_blank">
                        <img src="images/social_icons/linkedin.png" alt="LinkedIn" border="0" />
                    </a>
                    <a href="http://twitter.com/violetcrumblega" target="_blank">
                        <img src="images/social_icons/twitter.png" alt="Twitter" border="0" />
                    </a>
                    <a href="http://www.flickr.com/cheesequeen/" target="_blank">
                        <img src="images/social_icons/flickr.png" alt="Flickr" border="0" />
                    </a>
                </div>
                
                <div class="col-md-8 pictures">
                    <h2>my latest pictures</h2>
                    
                    
                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&display=random&size=s&layout=h&source=user_set&user=18138517%40N00&set=72157607526265224&context=in%2Fset-72157607526265224%2F"></script>

                    
                    </table>
                </div>
            
            </div>
            <!---/row2--->
        </div>
    </footer>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">Copyright &copy; 2013 Bonnie Mellott</div>
            <div class="col-md-6 footer_nav">
                  <ul>
                    <li class="col-sm-3"><a href="index.html">Home</a></li>
                    <li class="col-sm-3"><a href="portfolio.html">Portfolio</a></li>
                    <li class="col-sm-3"><a href="about.html">About Me</a></li>
                    <li class="col-sm-3"><a href="contact.html">Contact</a></li>
                  </ul>
            </div>
        </div>
    </div>


</body>
</html>