<?php
  $firstname = $_REQUEST['firstname'] ;
  $lastname = $_REQUEST['lastname'] ;
  $phone = $_REQUEST['phone'] ;
  $email = $_REQUEST['email'] ;

  mail( "paul_harper51@yahoo.com", "Mtxt Domain Inquiry",
    "First Name: $firstname \n Last Name: $lastname \n Phone Number: $phone \n Email Address: $email" );
  
  header( "Location: http://www.attuaris.com/mtxtdomain/thankyou.html" );
?>
