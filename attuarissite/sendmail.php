<?php
  $firstname = $_REQUEST['firstname'] ;
  $lastname = $_REQUEST['lastname'] ;
  $location = $_REQUEST['location'] ;
  $title = $_REQUEST['title'] ;
  $phone = $_REQUEST['phone'] ;
  $email = $_REQUEST['email'] ;
  $employees = $_REQUEST['employees'] ;
  $tools = $_REQUEST['tools'] ;
  

  mail( "sales@attuaris.com", "Attuaris Demo Request",
    "First Name: $firstname \n Last Name: $lastname \n Location: $location \n  Title: $title \n Phone Number: $phone \n Email Address: $email \n Number of Employees: $employees \n Financial Modeling Tools Used Today: $tools" );
  
  header( "Location: http://www.attuaris.com/demo-request-thankyou.html" );
?>
